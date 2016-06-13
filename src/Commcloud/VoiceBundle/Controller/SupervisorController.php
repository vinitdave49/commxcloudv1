<?php

namespace Commcloud\VoiceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Yaml\Parser;
use Commcloud\VoiceBundle\Entity\HtWorkeractdurationData;
use Commcloud\VoiceBundle\Entity\HtWorkflowData;
use Commcloud\VoiceBundle\Entity\WorkerInfo;
use Commcloud\VoiceBundle\Entity\WWorkflows;
use \DateTime;
class SupervisorController extends Controller
{
    public function generate_color() {
        return '#' . str_pad(dechex(mt_rand(0, 0xFFFFFF)), 6, '0', STR_PAD_LEFT);
    }
    public function generate_highlight($color, $amount) {
        //return '#' . str_pad(dechex(mt_rand(0, 0xFFFFFF)), 6, '0', STR_PAD_LEFT);
        $rgb = hexdec($color);
        
        $red = $rgb >> 16;
        $green = ($rgb >> 8) & 0xFF;
        $blue = $rgb & 0xFF;

        //manipulate and convert back to hexadecimal
        return dechex(($red + $amount) << 16 | ($green + $amount) << 8 | ($blue + $amount));

        // $R = hexdec(substr($color,0,2));
        // $G = hexdec(substr($color,2,2));
        // $B = hexdec(substr($color,4,2));
        
        // $var_R = ( $R / 255 );                     //RGB from 0 to 255
        // $var_G = ( $G / 255 );
        // $var_B = ( $B / 255 );
        //$this->get('logger')->debug("Red:: ".$var_R."Green: ".$var_G."Blue: ".$var_B);
    }

    public function convertDate2ISODate($date){
        return date('c', strtotime($date));
    }
    /**
     * @Route("/supervisorindex", name="reporting_home")
     */
    public function indexAction()
    {
        return $this->render('CommcloudVoiceBundle:Default:index.html.twig');
    }
    /**
     * @Route("/app/load_rt_workflow_report_filter", name="load_rt_workflow_report_filter")
     */
    public function rtworkflowreportfilterAction(Request $request)
    {
        $taskrouterclient = $this->get('commcloud_twilio_wrapper.twilio_taskrouter');
        $taskqueuesArray = array();
        foreach($taskrouterclient->workspace->workflows as $workflow)
        {
            $this->get('logger')->debug("CommCloud: Realtime Workflow Report Filter: ".$workflow->friendly_name);
        	$workflowsArray[] = $workflow;
        }
        return $this->render('CommcloudVoiceBundle:Supervisor/Realtime:rt_workflowreport.html.twig', array('workflows'=>$workflowsArray));
    }
    /**
     * @Route("/load_rt_workflow_report", name="load_rt_workflow_report")
     */
    public function rtworkflowreportAction(Request $request)
    {
        try {
            $taskrouterclient = $this->get('commcloud_twilio_wrapper.twilio_taskrouter');
            $filterArray = $request->request->all();
            $startdate_iso = $this->convertDate2ISODate($filterArray['startdate']);
            $this->get('logger')->debug("CommCloud: Realtime Workflow Report Action: startdate in ISO format: ".$startdate_iso);
            $enddate_iso = $this->convertDate2ISODate($filterArray['enddate']);
            $this->get('logger')->debug("CommCloud: Realtime Workflow Report Action: enddate in ISO format: ".$enddate_iso);
            $args = array();
            if ($filterArray['minutes'] == 0){
                 $args = array("StartDate"=>$startdate_iso, "EndDate"=>$enddate_iso);
            } else {
                 $args = array("Minutes"=>$filterArray['minutes']);
            }
            $statistics = $taskrouterclient->getWorkflowStatistics($filterArray['workflow'], $args);
            $realtimestatsString = json_encode($statistics->realtime);
            $realtimestatsArray = json_decode($realtimestatsString, true);
            $realtimeactivityArray = $realtimestatsArray['tasks_by_status'];
            $rt_response = array();
            $i = 0;
            $this->get('logger')->debug("CommCloud: Realtime Workflow Report Action: Path to config: ".$this->get('kernel')->getRootDir()." Hello: ".__DIR__);
            $yaml = new Parser();
            $colorvalue = $yaml->parse(file_get_contents($this->get('kernel')->getRootDir().'/config/color_config.yml'));
            //$colorvalue = $yaml->parse(file_get_contents('/home/ubuntu/workspace/commcloud/app/config/color_config.yml'));
            $this->get('logger')->debug("CommCloud: Realtime Workflow Report Action: Config Dump: ".count($colorvalue));
            foreach ($realtimeactivityArray as $key=>$value){
                $this->get('logger')->debug("CommCloud: Realtime Workflow Report Action: Color: ".$colorvalue['task_status_'.$i]['color'].": Highlight Color: ".$colorvalue['task_status_'.$i]['highlight']);
                $rt_response[] = array("value"=>$value, "color"=>$colorvalue['task_status_'.$i]['color'], "highlight"=>$colorvalue['task_status_'.$i]['highlight'], "label"=>$key);
                $i = $i + 1;
            }
            return $this->render('CommcloudVoiceBundle:Supervisor/Realtime:rt_workflowdatatable.html.twig', array('realtime_stats'=>$realtimestatsArray, 'realtime_tasks'=>$rt_response));
            //return new Response(var_dump($rt_response));            
        } catch (ParseException $e) {
            $this->get('logger')->debug("CommCloud: Realtime Workflow Report Action: Config Dump: ".$e->getMessage());
        }
    }    
    /**
     * @Route("/app/load_rt_worker_report_filter", name="load_rt_worker_report_filter")
     */
    public function rtworkerreportfilterAction(Request $request)
    {
        $taskrouterclient = $this->get('commcloud_twilio_wrapper.twilio_taskrouter');
        $taskqueuesArray = array();
        foreach($taskrouterclient->workspace->task_queues as $taskqueue)
        {
            $this->get('logger')->debug("CommCloud: Realtime Worker Report Filter: TaskQueue: ".$taskqueue->friendly_name);
        	$taskqueuesArray[] = $taskqueue;
        }
        return $this->render('CommcloudVoiceBundle:Supervisor/Realtime:rt_workerreport.html.twig', array('taskqueues'=>$taskqueuesArray));
    }
    /**
     * @Route("/load_rt_worker_report", name="load_rt_worker_report")
     */
    public function rtworkerreportAction(Request $request)
    {
        try{
            $taskrouterclient = $this->get('commcloud_twilio_wrapper.twilio_taskrouter');
            $filterArray = $request->request->all();
            $startdate_iso = $this->convertDate2ISODate($filterArray['startdate']);
            $this->get('logger')->debug("CommCloud: Realtime Worker Report Action: startdate in ISO format: ".$startdate_iso);
            $enddate_iso = $this->convertDate2ISODate($filterArray['enddate']);
            $this->get('logger')->debug("CommCloud: Realtime Worker Report Action: enddate in ISO format: ".$enddate_iso);
            $args = array();
            if ($filterArray['minutes'] == 0){
                 $args = array("StartDate"=>$startdate_iso, "EndDate"=>$enddate_iso);
            } else {
                 $args = array("Minutes"=>$filterArray['minutes']);
            }
            $statistics = $taskrouterclient->getWorkersStatistics($args);
            $realtimestatsString = json_encode($statistics->realtime);
            $realtimestatsArray = json_decode($realtimestatsString, true);
            $realtimeactivityArray = $realtimestatsArray['activity_statistics'];
            $rt_response = array();
            $i = 0;
            $color_array = array("#F7464A", "#46BFBD", "#FDB45C", "#FFD700");
            $highlight_array = array("#FF5A5E","#5AD3D1","#FFC870", "#FFFF00");
            $this->get('logger')->debug("CommCloud: Realtime Worker Report Action: Path to config: ".$this->get('kernel')->getRootDir()." Hello: ".__DIR__);
            $yaml = new Parser();
            $colorvalue = $yaml->parse(file_get_contents($this->get('kernel')->getRootDir().'/config/color_config.yml'));
            //$colorvalue = $yaml->parse(file_get_contents('/home/ubuntu/workspace/commcloud/app/config/color_config.yml'));
            $this->get('logger')->debug("CommCloud: Realtime Worker Report Action: Config Dump: ".count($colorvalue));
            foreach ($realtimeactivityArray as $rt_array){
                $this->get('logger')->debug("CommCloud: Realtime Workflow Report Action: Color: ".$colorvalue['activity_status_'.$i]['color'].": Highlight Color: ".$colorvalue['activity_status_'.$i]['highlight']);
                $rt_response[] = array("value"=>$rt_array['workers'], "color"=>$colorvalue['activity_status_'.$i]['color'], "highlight"=>$colorvalue['activity_status_'.$i]['highlight'], "label"=>$rt_array['friendly_name']);
                $i = $i + 1;
            }
            return $this->render('CommcloudVoiceBundle:Supervisor/Realtime:rt_workerdatatable.html.twig', array('realtime_tasks'=>$rt_response));
            //return new Response(var_dump($realtimeactivityArray));
        }catch(ParseException $e){
            $this->get('logger')->debug("CommCloud: Realtime Worker Report Action: Exception: ".$e->getMessage());
        }
    }    
    /**
     * @Route("/app/load_rt_taskqueue_report_filter", name="load_rt_taskqueue_report_filter")
     */
    public function rttaskqueuereportfilterAction(Request $request)
    {
        $taskrouterclient = $this->get('commcloud_twilio_wrapper.twilio_taskrouter');
        $taskqueuesArray = array();
        foreach($taskrouterclient->workspace->task_queues as $taskqueue)
        {
            $this->get('logger')->debug("CommCloud: Realtime Taskqueue Report Filter: TaskQueue: ".$taskqueue->friendly_name);
        	$taskqueuesArray[] = $taskqueue;
        }
        return $this->render('CommcloudVoiceBundle:Supervisor/Realtime:rt_taskqueuereport.html.twig', array('taskqueues'=>$taskqueuesArray));
    }
    /**
     * @Route("/load_rt_taskqueue_report", name="load_rt_taskqueue_report")
     */
    public function rttaskqueuereportAction(Request $request)
    {
        $taskrouterclient = $this->get('commcloud_twilio_wrapper.twilio_taskrouter');
        $filterArray = $request->request->all();
        $startdate_iso = $this->convertDate2ISODate($filterArray['startdate']);
        $this->get('logger')->debug("CommCloud: Realtime Taskqueue Report Action: startdate in ISO format: ".$startdate_iso);
        $enddate_iso = $this->convertDate2ISODate($filterArray['enddate']);
        $this->get('logger')->debug("CommCloud: Realtime Taskqueue Report Action: enddate in ISO format: ".$enddate_iso);
        $args = array();
        if ($filterArray['minutes'] == 0){
             $args = array("StartDate"=>$startdate_iso, "EndDate"=>$enddate_iso);
        } else {
             $args = array("Minutes"=>$filterArray['minutes']);
        }
        $statistics = $taskrouterclient->getTaskQueueStatistics($filterArray['taskqueue'], $args);
        $realtimestatsString = json_encode($statistics->realtime);
        $realtimestatsArray[] = json_decode($realtimestatsString, true);
        $realtimeactivityArray = $realtimestatsArray[0]['activity_statistics'];
        $realtimetasksArray = $realtimestatsArray[0]['tasks_by_status'];
        $color_array = array("#F7464A", "#46BFBD", "#FDB45C");
        $highlight_array = array("#FF5A5E","#5AD3D1","#FFC870");
        $rt_response = array();
        $rt_response[]=array("value"=>$realtimetasksArray['pending'], "color"=>$color_array[0], "highlight"=>$highlight_array[0], "label"=>"Pending Tasks");
        $rt_response[]=array("value"=>$realtimetasksArray['assigned'], "color"=>$color_array[1], "highlight"=>$highlight_array[1], "label"=>"Assigned Tasks");
        $rt_response[]=array("value"=>$realtimetasksArray['reserved'], "color"=>$color_array[2], "highlight"=>$highlight_array[2], "label"=>"Reserved Tasks");
        return $this->render('CommcloudVoiceBundle:Supervisor/Realtime:rt_taskqueuedatatable.html.twig', array('realtime_data'=>$realtimestatsArray,'realtime_activitystats'=>$realtimeactivityArray,'realtime_tasks'=>$rt_response));
        //return new Response(var_dump($rt_response));
    }
    
    /**
     * @Route("/load_ht_taskqueue_report", name="load_ht_taskqueue_report")
     */
    public function httaskqueuereportAction(Request $request)
    {
        $filterArray = $request->request->all();
        $starttime = $filterArray['startdatetime'];
        $this->get('logger')->debug("CommCloud: Historical Taskqueue: startdatetime: ".$starttime);
        $endtime = $filterArray['enddatetime'];
        $this->get('logger')->debug("CommCloud: Historical Taskqueue: enddatetime: ".$endtime);
        $taskqueuesid = $filterArray['taskqueue'];
        $this->get('logger')->debug("CommCloud: Historical Taskqueue: Taskqueue Name: ".$taskqueuesid);
        $em = $this->getDoctrine()->getManager();
        
        $httaskqueue_data = $em->getRepository('CommcloudVoiceBundle:HtTaskqueueData')
                                ->findAllByStartTime($taskqueuesid, $starttime, $endtime);
        
        $taskqueue = $em->getRepository('CommcloudVoiceBundle:WTaskqueues')
                        ->findOneByTaskqueueSid($taskqueuesid);
                        
        return $this->render('CommcloudVoiceBundle:Supervisor/Historical:ht_taskqueue_report.html.twig', 
        array('starttime'=>$starttime,'endtime'=>$endtime,'taskqueuename'=>$taskqueue->getFriendlyName(),'htdata'=>$httaskqueue_data));
        //return new Response(var_dump($historicalstatsArray));
    }
    
    /**
     * @Route("/app/load_ht_taskqueue_report_filter", name="load_ht_taskqueue_report_filter")
     */
    public function httaskqueuereportfilterAction(Request $request)
    {
        $taskrouterclient = $this->get('commcloud_twilio_wrapper.twilio_taskrouter');
        $taskqueuesArray = array();
        foreach($taskrouterclient->workspace->task_queues as $taskqueue)
        {
            //$this->get('logger')->debug("CommCloud: Historical Taskqueue Report Filter: TaskQueue: ".$taskqueue->friendly_name);
        	$taskqueuesArray[] = $taskqueue;
        }
        return $this->render('CommcloudVoiceBundle:Supervisor/Historical:ht_taskqueue_filter.html.twig', array('taskqueues'=>$taskqueuesArray));
    }
    /**
     * @Route("/load_ht_workflow_report", name="load_ht_workflow_report")
     */
    public function htworkflowreportAction(Request $request)
    {
        $filterArray = $request->request->all();
        $starttime = $filterArray['startdatetime'];
        $this->get('logger')->debug("CommCloud: Historical Workflow: startdatetime: ".$starttime);
        $endtime = $filterArray['enddatetime'];
        $this->get('logger')->debug("CommCloud: Historical Workflow: enddatetime: ".$endtime);
        $workflowsid = $filterArray['workflow'];
        $this->get('logger')->debug("CommCloud: Historical Workflow: Workflow Name: ".$workflowsid);
        $em = $this->getDoctrine()->getManager();
        
        $htworkflow_data = $em->getRepository('CommcloudVoiceBundle:HtWorkflowData')
                                ->findAllByStartTime($workflowsid, $starttime, $endtime);
        
        $workflow = $em->getRepository('CommcloudVoiceBundle:WWorkflows')
                        ->findOneByWorkflowSid($workflowsid);
                        
        return $this->render('CommcloudVoiceBundle:Supervisor/Historical:ht_workflow_report.html.twig', 
        array('startdate'=>$starttime,'enddate'=>$endtime,'workflowname'=>$workflow->getFriendlyName(),'htdata'=>$htworkflow_data));
        //return new Response(var_dump($historicalstatsArray));
    }
    
    /**
     * @Route("/app/load_ht_workflow_report_filter", name="load_ht_workflow_report_filter")
     */
    public function htworkflowreportfilterAction(Request $request)
    {
        $taskrouterclient = $this->get('commcloud_twilio_wrapper.twilio_taskrouter');
        $workflowsArray = array();
        foreach($taskrouterclient->workspace->workflows as $workflow)
        {
            $this->get('logger')->debug("CommCloud: Historical Workflow Report Filter: TaskQueue: ".$workflow->friendly_name);
        	$workflowsArray[] = $workflow;
        }
        return $this->render('CommcloudVoiceBundle:Supervisor/Historical:ht_workflow_filter.html.twig', array('workflows'=>$workflowsArray));
    }
    /**
     * @Route("/app/load_ht_activityduration_filter", name="load_ht_activityduration_filter")
     */
    public function htactivitydurationfilterAction(Request $request)
    {
        $taskrouterclient = $this->get('commcloud_twilio_wrapper.twilio_taskrouter');
        $workersArray = array();
        foreach($taskrouterclient->workspace->workers as $worker)
        {
            //$this->get('logger')->debug("CommCloud: Historical Worker Activity Duration by TaskQueue Report Filter: TaskQueue: ".$worker->friendly_name);
        	$workersArray[] = $worker;
        }
        
        return $this->render('CommcloudVoiceBundle:Supervisor/Historical:ht_activityduration_filter.html.twig', array('workers'=>$workersArray));
    }
    /**
     * @Route("/load_ht_activityduration_report", name="load_ht_activityduration_report")
     */
    public function htactivitydurationreportAction(Request $request)
    {
        $filterArray = $request->request->all();
        $endtime = $filterArray['enddatetime'];
        $this->get('logger')->debug("CommCloud: Historical Worker Activity Duration: enddatetime: ".$endtime);
        $starttime = $filterArray['startdatetime'];
        $this->get('logger')->debug("CommCloud: Historical Worker Activity Duration: startdatetime: ".$starttime);
        $workersid = $filterArray['worker'];
        $this->get('logger')->debug("CommCloud: Historical Worker Activity Duration: Worker Sid: ".$workersid);
        //$inputArray = array();
        $em = $this->getDoctrine()->getManager();

        $htworkeractduration_data = $em->getRepository('CommcloudVoiceBundle:HtWorkeractdurationData')
                        ->findByStartTime($workersid, $starttime, $endtime);
        
        // foreach($htworkeractduration_data as $value){
        //     $this->get('logger')->debug("CommCloud: Historical Worker Activity Duration: Min Duration: ".$value->getMinDuration());
        // }
        
        $htworker = $em->getRepository('CommcloudVoiceBundle:WorkerInfo')
                        ->findOneByWsid($workersid);

        //var_dump($htworkeractduration_data);
        return $this->render('CommcloudVoiceBundle:Supervisor/Historical:ht_activityduration_report.html.twig', 
            array('startdate'=>$starttime,'enddate'=>$endtime,'workername'=>$htworker->getWdisplayname(),'htdata'=>$htworkeractduration_data));
    }    

     /**
     * @Route("/app/load_rt_calllist_filter", name="load_rt_calllist_filter")
     */
    public function rtcalllistfilterAction(Request $request)
    {
        return $this->render('CommcloudVoiceBundle:Supervisor/Realtime:rt_calllist_filter.html.twig');
    }

     /**
     * @Route("/load_rt_callist_report", name="load_rt_calllist_report")
     */
    public function rtcalllistAction(Request $request)
    {
    	$twilio = $this->get('commcloud_twilio_wrapper.twilio_api');
    	$filterArray = $request->request->all();
        $to = $filterArray['to'];
        $from = $filterArray['from'];
        $status = $filterArray['status'];
        $this->get('logger')->debug("CommCloud: Realtime Call List Report: To: ".$to.' From: '.$from.' Status: '.$status);
	 	//$calls = $twilio->account->calls->getIterator(0, 50, array('Status' => $status, 'StartTime>' => $start_date, 'StartTime<' => $end_date));
	 	$callArray = array();
        foreach($twilio->account->calls->getIterator(0, 50, array('Status' => $status)) as $call){
            $callArray[] = $call;
        }
	 	//return new Response(200);
	 	return $this->render('CommcloudVoiceBundle:Supervisor/Realtime:rt_calllist_report.html.twig', array('calls' => $callArray));
    }

     /**
     * @Route("/app/load_ht_calllist_filter", name="load_ht_calllist_filter")
     */
    public function htcalllistfilterAction(Request $request)
    {
        return $this->render('CommcloudVoiceBundle:Supervisor/Historical:ht_calllist_filter.html.twig');
    }
     /**
     * @Route("/load_ht_callist_report", name="load_ht_calllist_report")
     */
    public function htcalllistAction(Request $request)
    {
    	$twilio = $this->get('commcloud_twilio_wrapper.twilio_api');
    	$filterArray = $request->request->all();
        $endtime = $filterArray['enddatetime'];
        $starttime = $filterArray['startdatetime'];
        $starttimestamp = strtotime($starttime);
        $start_date = date('Y-m-d',$starttimestamp);
        $endtimestamp = strtotime($endtime);
        $end_date = date('Y-m-d',$endtimestamp);        
        $this->get('logger')->debug("CommCloud: Historical Call List Report: Start Date: ".$start_date.' End Date: '.$end_date);
        $status = $filterArray['status'];
        // $direction = $filterArray['direction'];
        $this->get('logger')->debug("CommCloud: Historical Call List Report: Start Time: ".$starttime.' End Time: '.$endtime.' Call Status: '.$status);
	 	//$calls = $twilio->account->calls->getIterator(0, 50, array('Status' => $status, 'StartTime>' => $start_date, 'StartTime<' => $end_date));
	 	$callArray = array();
        foreach($twilio->account->calls->getIterator(0, 50, array('Status' => $status, 'StartTime>' => $start_date, 'StartTime<' => $end_date)) as $call){
            $callArray[] = $call;
        }
	 	//return new Response(200);
	 	return $this->render('CommcloudVoiceBundle:Agent:call_list.html.twig', array('calls' => $callArray));
    }
    
    /**
     * @Route("/app/call/recording", name="call_recording")
     */
	public function callrecordingAction()
	{
		return $this->render('CommcloudVoiceBundle:Agent:callrecording.html.twig');
	}
	
	/**
	 *  @Route("load_callrecording_table", name="load_callrecording_table")
	 */
	public function loadcallrecordingtable(Request $request)
	{
	    $twilio = $this->get('commcloud_twilio_wrapper.twilio_api');
		$filterArray = $request->request->all();
        $endtime = $filterArray['enddatetime'];
        $starttime = $filterArray['startdatetime'];
        $starttimestamp = strtotime($starttime);
        $start_date = date('Y-m-d',$starttimestamp);
        $endtimestamp = strtotime($endtime);
        $end_date = date('Y-m-d',$endtimestamp);         
// 		$calls = $twilio->account->recordings;
// 		$calls = $twilio->account->recordings->getIterator(0, 50, array(
//         "DateCreated" => "2009-07-06"
        //echo $start_date." ".$end_date;
        $callArray = array();
        foreach($twilio->account->recordings->getIterator(0, 50, array("DateCreated>" => $start_date)) as $call){
            $callArray[]=$call;
        }
        return $this->render('CommcloudVoiceBundle:Agent:callrecording_table.html.twig', array('calls'=>$callArray));
        //return $this->render(200);
	}
    
}
