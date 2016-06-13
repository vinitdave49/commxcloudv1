<?php

namespace Commcloud\VoiceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Commcloud\VoiceBundle\Entity\WorkerInfo;
use Commcloud\VoiceBundle\Entity\WActivity;
use Commcloud\VoiceBundle\Entity\WTaskqueues;

class AdminController extends Controller
{
   /**
     * @Route("index", name="index")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
       // $this->get('logger')->debug("Called Index Page");
       // return $this->render('CommcloudVoiceBundle:Admin:home.html.twig');
    }
    /**
     * @Route("/app/createactivity", name="createactivity")
     */
    public function createactivityAction(Request $request)
    {
     try{
        $activities = $this->getDoctrine()
                ->getRepository('CommcloudVoiceBundle:WActivity')
                ->findAll();
        return $this->render('CommcloudVoiceBundle:Admin:createactivity.html.twig', array('activities' => $activities));
        }
     catch(\Exception $e){
        	error_log("An Exception has Happened " . $e->getMessage());
        	$this->get('logger')->error($e->getMessage());
        }
    }
    /**
     * @Route("createactivityredirect", name="createactivityredirect")
     */
    public function createactivityRedirectAction(Request $request)
    {
    try{
        $actFriendlyName=$request->request->get("actName");
        $availability=$request->request->get("availability");
        $dbActivity = $this->getDoctrine()
                ->getRepository('CommcloudVoiceBundle:WActivity')
                ->findOneByfriendly_name($actFriendlyName);
        if($dbActivity){
            return new Response("Activity is already exist");
        }
        else{
        
            $taskrouterclient = $this->get('commcloud_twilio_wrapper.twilio_taskrouter');
            $activity = $taskrouterclient->workspace->activities->create($actFriendlyName, $availability);
            $sid=$activity->sid;
            $new_activity = new WActivity();
            $new_activity->setFriendlyName($actFriendlyName);
            $new_activity->setAvailable($availability);
            $new_activity->setActivitySid($sid);
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($new_activity);
            $em->flush();
            //$this->createactivity($request);
            return new Response('Activity '.$actFriendlyName.' Created!!!');
        }
        }
     catch(\Exception $e){
        	error_log("An Exception has Happened " . $e->getMessage());
        	$this->get('logger')->error($e->getMessage());
        }
    }
    /**
     * @Route("updateworkerredirect", name="updateworkerredirect")
     */
    public function updateworkerRedirectAction(Request $request)
    {
    try{
        $taskrouterclient = $this->get('commcloud_twilio_wrapper.twilio_taskrouter');
        $wSid = $request->request->get("wSid");
        $wLoginId = $request->request->get("wLoginId");
        $wFName = $request->request->get("wFName");
        $wLName = $request->request->get("wLName");
        $wdisplayname = $request->request->get("wdisplaynameName");
        $wemail = $request->request->get("wemail");
        $wSkills = $request->request->get("wSkills");
        $wroles = $request->request->get("wroles");
        //$wActivity = $request->request->get("wactivity");
        
        
        $em = $this->getDoctrine()->getManager();
        $dbWorker = $this->getDoctrine()
                    ->getRepository('CommcloudVoiceBundle:WorkerInfo')
                    ->findOneBywloginid($wLoginId);
        if (!$dbWorker) {
            throw $this->createNotFoundException(
                'No worker found for id '.$dbWorker
            );
        }else{
            $dbWorker->setWfname($wFName);
            $dbWorker->setWlname($wLName);
            $dbWorker->setWemail($wemail);
            $dbWorker->setWdisplayname($wdisplayname);
            $dbWorker->setWskills($wSkills);
            $dbWorker->setWroles($wroles);
            $em->flush();
            
            $worker = $taskrouterclient->workspace->workers->get($wSid);
            $worker->update(
                    array(
                            'friendly_name' => $wdisplayname,
                            // 'activity_name' => $wActivity;
                            'Attributes' => $wSkills
                        )
                );
            return new Response("Worker ".$wLoginId." updated successfully");
        }
        }
     catch(\Exception $e){
        	error_log("An Exception has Happened " . $e->getMessage());
        	$this->get('logger')->error($e->getMessage());
        }
    }
    
    /**
     * @Route("deleteworkerredirect", name="deleteworkerredirect")
     */
    public function deleteworkerRedirectAction(Request $request){
    try{
        $taskrouterclient = $this->get('commcloud_twilio_wrapper.twilio_taskrouter');
        
        $wSid = $request->request->get('wSid');
        $wLoginId = $request->request->get('wLoginId');
        //echo "wsid: ".$wSid." loginid: ".$wLoginId;
        $em = $this->getDoctrine()->getManager();
        $dbWorker = $this->getDoctrine()
                    ->getRepository('CommcloudVoiceBundle:WorkerInfo')
                    ->findOneBywloginid($wLoginId);
        if (!$dbWorker) {
            throw $this->createNotFoundException(
                'No worker found for id '.$dbWorker
        );
        }else{
            $dbWorker->setWstatus(0);
            $em->flush();
            $taskrouterclient->workspace->workers->delete($wSid);
            return new Response("Worker ".$wLoginId." deleted successfully");
        }
    }
     catch(\Exception $e){
        	error_log("An Exception has Happened " . $e->getMessage());
        	$this->get('logger')->error($e->getMessage());
        }
    }
    
    
    /**
     * @Route("updateactivityredirect", name="updateactivityredirect")
     */
    public function updateactivityRedirectAction(Request $request)
    {
    try{
        $taskrouterclient = $this->get('commcloud_twilio_wrapper.twilio_taskrouter');
        $actSid=$request->request->get("actSid");
        $availability=trim($request->request->get("availability"));
        $availability=($availability=="Available" ? 1 : 0);
        $em = $this->getDoctrine()->getManager();
        $dbActivity = $this->getDoctrine()
        ->getRepository('CommcloudVoiceBundle:WActivity')
        ->findOneByactivity_sid($actSid);
        $dbActivity->setAvailable($availability);
        $em->flush();
        $availability=($availability==1? 'true' : 'false');
        $activity = $taskrouterclient->workspace->activities->get($actSid);
        $activity->update(
	            array(
	                'Available' => $availability)
        );
        return new Response('Activity Update successfully!!!');
    }
    catch(\Exception $e){
        	error_log("An Exception has Happened " . $e->getMessage());
        	$this->get('logger')->error($e->getMessage());
    }
    }
    
    /**
     * @Route("deleteactivityredirect", name="deleteactivityredirect")
     */
    public function deleteactivityRedirectAction(Request $request)
    {
    try{
        $taskrouterclient = $this->get('commcloud_twilio_wrapper.twilio_taskrouter');
        
        $actSid=$request->request->get("actSid");
        
        $em = $this->getDoctrine()->getManager();
        $dbActivity = $this->getDoctrine()
        ->getRepository('CommcloudVoiceBundle:WActivity')
        ->findOneByactivity_sid($actSid);
        $em->remove($dbActivity);
        $em->flush();
        
        $activity = $taskrouterclient->workspace->activities->delete($actSid);
        return new Response('Activity Deleted successfully!!!');
    }
    catch(\Exception $e){
        	error_log("An Exception has Happened " . $e->getMessage());
        	$this->get('logger')->error($e->getMessage());
    }
    }
    
    /**
     * @Route("deletetaskqueueredirect", name="deletetaskqueueredirect")
     */
    public function deletetaskqueueRedirectAction(Request $request)
    {
    try{
        $taskrouterclient = $this->get('commcloud_twilio_wrapper.twilio_taskrouter');
        
        $taskqueueSid=$request->request->get("taskqueueSid");
        
        $em = $this->getDoctrine()->getManager();
        $dbActivity = $this->getDoctrine()
        ->getRepository('CommcloudVoiceBundle:WTaskqueues')
        ->findOneBytaskqueueSid($taskqueueSid);
        $em->remove($dbActivity);
        $em->flush();
        
        $activity = $taskrouterclient->workspace->task_queues->delete($taskqueueSid);
        return new Response('TaskWueue'.$taskqueueSid.' Deleted!!!');
    }
     catch(\Exception $e){
        	error_log("An Exception has Happened " . $e->getMessage());
        	$this->get('logger')->error($e->getMessage());
    }
    }
    
    /**
     * @Route("createactivityTemplate", name="createactivityTemplate")
     */
    public function createActivityTemplateAction(Request $request)
    {
        return $this->render('CommcloudVoiceBundle:Admin:createactivitytemplate.html.twig');
    }
    /**
     * @Route("createworkerTemplate", name="createworkerTemplate")
     */
    public function createWorkerTemplateAction(Request $request)
    {
        return $this->render('CommcloudVoiceBundle:Admin:createworkertemplate.html.twig');
    }
    
    /**
     * @Route("/app/createworker", name="createworker")
     */
    public function createworker(Request $request)
    {
    try{
        /* This code is to display fields on create worker form from the database(created in workertemplate)
        $textboxes = $this->getDoctrine()
            ->getRepository('AppBundle:TemplateDetails')
            ->findBy(array('attributeType'=>1));

        $checkboxes = $this->getDoctrine()
            ->getRepository('AppBundle:TemplateDetails')
            ->findBy(array('attributeType'=>2));
             return $this->render('cloudadmin/admin/createworker.html.twig', array('textboxes'=>$textboxes, 'checkboxes'=>$checkboxes));
        */
        $workers = $this->getDoctrine()
        ->getRepository('CommcloudVoiceBundle:WorkerInfo')
        //->findAll();
        ->findBywstatus(1);
        
        return $this->render('CommcloudVoiceBundle:Admin:createworker.html.twig', array('workers' => $workers));
    }
     catch(\Exception $e){
        	error_log("An Exception has Happened " . $e->getMessage());
        	$this->get('logger')->error($e->getMessage());
    }
    }
    //Shubhankar copied below method from TaskRouterController.php 5/11/2016
    
     /**
    * @Route("createworkeraction", name="createworkeraction")
    */
    public function createworkerAction(Request $request)
    {
    try{
        $wFName=$request->request->get('wFName');
        $wLName=$request->request->get("wLName");
        $wName=$request->request->get('wdisplayname');
        $wemail=$request->request->get("wemail");
        $wSkills=$request->request->get("wSkills");
        $wroles=$request->request->get("wroles");
        $wParam = array();
        $wParam['Attributes'] = $wSkills;
        $wParam['ActivitySid'] = "WA7b56deb0d7cd97a69b663e4a62532ac7";   //sid of 'offline' activity
        $taskrouterclient = $this->get('commcloud_twilio_wrapper.twilio_taskrouter');
        $worker = $taskrouterclient->workspace->workers->create($wName, $wParam);
        echo $worker->friendly_name;
        
        $new_worker = new WorkerInfo();
        $new_worker->setWfname($wFName);
        $new_worker->setWlname($wLName);
        $new_worker->setWemail($wemail);
        $new_worker->setWdisplayname($wName);
        $new_worker->setWskills($wSkills);
        $new_worker->setWsid($worker->sid);
        
        $wPass  = "pass123";
        $encoder = $this->container->get('security.encoder_factory')
                                    ->getEncoder($new_worker);

        $enPass = $encoder->encodePassword($wPass, $new_worker->getSalt());
        //$enPass = bcrypt($wPass);
        $new_worker->setWpass($enPass);
        $new_worker->setWroles($wroles);

        $em = $this->getDoctrine()->getManager();
        $em->persist($new_worker);
        $em->flush();
        //echo $worker->sid;
        return new Response('Worker Created!!!'.$wFName.' Id: '.$worker->sid);
    }
    catch(\Exception $e){
        	error_log("An Exception has Happened " . $e->getMessage());
        	$this->get('logger')->error($e->getMessage());
    }
    }
    /**
     * @Route("/app/createtaskqueue", name="createtaskqueue")
     */
    public function createtaskqueue(Request $request)
    {
        try{
            $taskqueues = $this->getDoctrine()
            ->getRepository('CommcloudVoiceBundle:WTaskqueues')
            ->findAll();
            return $this->render('CommcloudVoiceBundle:Admin:createtaskqueue.html.twig', array('taskqueues' => $taskqueues));
        }
        catch(\Exception $e){
            	error_log("An Exception has Happened " . $e->getMessage());
            	$this->get('logger')->error($e->getMessage());
        }
    }
    /**
     * @Route("createtaskqueueaction", name="createtaskqueueaction")
     */
    public function createtaskqueueAction(Request $request)
    {
    try{
        //var_dump($request);
        $tqName=$request->request->get('tqName');
        $reservationActivity=$request->request->get("reservationActivity");
        $reservationActivityName=$request->request->get("reservationActivityName");
        $assignmentActivity=$request->request->get("assignmentActivity");
        $assignmentActivityName=$request->request->get("assignmentActivityName");
        $maxreservWorkers=$request->request->get("maxreservWorkers");
        $targetWorkers=$request->request->get("targetWorkers");
        $targetWorkersParam=array("TargetWorkers"=>$targetWorkers);
        //echo $reservationActivity;
        $dbActivity = $this->getDoctrine()
                ->getRepository('CommcloudVoiceBundle:WTaskqueues')
                ->findOneByfriendlyName($tqName);
        if($dbActivity){
            return new Response("Taskqueue is already exist");
        }
        else{
            $taskrouterclient = $this->get('commcloud_twilio_wrapper.twilio_taskrouter');
            $taskQueue = $taskrouterclient->workspace->task_queues->create($tqName,$assignmentActivity,$reservationActivity, $targetWorkersParam);
            $new_taskqueue = new WTaskqueues();
            $new_taskqueue->setFriendlyName($tqName);
            $new_taskqueue->setReservationActivitySid($reservationActivity);
            $new_taskqueue->setReservationActivityName($reservationActivityName);
            $new_taskqueue->setAssignmentActivitySid($assignmentActivity);
            $new_taskqueue->setAssignmentActivityName($assignmentActivityName);
            $new_taskqueue->setMaxReservedWorkers($maxreservWorkers);
            $new_taskqueue->setTargetWorkers($targetWorkers);
            $new_taskqueue->setTaskqueueSid($taskQueue->sid);
            $new_taskqueue->setAccountSid($taskQueue->account_sid);
            $new_taskqueue->setWorkspaceSid($taskQueue->workspace_sid);
            // $new_taskqueue->setDateCreated($taskQueue->date_created);
            // $new_taskqueue->setDateUpdated($taskQueue->date_updated);
            $em = $this->getDoctrine()->getManager();
            $em->persist($new_taskqueue);
            $em->flush();
            return new Response('TaskQueue Created!!!'.$tqName.' Id: '.$taskQueue->sid);
            //return $this->render('cloudadmin/admin/createtaskqueue.html.twig');
        }
    }
     catch(\Exception $e){
         	error_log("An Exception has Happened " . $e->getMessage());
         	$this->get('logger')->error($e->getMessage());
        }
    }
    
    /**
     * @Route("updatetaskqueueredirect", name="updatetaskqueueredirect")
     */
    public function updatetaskqueueRedirectAction(Request $request)
    {
        try{
            $taskrouterclient = $this->get('commcloud_twilio_wrapper.twilio_taskrouter');
            //$taskQueue = $taskrouterclient->workspace->task_queues->create($tqName,$assignmentActivity,$reservationActivity, $targetWorkersParam);
            
            $taskqueueSid = $request->request->get("taskqueueSid");
            $taskqueueName = $request->request->get("taskqueueName");
            
            $taskqueueResAct= $request->request->get("taskqueueResAct");
    
            $em = $this->getDoctrine()->getManager();
            $dbActivity = $this->getDoctrine()
            ->getRepository('CommcloudVoiceBundle:WTaskqueues')
            ->findOneBytaskqueue_sid($taskqueueSid);
    
            if(!$dbActivity){
                return new Response("Taskqueue does not exist");
            }
            else{
                $taskQueue = $taskrouterclient->workspace->task_queues->get($taskqueueSid);
                $taskQueue->update(
                    array(
		                'TargetWorkers' => $request->request->get("taskqueueTarget"),
		                'ReservationActivitySid' => $request->request->get("taskqueueResActSid"),
		                'AssignmentActivitySid' => $request->request->get("taskqueueAssignActSid"),
		                'MaxReservedWorkers' => $request->request->get("taskqueueMaxReserv")
	                )
                );
                
                
                $dbActivity->setReservationActivitySid($request->request->get("taskqueueResActSid"));
                $dbActivity->setReservationActivityName($request->request->get("taskqueueResAct"));
                $dbActivity->setAssignmentActivitySid($request->request->get("taskqueueAssignActSid"));
                $dbActivity->setAssignmentActivityName($request->request->get("taskqueueAssignAct"));
                $dbActivity->setMaxReservedWorkers($request->request->get("taskqueueMaxReserv"));
                $dbActivity->setTargetWorkers($request->request->get("taskqueueTarget"));
                $em->flush();
            }
            return new Response('TaskQueue '.$taskqueueName.' with Id: '.$taskqueueSid.' updated successfully');
        }
        catch(\Exception $e){
            	error_log("An Exception has Happened " . $e->getMessage());
            	$this->get('logger')->error($e->getMessage());
        }
    }
    /**
     * @Route("/app/createworkflow", name="createworkflow")
     */
    public function createworkflowAction(Request $request)
    {
        return $this->render('CommcloudVoiceBundle:Admin:createworkflow.html.twig');
    }
    /**
     * @Route("createtaskqueueTemplate", name="createtaskqueueTemplate")
     */
    public function createTaskQueueTemplateAction(Request $request)
    {
        return $this->render('CommcloudVoiceBundle:Admin:createtaskqueuetemplate.html.twig');
    }
    /**
     * @Route("createuser", name="createuser")
     */
    public function createuserAction(Request $request)
    {
        //return $this->render('cloudadmin/admin/createuser.html.twig');
    }
    /**
     * @Route("createproject", name="createproject")
     */
    public function createprojecttemplateAction(Request $request)
    {
       // $projects = $this->getDoctrine()
        //        ->getRepository('AppBundle:Project')
        //        ->findAll();

       // return $this->render('cloudadmin/admin/createproject.html.twig', array('projects'=>$projects));
    }
    /**
     * @Route("configureproject", name="configureproject")
     */
    public function configureprojectAction(Request $request)
    {
       // $workspaceid = $request->request->get("workspaceid");
       // $projectname = $request->request->get("projectname");
       // $session = $this->get('session');
       // $session->set('workspaceid', $workspaceid);
        //$this->getRequest()->getSession()->set('workspaceid', $workspaceid);
       // return $this->render('CommcloudVoiceBundle:Admin:configureproject.html.twig', array('projectname'=>$projectname, 'workspaceid'=>$workspaceid));
    }
    /**
     * @Route("createprojectaction", name="createprojectaction")
     */
    public function createprojectAction(Request $request)
    {
    try{
        $projectname = json_decode(file_get_contents("php://input"));
        //include_once $this->get('kernel')->getRootDir().'/../vendor/twilio/sdk/Services/Twilio.php';
        $taskrouterclient = $this->get('comcloud_twilio_wrapper.twilio_taskrouter');
        //$path = $this->get('kernel')->getRootDir();
        $accountSid = 'AC0f18494502dee91457252ff7b2bada6a';
        $authToken = '2f430f7691acb543889ef3a721c1c096';
        $params = array();
        $params['EventCallbackUrl'] = 'http://requestb.in/vh9reovh';
        $params['Template'] = 'FIFO';

        //$taskrouterclient = new \TaskRouter_Services_Twilio($accountSid, $authToken, null);;

        $workspace = $taskrouterclient->workspaces->create($projectname, $params);
        $workspaceId = $workspace->sid;

        $new_project = new Project();
        $new_project->setProjectname($projectname);
        $new_project->setWorkspaceid($workspaceId);

        $em = $this->getDoctrine()->getManager();
        $em->persist($new_project);
        $em->flush();

        //$query = $em->createQuery('create database db_'.$projectname);

        //$project = $query->getResult();

        //var_dump($project);

        return new Response('<h1>Project Created!!!'.$projectname.' Id: '.$workspaceId.'</h1>');
    }
     catch(\Exception $e){
        	error_log("An Exception has Happened " . $e->getMessage());
        	$this->get('logger')->error($e->getMessage());
    }
    }
  
   
    /**
     * @Route("demopassword", name="")
     */
    public function demopassword()
    {
    try{    
        $new_worker = new WorkerInfo();
        $wPass  = "pass123";
        $encoder = $this->container->get('security.encoder_factory')
                                   ->getEncoder($new_worker);

        $enPass = $encoder->encodePassword($wPass, $new_worker->getSalt());
        return new Response($enPass);
    }
     catch(\Exception $e){
        	error_log("An Exception has Happened " . $e->getMessage());
        	$this->get('logger')->error($e->getMessage());
        }
    }
    
}
