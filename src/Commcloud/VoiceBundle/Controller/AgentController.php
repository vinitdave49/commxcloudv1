<?php

namespace Commcloud\VoiceBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Services_Twilio_Twiml;
use Services_Twilio_Auth_IpMessagingGrant;
use Services_Twilio_AccessToken;
use Commcloud\VoiceBundle\Entity\WCustomer;

class AgentController extends Controller
{
	private $voiceprintId;
    //public $session;
   
    //Author: Viral Gandhi Date Edited: April 16, 2016. Code for testing Hold feature with <Queue>
	/**
     * @Route("/hold", name="hold")
     */
    public function holdAction(Request $request)
    {
         $twilio = $this->get('commcloud_twilio_wrapper.twilio_api');
        /* This code is working code 
        $callSid = $request->request->get('callsid');
        $this->get('logger')->debug("CommCloud: holdAction: CallSid: ".$callSid);
        $call = $twilio->account->calls->get($callSid);
        $this->get('logger')->debug("CommCloud: holdAction: CallSid: ".$callSid);                                                                                                  
        $call->update(array("Url" => "http://demo.twilio.com/docs/voice.xml","Method" => "POST"));
        return new Response(200);
        */
        
        //newholdqueue - sid - QUad53304f802f4e9a9f52f6e35600cdf3
        $callSid = $request->request->get('callsid');
        $this->get('logger')->debug("CommCloud: holdAction: CallSid: ".$callSid);
        $call = $twilio->account->calls->get($callSid);
        $call->update(array("Url" => "https://commcloud-ashwindeshpande06.c9users.io/web/app.php/holdredirect","Method" => "POST"));
        return new Response(200);
    }
    /**
     * @Route("/holdredirect", name="holdredirect")
     */
    public function holdRedirectAction(Request $request)
    {
        $response = new Services_Twilio_Twiml;
        $response->say("You're being added to the hold queue.");
        $response->enqueue("newholdqueue");
        $this->get('logger')->debug("CommCloud: Call placed on holdqueue");
        return new Response($response);
    }
    
    
    //Author: Viral Gandhi Date Edited: April 08, 2016. Code for testing UnHold feature
    /**
     * @Route("/unhold", name="unhold")
     */
    public function unholdAction(Request $request)
    {
        $client = new Services_Twilio_Twiml;
        $twilio = $this->get('commcloud_twilio_wrapper.twilio_api');
        //working code
        $callSid = $request->request->get('callsid');
        $this->get('logger')->debug("CommCloud: unholdAction: CallSid: ".$callSid);
        //$call = $twilio->account->calls->get($callSid);
        //$call->update(array("Url" => "https://commcloud-ashwindeshpande06.c9users.io/web/app_dev.php/unholdredirect","Method" => "POST"));
        $callmember = $twilio->account->queues->get('QUad53304f802f4e9a9f52f6e35600cdf3')->members->get($callSid);
        $callmember->update(array("Url" => "https://commcloud-ashwindeshpande06.c9users.io/web/app.php/unholdredirect/".$this->get('session')->get('wLoginId'),"Method" => "POST"));
        return new Response(200);

        /* Code samples for Queue and member of queue
        -- code to create new queue and get sid
        $queue = $twilio->account->queues->create("newholdqueue", array());
        echo $queue->sid;
        
        --code to get all the queues and sid
        foreach ($twilio->account->queues as $queue) {
            echo $queue->friendly_name ." = ". $queue->sid;
            echo '\r\n'. $queue->sid;
        }
        
        --code to get all members from the queue 
        foreach ($twilio->account->queues->get('QUad53304f802f4e9a9f52f6e35600cdf3')->members as $member) {
            echo $member->position."=".$member->call_sid;
        }
        */
    }
     /**
     * @Route("/unholdredirect/{session}", name="unholdredirect")
     */
    public function unholdRedirectAction($session)
    {
        $response = new Services_Twilio_Twiml;
        //$this->get('logger')->debug(var_dump($request));
        $dial = $response->dial(NULL, array(
        'callerId' => '+19164262378'
        ));
        $this->get('logger')->debug("Session id on UnHold method ".$session);
        $dial->client($session);
        return new Response($response);
    }
    
    /**
     * @Route("/transferaction", name="transferaction")
     */
    public function transferAction(Request $request)
    {
        $client =$this->get('commcloud_twilio_wrapper.twilio_taskrouter');
        $workers = $client->workspace->workers->getIterator(0, 50, array("Available" => "1"));
        $workersids= array();
        foreach($workers as $worker) {
            $workersids[] = $worker->sid;
        }
        $workerJSON = array();
        $repository = $this->getDoctrine()
                    ->getRepository('CommcloudVoiceBundle:WorkerInfo');
                    
        foreach($workersids as $sid){
            $dbWorker = $this->getDoctrine()
                    ->getRepository('CommcloudVoiceBundle:WorkerInfo')
                    ->findOneBywsid($sid);
            array_push($workerJSON,array($dbWorker->getWloginid(),$dbWorker->getWdisplayname(),$dbWorker->getWsid()));
        }
        return new Response(json_encode($workerJSON));
    }
    /**
     * @Route("/transfercallaction", name="transfercallaction")
     */
    public function transfercallaction(Request $request)
    {
        $client = new Services_Twilio_Twiml;
        $twilio = $this->get('commcloud_twilio_wrapper.twilio_api');
        //working code
        //var_dump($request);
        $callSid = $request->request->get('callsid');
        $transferagentloginId = $request->request->get('transferagentloginId');
        $this->get('logger')->debug("CommCloud: transferCallAction: CallSid: ".$callSid." call transfered to agent: ".$transferagentloginId);
        $call = $twilio->account->calls->get($callSid);
        $call->update(array("Url" => "https://commcloud-ashwindeshpande06.c9users.io/web/app.php/transfercallredirect/".$transferagentloginId,"Method" => "POST"));
        //echo "transfercallaction method called";
        //echo "callsid: ".$callSid." Transferagent: ".$transferagentloginId;
        // $dial = $client->dial(NULL, array(
        // 'callerId' => '+19164262378'
        // ));
        // $this->get('logger')->debug("Session id on UnHold method ".$transferagentloginId);
        // $dial->client($transferagentloginId);
        // return new Response($client);
        return new Response(200);
    }
    
    /**
     * @Route("/transfercallredirect/{transferagentid}", name="transfercallredirect")
     */
    public function transfercallredirect($transferagentid)
    {
        $response = new Services_Twilio_Twiml;
        //$this->get('logger')->debug(var_dump($request));
        $dial = $response->dial(NULL, array(
        'callerId' => '+19164262378'
        ));
        $this->get('logger')->debug("Session id on UnHold method ".$transferagentid);
        $dial->client($transferagentid);
        return new Response($response);        
    }
    //End of code Author: Viral Gandhi Date Edited: April 09, 2016. Code for testing UnHold feature
    
    
	/**
     * @Route("/agentindex", name="agent_index")
     */
    public function indexAction()
    {
        return $this->render('CommcloudVoiceBundle::demosoftphone.html.twig');
    }
    
    /**
     * @Route("/app/content", name="commcloud_voice_welcome")
     */
    public function welcomeAction()
    {
    	if($this->get('security.authorization_checker')->isGranted('ROLE_ADMIN')){
    		
    		return $this->render('CommcloudVoiceBundle:Admin:configureproject.html.twig');
    	}
        else if ($this->get('security.authorization_checker')->isGranted('ROLE_SUPERVISOR')){
        	
        	return $this->render('CommcloudVoiceBundle:Supervisor:index.html.twig');
        }
        else  if ($this->get('security.authorization_checker')->isGranted('ROLE_USER')) {
       	
       		return $this->render('CommcloudVoiceBundle:Agent:content.html.twig');
		}
        //return new Response("Hello Vinit Dave");
        //return $this->render('default/index.html.twig');
    }
    
    /**
     * @Route("/token", name="commcloud_voice_token")
     */
	public function tokenAction()
	{
	    //$session = new Session();
	    //$session = $this->getRequest()->getSession();
        //$session->start();
		$twilioCapability = $this->get('commcloud_twilio_wrapper.twilio_capability');
		$client_id = $this->get('security.token_storage')->getToken()->getUser()->getWloginid();
		//$session->set('wLoginId',$client_id);
		//$session->save();
		$this->get('session')->set('wLoginId',$client_id);
		$this->get('logger')->debug("CommCloud: TokenAction: User Id: ".$client_id);
		$twilioCapability->allowClientIncoming($this->get('security.token_storage')->getToken()->getUser()->getWloginid());
		$twilioCapability->allowClientOutgoing('APfd14dd8ac4b0b5f55b7f3faa375035df');
		$twilioToken = $twilioCapability->generateToken(28800);
		
		$twilioWorker = $this->get('commcloud_twilio_wrapper.twilio_taskrouter_worker_capability');
		$worker_sid = $this->get('security.token_storage')->getToken()->getUser()->getWsid();
		$this->get('logger')->debug("CommCloud: TokenAction: Worker Sid: ".$worker_sid);
		$workerCapability = $twilioWorker->createInstance($this->getParameter('sid'), $this->getParameter('authToken'), $this->getParameter('workspaceSid'), $this->get('security.token_storage')->getToken()->getUser()->getWsid());
		$workerCapability->allowActivityUpdates();
		$workerCapability->allowReservationUpdates();
		$workerToken = $workerCapability->generateToken(28800);
		return new JsonResponse(array(['token' => $twilioToken,'workerToken' =>  $workerToken]), 200);
	}
	
	/**
     * @Route("/app/calls/list", name="commcloud_voice_calllist")
     */
	public function calllistAction()
	{
		$twilio = $this->get('commcloud_twilio_wrapper.twilio_api');
		$calls = $twilio->account->calls->getIterator(0, 50, array('Status' => 'in-progress')); 
		return $this->render('CommcloudVoiceBundle:Agent:call_list.html.twig', array('calls' => $calls));
	}
	
	/**
     * @Route("/app/calls/history", name="commcloud_voice_callhistory")
     */
	public function callhistoryAction()
	{
		$twilio = $this->get('commcloud_twilio_wrapper.twilio_api');
		$calls = $twilio->account->calls->getIterator(0, 50, array());
	 	return $this->render('CommcloudVoiceBundle:Agent:callhistory.html.twig', array('calls' => $calls));
	}
	
	/**
     * @Route("/app/agent/list", name="commcloud_voice_agentlist")
     */
	public function agentlistAction()
	{
	    $taskrouterClient = $this->get('commcloud_twilio_wrapper.twilio_taskrouter');
		return $this->render('CommcloudVoiceBundle:Agent:agentlist.html.twig', array('workers' => $taskrouterClient->workspace->workers));
	}
	
	
	/**
     * @Route("/app/call/recording/from_to", name="commcloud_voice_getfromtoofcallrecording")
     */
	public function getfromtoofcallrecordingAction($call_sid)
	{
		$twilio = $this->get('commcloud_twilio_wrapper.twilio_api');
		$from = $twilio->account->calls->get($call_sid)->from;
		$to = $twilio->account->calls->get($call_sid)->to;
		return new Response('<td>'. $from .'</td><td>'. $to .'</td>');
	}

    /**
     * @Route("/outboundtwiml", name="commcloud_voice_outboundtwiml")
     */
    public function outboundtwimlAction(Request $request)
    {
    	$caller_id = "+19164262378";
    	$number = "";
		if ($request->request->get('PhoneNumber')) {
		    $number = htmlspecialchars($request->request->get('PhoneNumber'));
		}
		$client = new Services_Twilio_Twiml;
		$twilio = $this->get('commcloud_twilio_wrapper.twilio_api');
		$client->say('You are making an outbound call.');		 
		$dial = $client->dial(NULL, array('callerId' => $caller_id));		
		if (preg_match("/^[\d\+\-\(\) ]+$/", $number)) {
			$dial->number($number);
		}
		//$this->get('logger')->debug("CommCloud:Outbound Call Sid: ".$client->sid);
        return new Response($client);
//         try {
//             // Initiate a new outbound call
//             $call = $twilio->account->calls->create(
//                 $caller_id, // The number of the phone initiating the call
//                 $number, // The number of the phone receiving call
//                 'http://demo.twilio.com/welcome/voice/' // The URL Twilio will request when the call is answered
//             );
//             echo 'Started call: ' . $call->sid;
//             $this->get('logger')->debug("CommCloud:Outbound Call Sid: ".$call->sid);
//         } catch (Exception $e) {
//             echo 'Error: ' . $e->getMessage();
//         }
// 		return new Response($call);
		
		

    }
}
