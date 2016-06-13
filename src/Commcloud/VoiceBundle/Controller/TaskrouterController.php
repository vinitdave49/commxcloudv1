<?php
//Auther : Ashwin Deshpande, create/delete task and other taskrouter thing
namespace Commcloud\VoiceBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Services_Twilio_Twiml;
use Services_Twilio_Auth_IpMessagingGrant;
use Services_Twilio_AccessToken;
use Commcloud\VoiceBundle\Entity\WCustomer;
use Commcloud\VoiceBundle\Entity\EventData;
use Commcloud\VoiceBundle\Entity\TaskEventData;
use Commcloud\VoiceBundle\Entity\WorkerEventData;

class TaskrouterController extends Controller
{
    //Need to create method for generic task creation
     /**
     * @Route("/createtask", name="createtask")
     */
    public function CreateTaskAction(Request $request)
    {
        $taskrouterclient = $this->get('commcloud_twilio_wrapper.twilio_taskrouter');
    	$attributes = $request->request->get('customeAttributes');
    	$attributes = json_encode($attributes);
    	try{
    	    $taskrouterclient->workspace->tasks->create($attributes, $this->getParameter('workflowSid'));
    	    return new Response(200);
    	}catch(\Exception $e){
    	    //return new Response(200);
    	     $this->get('logger')->error($e->getMessage());
    	}
    	
    	
    }
    

    
    /**
     * @Route("createactivityaction", name="createactivityaction")
     */
    public function createactivityAction(Request $request)
    {
        $actName=$request->request->get("actName");
        $availability=$request->request->get("availability");
        $taskrouterclient = $this->get('comcloud_twilio_wrapper.twilio_taskrouter');
        $activity = $taskrouterclient->workspace->activities->create($actName, $availability);
        //echo $activity->friendly_name;
        return new Response('Activity Created!!!'.$actName.' Id: '.$activity->sid);
        //return $this->render('cloudadmin/admin/createactivity.html.twig');
    }
    
    
    public function printTaskDetails(Request $request)
    {
        $task_event_data = new TaskEventData();
        $this->get('logger')->debug("CommCloud: PostEventCallBack: printTaskDetails: TaskSid: ".$request->request->get('TaskSid'));
        $task_event_data->setTasksid($request->request->get('TaskSid'));
        $this->get('logger')->debug("CommCloud: PostEventCallBack: printTaskDetails: TaskAttributes: ".$request->request->get('TaskAttributes'));
        $task_event_data->setTaskattributes($request->request->get('TaskAttributes'));
        $this->get('logger')->debug("CommCloud: PostEventCallBack: printTaskDetails: TaskAge: ".$request->request->get('TaskAge'));
        $task_event_data->setTaskage($request->request->get('TaskAge'));
        $this->get('logger')->debug("CommCloud: PostEventCallBack: printTaskDetails: TaskPriority: ".$request->request->get('TaskPriority'));
        $task_event_data->setTaskpriority($request->request->get('TaskPriority'));
        $this->get('logger')->debug("CommCloud: PostEventCallBack: printTaskDetails: TaskAssignmentStatus: ".$request->request->get('TaskAssignmentStatus'));
        $task_event_data->setTaskassignmentstatus($request->request->get('TaskAssignmentStatus'));
        $this->get('logger')->debug("CommCloud: PostEventCallBack: printTaskDetails: TaskCanceledReason: ".$request->request->get('TaskCanceledReason'));
        $task_event_data->setTaskcancelledreason($request->request->get('TaskCanceledReason'));
        $this->get('logger')->debug("CommCloud: PostEventCallBack: printTaskDetails: TaskCompletedReason: ".$request->request->get('TaskCompletedReason'));
        $task_event_data->setTaskcompletedreason($request->request->get('TaskCompletedReason'));
        $em = $this->getDoctrine()->getManager();
        $em->persist($task_event_data);
        $em->flush();         
    }
    
    public function printWorkerDetails(Request $request)
    {
        $worker_event_data = new WorkerEventData();
        $this->get('logger')->debug("CommCloud: PostEventCallBack: printWorkerDetails: WorkerSid: ".$request->request->get('WorkerSid'));
        $worker_event_data->setWorkersid($request->request->get('WorkerSid'));
        $this->get('logger')->debug("CommCloud: PostEventCallBack: printWorkerDetails: WorkerName: ".$request->request->get('WorkerName'));
        $worker_event_data->setWorkername($request->request->get('WorkerName'));
        $this->get('logger')->debug("CommCloud: PostEventCallBack: printWorkerDetails: WorkerAttributes: ".$request->request->get('WorkerAttributes'));
        $worker_event_data->setWorkerattributes($request->request->get('WorkerAttributes'));
        $this->get('logger')->debug("CommCloud: PostEventCallBack: printWorkerDetails: WorkerActivitySid: ".$request->request->get('WorkerActivitySid'));
        $worker_event_data->setWorkeractivitysid($request->request->get('WorkerActivitySid'));
        $this->get('logger')->debug("CommCloud: PostEventCallBack: printWorkerDetails: WorkerActivityName: ".$request->request->get('WorkerActivityName'));
        $worker_event_data->setWorkeractivityname($request->request->get('WorkerActivityName'));
        if($request->request->get('WorkerPreviousActivitySid') != ""){
            $this->get('logger')->debug("CommCloud: PostEventCallBack: printWorkerDetails: WorkerTimeInPreviousActivity: ".$request->request->get('WorkerTimeInPreviousActivity'));
            $worker_event_data->setWorkertimeinprevactivity($request->request->get('WorkerTimeInPreviousActivity'));
            $this->get('logger')->debug("CommCloud: PostEventCallBack: printWorkerDetails: WorkerPreviousActivitySid: ".$request->request->get('WorkerPreviousActivitySid'));
            $worker_event_data->setWorkerprevactivitysid($request->request->get('WorkerPreviousActivitySid'));
        }
        $em = $this->getDoctrine()->getManager();
        $em->persist($worker_event_data);
        $em->flush();        
    }
    
    public function printEventDetails(Request $request)
    {
        $event = new EventData();
        $this->get('logger')->debug("CommCloud: PostEventCallBack: EventType: ".$request->request->get('EventType'));
        $event->setEventtype($request->request->get('EventType'));
        $this->get('logger')->debug("CommCloud: PostEventCallBack: EventDescription: ".$request->request->get('EventDescription'));
        $event->setEventdescription($request->request->get('EventDescription'));
        $event->setAccountsid($request->request->get('AccountSid'));
        $event->setWorkspacesid($request->request->get('WorkspaceSid'));
        $event->setWorkspacename($request->request->get('WorkspaceName'));
        $this->get('logger')->debug("CommCloud: PostEventCallBack: ResourceType: ".$request->request->get('ResourceType'));
        $event->setResourcetype($request->request->get('ResourceType'));
        $this->get('logger')->debug("CommCloud: PostEventCallBack: ResourceSid: ".$request->request->get('ResourceSid'));
        $event->setResourcesid($request->request->get('ResourceSid'));
        $this->get('logger')->debug("CommCloud: PostEventCallBack: Timestamp: ".$request->request->get('Timestamp'));        
        $event->setTimestamp($request->request->get('Timestamp'));
        $this->get('logger')->debug("CommCloud: PostEventCallBack: WorkflowSid: ".$request->request->get('WorkflowSid'));
        $event->setWorkflowsid($request->request->get('WorkflowSid'));
        $this->get('logger')->debug("CommCloud: PostEventCallBack: TaskQueueSid: ".$request->request->get('TaskQueueSid'));
        $event->setTaskqueuesid($request->request->get('TaskQueueSid'));
        $this->get('logger')->debug("CommCloud: PostEventCallBack: ReservationSid: ".$request->request->get('ReservationSid'));
        $event->setReservationsid($request->request->get('ReservationSid'));
        $this->get('logger')->debug("CommCloud: PostEventCallBack: WorkerSid: ".$request->request->get('WorkerSid'));
        $event->setWorkersid($request->request->get('WorkerSid'));
        $this->get('logger')->debug("CommCloud: PostEventCallBack: TaskSid: ".$request->request->get('TaskSid'));
        $event->setTasksid($request->request->get('TaskSid'));        
        $em = $this->getDoctrine()->getManager();
        $em->persist($event);
        $em->flush();        
    }    
    
	/**
     * @Route("/posteventcallback", name="posteventcallback")
     */
    public function posteventcallbackAction(Request $request)
    {
        $this->get('logger')->debug("CommCloud: PostEventCallBack: EventType: ".$request->request->get('EventType'));
        // $this->printEventDetails($request);
        $event_type = $request->request->get('EventType');
        switch($event_type){
            case "task.created":
            case "task.canceled":
            case "task.completed":
            case "task.deleted":
            case "task.updated":
                $this->printTaskDetails($request);
                break;                
            case "task-queue.entered":
            case "task-queue.timeout":
            case "task-queue.moved":
                $this->printTaskDetails($request);
                break;
            case "reservation.created":
            case "reservation.accepted":
            case "reservation.rejected":
            case "reservation.timeout":
            case "reservation.canceled":
            case "reservation.rescinded":
                 $this->printEventDetails($request);
                 break;
            case "workflow.entered":
            case "workflow.timeout":
                 $this->printEventDetails($request);
                 break;
            case "worker.activity.update":
                $this->printWorkerDetails($request);
                break;                
        }
        return new Response(200);
    }
    
    /**
     * @Route("/poststatuscallback", name="poststatuscallback")
     */
    public function poststatuscallbackAction(Request $request)
    {
        $this->get('logger')->debug("CommCloud: PostStatusCallBack: CallSid: ".$request->request->get('CallSid'));
        $this->get('logger')->debug("CommCloud: PostStatusCallBack: Direction: ".$request->request->get('Direction'));
        $this->get('logger')->debug("CommCloud: PostStatusCallBack: CallDuration: ".$request->request->get('CallDuration'));
        $this->get('logger')->debug("CommCloud: PostStatusCallBack: RecordingDuration: ".$request->request->get('RecordingDuration'));
        return new Response(200);
    }
    
	/**
     * @Route("/assginmentcallback", name="commcloud_voice_assignmentcallback")
     */
	public function assginmentcallbackAction()
	{
		return new Response(200);
	}    
    /**
     * @Route("/taskassignmentcallback", name="commcloud_voice_taskassignmentcallback")
     */
    public function taskassignmentcallbackAction(Request $request)
    {
 		$assignment_instruction = ['instruction' => 'dequeue','from' => '+19164262378','record' => 'record-from-answer'];
		//$assignment_instruction = ['instruction' => 'dequeue','record' => 'record-from-answer'];
		$response = new Response(json_encode($assignment_instruction));
		$response->headers->set('Content-Type', 'application/json'); 
		return $response;
    }	
}