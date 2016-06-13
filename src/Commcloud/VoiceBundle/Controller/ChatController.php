<?php

namespace Commcloud\VoiceBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
//use Services_Twilio;
//use Services_Twilio_Capability;
use TaskRouter_Services_Twilio;
use Services_Twilio_Twiml;
use Services_Twilio_Auth_IpMessagingGrant;
use Services_Twilio_AccessToken;
use IPMessaging_Services_Twilio;

class ChatController extends Controller
{
     /**
     * @Route("/getchat/{name}", name="getchat")
     */
     public function homeAction($name)
     {
         return $this->render('CommcloudVoiceBundle::chat.html.twig',  array('name' => $name));
     }
    /**
     * @Route("/getagentchat/{name}", name="getagentchat")
     */
    public function demochatAction($name)
    {
        return $this->render('CommcloudVoiceBundle::agentchat.html.twig',  array('name' => $name));
    }
    /**
     * @Route("/getchattoken", name="getchattoken")
     */
    public function getchattokenAction(Request $request)
    {
    
    	$TWILIO_ACCOUNT_SID = 'AC0f18494502dee91457252ff7b2bada6a';
		$TWILIO_IPM_SERVICE_SID = 'IS52a6fbc2763d4c9c85576fa9a786de9b';
		$TWILIO_API_KEY = 'SK7c11988ac8106416e5b3649c45953a52';
		$TWILIO_API_SECRET = 't6Ih5JzfC9Ao5jN0Bvc2mL5HKNlfZ2QW';
    	
    	$appName = 'TwilioChatDemo';
        $params = array();
        try{
        	$content = $request->getContent();
	        if (!empty($content))
	    	{
	        	$params = json_decode($content, true); // 2nd param to get as array
	        	//var_dump($params);
			}
			
	    	$this->get('logger')->debug("CommCloud: chat identity ".$request->request->get('identity'));
	        
	    	//$identity = $this->get('security.token_storage')->getToken()->getUser()->getWfname();
	        $identity = $params['identity'];
	    	$deviceId = $params['device'];
	    	//$identity = $request->request->get('identity');
	    	//$deviceId = $request->request->get('device');
	    	$endpointId = $appName . ':' . $identity . ':' . $deviceId;
	    	$token = new Services_Twilio_AccessToken(
			    $TWILIO_ACCOUNT_SID, 
			    $TWILIO_API_KEY, 
			    $TWILIO_API_SECRET, 
			    3600, 
			    $identity
			);
			// Create IP Messaging grant
			$ipmGrant = new Services_Twilio_Auth_IpMessagingGrant();
			$ipmGrant->setServiceSid($TWILIO_IPM_SERVICE_SID);
			$ipmGrant->setEndpointId($endpointId);
			
			// Add grant to token
			$token->addGrant($ipmGrant);
		
		   $response = new Response();
		   $response->headers->set('Access-Control-Allow-Origin', '*');
		   $response->setContent(json_encode(array('identity' => $identity, 'endpoint' => $endpointId,  'token' => $token->toJWT())));
		   return $response;
        }catch(\Exception $e){
        	error_log("An Exception has Happened " . $e->getMessage());
        	$this->get('logger')->error($e->getMessage());
        }
    }
   
    
    /**
    * @Route("/chat/hook", name="chathook")
    */
    public function webhookAction(Request $request)
    {
    	try{
    		$trigger = $request->request->get('EventType');
	    	$this->get('logger')->debug("CommCloud: before trigger ".$request->request->get('EventType'));
	    	if ($trigger == 'onChannelAdd') {    	
	    		$this->get('logger')->debug("CommCloud:inside onChannelAdded ".$request->request->get('EventType'));
			    $channelSid = $request->request->get('ChannelSid');
			    $this->get('logger')->debug("CommCloud:inside channel_sid ".$request->request->get('ChannelSid'));
			    $taskrouterchatclient = $this->get('commcloud_twilio_wrapper.twilio_taskrouter');
			    
			    $array = array("channel" => "chat", "selected_language" => "es", "channel_sid" => $channelSid);
	    		$attributes = json_encode($array);
	    		$taskrouterchatclient->workspace->tasks->create($attributes, 'WW4a2f9fb4b93c5b27308aae84a8dfb657');
	    		return new Response(200);
			  }
			  
			 if($trigger == 'onChannelUpdated'){
			 	$this->get('logger')->debug("CommCloud:inside onChannelUpdated ".$request->request->get('EventType'));
			 	return new Response(200);
			 } 
			return new Response();
	    }catch(\Exception $e){
	    	error_log("An Exception has Happened " . $e->getMessage());
	    	$this->get('logger')->error($e->getMessage());
	    }
	    
    }
}
  