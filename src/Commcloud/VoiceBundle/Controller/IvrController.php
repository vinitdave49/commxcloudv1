<?php

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

class IvrController extends Controller
{
    private $voiceprintId;
    
    public function setVoiceprintId($value)
    {
        $this->voiceprintId= $value;
    }

    public function getVoiceprintId()
    {
        return $this->voiceprintId;
    }    
    
    public function createVoicePrintID()
    {
    	try{
	        $url_create_voicepin="https://api.voicepin.com/rest/v1/verifier/passwordGroups/verify-me-with-my-voicepin-ivr?apiKey=60e43d35-1a9e-4b6b-b36c-90b775b71753";
	        $headers = array();
	        $headers[] = 'Accept: application/json';
	        $ch = curl_init();
	        $options=array(
	            CURLOPT_HTTPHEADER => $headers,
	            CURLOPT_SSL_VERIFYPEER => false,
	            CURLOPT_POST => 1,
	            CURLOPT_RETURNTRANSFER => true,
	            CURLOPT_URL=>$url_create_voicepin
	        );
	        curl_setopt_array($ch, $options);
	        $result = curl_exec($ch);
	        curl_close($ch);
	        $this->get('logger')->debug("CommCloud: createVoicePrintID: Result: ".$result);
	        $voiceprintId=json_decode($result)->{'voiceprintId'};
	        return $voiceprintId;
    	}catch(Exception $e){
    		$this->get('logger')->debug("Curl failed with error ".$e->getCode()." and message ".$e->getMessage());
    	}
    }

    public function enrollVoicePrint($recordingUrl,$voicePrintId)
    {
        try{
	        $this->get('logger')->debug("VoicePin: enrollVoicePrint: Voice Print Id: ".$voicePrintId);
	        $url = 'https://api.voicepin.com/rest/v1/verifier/voiceprints/'.$voicePrintId.'/enrollments?channelCode=UNKNOWN&apiKey=60e43d35-1a9e-4b6b-b36c-90b775b71753';
	        $this->get('logger')->debug("VoicePin: enrollVoicePrint: Enrollment URL: ".$url);
	        copy($recordingUrl.".wav","record.wav");        	
            $headers = array();
            $headers[] = 'Accept: application/json';
            $headers[] = 'Content-Type: multipart/form-data';
            $postfields = array("recording" => "@record.wav");
            $ch1 = curl_init();
            $options = array(
                CURLOPT_URL => $url,
                CURLOPT_HEADER => true,
                CURLOPT_POST => 1,
                CURLOPT_HTTPHEADER => $headers,
                CURLOPT_SSL_VERIFYPEER => false,
                CURLOPT_POSTFIELDS => $postfields,
                // CURLOPT_INFILESIZE => $filesize,
                CURLOPT_RETURNTRANSFER => true
            ); // cURL options
            curl_setopt_array($ch1, $options);
            $reply = curl_exec($ch1);
            unlink("record.wav");
            $this->get('logger')->debug("Voice Pin: enrollVoicePrint: Response: ".$reply);
            if ($reply == false){
                throw new Exception(curl_error($ch1), curl_errno($ch1));
            }
            return $reply;
        }catch(Exception $e){
            trigger_error(sprintf('Curl failed with error #%d: %s', $e->getCode(), $e->getMessage()), E_USER_ERROR);
            $this->get('logger')->debug($curl_error(ch1));
        }
    }

    /**
     * @Route("/commcloudgreeting", name="commcloud_greeting")
     */
    public function commcloudgreetingAction(Request $request)
    {
        $client = new Services_Twilio_Twiml;
		$client->say('Please select a option you would like to demo.', array('voice'=>'alice', 'language'=>'en-US'));
		$gather = $client->gather(array('numDigits'=>1, 'action'=>'commcloudcallhandler', 'method'=>'POST'));
		$gather->say('For A C D routing, press 1.', array('voice'=>'alice', 'language'=>'en-US'));
		$gather->say('For Voice Pin, press 2.', array('voice'=>'alice', 'language'=>'en-US'));
		$gather->say('For Conference bridge, press 3.', array('voice'=>'alice', 'language'=>'en-US'));
		$gather->say('For Fingerprint authentication, press 4.', array('voice'=>'alice', 'language'=>'en-US'));
		$gather->say('For a SFDC integration demo, press 5', array('voice'=>'alice', 'language'=>'en-US'));
		$gather->say('Press 0 to repeat the menu.', array('voice'=>'alice', 'language'=>'en-US'));		
		return new Response($client);
		
    }
    
    /**
     * @Route("/commcloudconference", name="commcloud_conference")
     */
    public function commcloudconferenceAction(Request $request)
    {
        $this->get('logger')->debug('CommCloud: commcloudconferenceAction: Conference Call');
        $twiml_response = new Services_Twilio_Twiml;
        $twiml_response->say('You have joined C I M Conference call.',array('voice'=>'alice', 'language'=>'en-US'));
        $dial = $twiml_response->dial();
        $dial->conference('CIMConferenceRoom', array(
            'waitUrl' => 'http://twimlets.com/holdmusic?Bucket=com.twilio.music.classical',
        ));
        return new Response($twiml_response);
    }   
    
    /**
     * @Route("/commcloudcallhandler", name="commcloud_callhandler")
     */
    public function commcloudcallhandlerAction(Request $request)
    {
		$collected_digits = $request->request->get('Digits');
		$twiml_response = new Services_Twilio_Twiml;
		if($collected_digits != '1' and $collected_digits != '2' and $collected_digits != '3' and $collected_digits != '4' and $collected_digits != '5')
		{
			 return $this->redirectToRoute('comcloud_voice_greeting', array(), 301);
		}
		$client = new Services_Twilio_Twiml;
		if ($collected_digits == '1'){
            $twiml_response->redirect('greeting', array('method'=>'GET'));
		}elseif($collected_digits == '2'){
		    $twiml_response->redirect('greetingvoicepin', array('method'=>'GET'));
			//return $this->redirectToRoute('greetingvoicepin', array(), 301);
		}elseif($collected_digits == '3'){
		    $twiml_response->redirect('commcloudconference', array('method'=>'GET'));
			//return $this->redirectToRoute('greetingvoicepin', array(), 301);
		}elseif($collected_digits == '4'){
		    $twiml_response->redirect('commcloudfpauth', array('method'=>'GET'));
			//return $this->redirectToRoute('greetingvoicepin', array(), 301);
		}elseif($collected_digits == '5'){
		    $twiml_response->redirect('commcloudsfdc', array('method'=>'GET'));
		}
		return new Response($twiml_response);
    }

	/**
     * @Route("/commcloudsfdc", name="commcloud_sfdc")
     */
    public function commcloudsfdcAction()
    {
        $twiml_response = new Services_Twilio_Twiml;
        $twiml_response->say('You will be connected to a sales force agent.',array('voice'=>'alice', 'language'=>'en-US'));
        $twiml_response->dial()->client('vinitdaveATgmailDOTcom');
        $this->get('logger')->debug('CommCloud: SFDC Integration: '.$twiml_response);
        return new Response($twiml_response);
    }
    
	/**
     * @Route("/greeting", name="commcloud_voice_greeting")
     */
    public function greetingAction()
    {       			
		define('workflowSid', 'WW61fcc3b0e481ddfa7610cd68b78e550a');
		
		$client = new Services_Twilio_Twiml;
		$client->say('Please select a language you prefer.', array('voice'=>'alice', 'language'=>'en-US'));
		$gather = $client->gather(array('numDigits'=>1, 'action'=>'incomingcallhandler', 'method'=>'POST'));
		$gather->say('For English, press 1.', array('voice'=>'alice', 'language'=>'en-US'));
		$gather->say('For Spanish, press 2.', array('voice'=>'alice', 'language'=>'es-ES'));
		$gather->say('For German, press 3.', array('voice'=>'alice', 'language'=>'de-DE'));
		$gather->say('Press 0 to repeat the menu.', array('voice'=>'alice', 'language'=>'en-US'));		
		//$client->enqueue(array('workflowSid' => workflowSid))->task('{"selected_langauge" : "es"}');		
        //return $response;
		return new Response($client);
    }
    
    /**
     * @Route("/incomingcallhandler", name="commcloud_voice_incomingcallhandler")
     */
    public function incomingcallhandlerAction(Request $request)
    {       			
		$workflowSid = "WW542a85c0b81a847430d95d3dbc75f8a5";
		$collected_digits = $request->request->get('Digits');
		$callsid = $request->request->get('CallSid');
		$this->get('logger')->debug("CommCloud: incomingcallhandlerAction: Original Call Sid: ".$callsid);
		if($collected_digits != '1' and $collected_digits != '2' and $collected_digits != '3')
		{
			 return $this->redirectToRoute('comcloud_voice_greeting', array(), 301);
		}
		$client = new Services_Twilio_Twiml;
		if ($collected_digits == '1'){
			$client->say('Your call is important to us. An Customer Service Executive will shortly attend to your query.', array('voice'=>'alice', 'language'=>'en-US'));
			$taskAttr = array("selected_language"=>"en","callsid"=>$callsid);
			$jsonAttr = json_encode($taskAttr);
			$client->enqueue(array('workflowSid' => $workflowSid))->task($jsonAttr, array('timeout' => 500, 'priority' => 5));
			$client->say('Error has occurred.',array('voice'=>'alice', 'language'=>'en-US'));
		}elseif($collected_digits == '2'){
			$client->say('Your call is important to us. An Customer Service Executive will shortly attend to your query.', array('voice'=>'alice', 'language'=>'es-ES'));
			$taskAttr = array("selected_language"=>"es");
			$jsonAttr = json_encode($taskAttr);
			$client->enqueue(array('workflowSid' => $workflowSid))->task($jsonAttr, array('timeout' => 500, 'priority' => 5));
			$client->say('Error has occurred.',array('voice'=>'alice', 'language'=>'en-US'));
		}elseif($collected_digits == '3'){
			$client->say('Your call is important to us. An Customer Service Executive will shortly attend to your query.', array('voice'=>'alice', 'language'=>'de-DE'));
			$taskAttr = array("selected_language"=>"de");
			$jsonAttr = json_encode($taskAttr);
			$client->enqueue(array('workflowSid' => $workflowSid))->task($jsonAttr, array('timeout' => 500, 'priority' => 5));
			$client->say('Error has occurred.',array('voice'=>'alice', 'language'=>'en-US'));
		}
		return new Response($client);
    }
    
    /**
     * @Route("/authenticatevoiceprint", name="authenticatevoiceprint")
     */
    public function authenticatevoiceprintAction(Request $request)
    {
        try{
	        $twiml_response = new Services_Twilio_Twiml;
	        $recordingUrl=$request->request->get('RecordingUrl');
	        $voicePrintId=$request->getSession()->get('voiceprintid');
	        $this->get('logger')->debug('VoicePin: authenticatevoiceprint: Recording URL : '.$recordingUrl);
	        $this->get('logger')->debug("VoicePin: authenticatevoiceprint: Voice Print Id: ".$voicePrintId);
	        $url = 'https://api.voicepin.com/rest/v1/verifier/voiceprints/'.$voicePrintId.'/verifications?channelCode=UNKNOWN&apiKey=60e43d35-1a9e-4b6b-b36c-90b775b71753';
	        $this->get('logger')->debug("Voice Pin: authenticateVoicePrint: Auth URL: ".$url);
	        copy($recordingUrl.".wav","record.wav");        	
            $headers = array();
            $headers[] = 'Accept: application/json';
            $headers[] = 'Content-Type: multipart/form-data';
            $postfields = array("recording" => "@record.wav");
            $ch1 = curl_init();
            $options = array(
                CURLOPT_URL => $url,
                CURLOPT_HEADER => true,
                CURLOPT_POST => 1,
                CURLOPT_HTTPHEADER => $headers,
                CURLOPT_SSL_VERIFYPEER => false,
                CURLOPT_POSTFIELDS => $postfields,
                // CURLOPT_INFILESIZE => $filesize,
                CURLOPT_RETURNTRANSFER => true
            ); // cURL options
            curl_setopt_array($ch1, $options);
            $reply = curl_exec($ch1);
            if ($reply == false){
                throw new Exception(curl_error($ch1), curl_errno($ch1));
            }
            unlink("record.wav");
            $this->get('logger')->debug("VoicePin: authenticateVoicePrint: Response: ".$reply);            
            $pattern = '
                        /
                        \{              # { character
                            (?:         # non-capturing group
                                [^{}]   # anything that is not a { or }
                                |       # OR
                                (?R)    # recurses the entire pattern
                            )*          # previous group zero or more times
                        \}              # } character
                        /x
                        ';
                    
            preg_match_all($pattern, $reply, $jsonResponse);
            $this->get('logger')->debug('VoicePin: authenticatevoiceprint: JSON Response: '.$jsonResponse[0][0]);
            $json = json_decode($jsonResponse[0][0], true);
            $decision = $json['decision'];
            $this->get('logger')->info('VoicePin: authenticatevoiceprint: Decision: '.$decision);
            if ($decision != 'MATCH'){
                $twiml_response->say('You are not authenticated. Please try calling again.', array('voice'=>'alice', 'language'=>'en-US'));
            }else {
                $twiml_response->say('You are authenticated successfully.', array('voice'=>'alice', 'language'=>'en-US'));
                $twiml_response->redirect('greeting', array('method'=>'GET'));
            }
            return new Response($twiml_response);
        }catch(Exception $e){
            trigger_error(sprintf('Curl failed with error #%d: %s', $e->getCode(), $e->getMessage()), E_USER_ERROR);
            $this->get('logger')->debug($curl_error(ch1));
        }
    }
    
    /**
     * @Route("/greetingvoicepin", name="greetingvoicepin")
     */
    public function greetingvoicepinAction(Request $request)
    {
        
        $this->get('logger')->debug('VoicePin: greetingvoicePinAction: Start of the Call');
        $twiml_response = new Services_Twilio_Twiml;
        $twiml_response->say('Hello. Thank you for calling C I M Communications Cloud with Voice Biometrics.', array('voice'=>'alice', 'language'=>'en-US'));
        $gather = $twiml_response->gather(array('numDigits'=>1, 'action'=>'voicepin', 'method'=>'POST'));
		$gather->say('If you are a new customer, please press 1. If you are an existing customer, please press 2.', array('voice'=>'alice', 'language'=>'en-US'));
        return new Response($twiml_response);
    }
    
    /**
     * @Route("/voicepin", name="voicepin")
     */
    public function voicepinAction(Request $request)
    {
        $this->get('logger')->debug('VoicePin: voicePinAction: Digits Collected:'.$request->request->get('Digits'));
        $twiml_response = new Services_Twilio_Twiml;
        $digits = $request->request->get('Digits');
        if ($digits == '1'){
            $customer = new WCustomer();
            $customerid = rand(1000, 9999);
            $this->get('logger')->debug('VoicePin: voicePinAction: Customer ID generated: '.$customerid);
            $customer->setUserid($customerid);
            $customer->setFullname('Jon Stark');
            $customer->setTrained('false');
            $customer->setVoiceprintid('');
            $customer->setPhonenumber('+19164262378');
            $customer->setEmail('jonstark@commcloud.com');
            $customer->setBalance($customerid);
            $em = $this->getDoctrine()->getManager();
            $em->persist($customer);
            $em->flush();
            
            $twiml_response->say('Please remember your customer i d.'.$customerid, array('voice'=>'alice', 'language'=>'en-US'));
            $gather = $twiml_response->gather(array('numDigits'=>4, 'action'=>'identifyuser', 'method'=>'POST'));
		    $gather->say('Please enter your 4 digit user i d.', array('voice'=>'alice', 'language'=>'en-US'));
        }elseif ($digits =='2') {
            $gather = $twiml_response->gather(array('numDigits'=>4, 'action'=>'identifyuser', 'method'=>'POST'));
		    $gather->say('Please enter your 4 digit user i d.', array('voice'=>'alice', 'language'=>'en-US'));
        }
        return new Response($twiml_response);
    }
    
    /**
     * @Route("/identifyuser", name="identifyuser")
     */
    public function identifyuserAction(Request $request)
    {
        $twiml_response = new Services_Twilio_Twiml;
        $this->get('logger')->debug('VoicePin: identifyuserAction: Digits Collected: '.$request->request->get('Digits'));
        $customerid = $request->request->get('Digits');
        $dbObj = $this->getDoctrine()->getManager();
        $customer = $dbObj->getRepository('CommcloudVoiceBundle:WCustomer')
                    ->findOneByUserid($customerid);
        if($customer!=null){
            $request->getSession()->set('customerid', $customerid);
            $twiml_response->say('Welcome '.$customer->getFullname(), array('voice'=>'alice', 'language'=>'en-US'));
            $gather = $twiml_response->gather(array('numDigits'=>1, 'action'=>'recordvoiceprint', 'method'=>'POST'));
            if ($customer->getTrained() != "true"){
    		    $gather->say('Your Voice Print has not been enrolled. For enrolling your voice print, press 1.', array('voice'=>'alice', 'language'=>'en-US'));
    		    //Call the function to generate VoicePrintId
    		    $voiceprintId = $this->createVoicePrintID();
    		    $request->getSession()->set('voiceprintid', $voiceprintId);
    		    
    		    //VoicePrintId updated in DB
                $customer->setVoiceprintid($voiceprintId);
                $dbObj->flush();
    		    
    		    $this->get('logger')->debug("VoicePin: identifyuserAction: Voice PIN: ".$voiceprintId);
            }else{
                $request->getSession()->set('voiceprintid', $customer->getVoiceprintid());
    		    $gather->say('To Proceed with authentication, press 2.', array('voice'=>'alice', 'language'=>'en-US'));
            }
        }
        else{
            $twiml_response->say('You have entered an invalid user i d. Please try again', array('voice'=>'alice', 'language'=>'en-US'));
        }
        return new Response($twiml_response);
    }    
    
    /**
     * @Route("/recordvoiceprinterror", name="recordvoiceprinterror")
     */
    public function recordvoiceprinterrorAction(Request $request)
    {
        $this->get('logger')->debug('VoicePin: recordvoiceprinterrorAction: Iteration Count '.$request->get('iteration'));
        $iteration_count = $request->get('iteration');
		$twiml_response = new Services_Twilio_Twiml;
		if ($iteration_count == '1'){
            $twiml_response->say('Record your voice print after the tone. Press the pound key after you have finished recording.', array('voice'=>'alice', 'language'=>'en-US'));
            $twiml_response->record(array('action'=>'handlevoiceprint','maxLength'=>5, 'playBeep'=>true, 'finishOnKey'=>'#'));
		}elseif($iteration_count == '2'){
	        $twiml_response->say('Record your voice print after the tone. Press the pound key after you have finished recording.', array('voice'=>'alice', 'language'=>'en-US'));
            $twiml_response->record(array('action'=>'handlevoiceprint1', 'maxLength'=>5, 'playBeep'=>true, 'finishOnKey'=>'#'));
		}elseif($iteration_count == '3'){
	        $twiml_response->say('Record your voice print after the tone. Press the pound key after you have finished recording.', array('voice'=>'alice', 'language'=>'en-US'));
            $twiml_response->record(array('action'=>'handlevoiceprint2', 'maxLength'=>5, 'playBeep'=>true, 'finishOnKey'=>'#'));
		}
		return new Response($twiml_response);
    } 
    
    /**
     * @Route("/recordvoiceprint", name="recordvoiceprint")
     */
    public function recordvoiceprintAction(Request $request)
    {
        $this->get('logger')->debug('VoicePin: recordvoiceprintAction: Digits Collected: '.$request->request->get('Digits'));
		$collected_digits = $request->request->get('Digits');
		$twiml_response = new Services_Twilio_Twiml;
		if ($collected_digits == '1'){
            $twiml_response->say('Record your voice print after the tone. Press the pound key after you have finished recording.', array('voice'=>'alice', 'language'=>'en-US'));
            $twiml_response->record(array('action'=>'handlevoiceprint','maxLength'=>5, 'playBeep'=>true, 'finishOnKey'=>'#'));
		}elseif($collected_digits == '2'){
	        $twiml_response->say('Please speak your secret phrase. Press the pound key after you have finished speaking.', array('voice'=>'alice', 'language'=>'en-US'));
            $twiml_response->record(array('action'=>'authenticatevoiceprint', 'maxLength'=>5, 'playBeep'=>true, 'finishOnKey'=>'#'));
		}
		return new Response($twiml_response);
    }
    
    /**
     * @Route("/handlevoiceprint", name="handlevoiceprint")
     */
    public function handlevoiceprintAction(Request $request)
    {
        $twiml_response = new Services_Twilio_Twiml;
        //$twiml_response->play($request->request->get('RecordingUrl'));
        $recordingUrl=$request->request->get('RecordingUrl');
        $this->get('logger')->debug('VoicePin: handlevoiceprintAction: Recording URL 1: '.$recordingUrl);
        $voiceprintId=$request->getSession()->get('voiceprintid');
        $this->get('logger')->debug('VoicePin: handlevoiceprintAction: VoicePrintId'.$voiceprintId);
        $response = $this->enrollVoicePrint($recordingUrl,$voiceprintId);
        $this->get('logger')->debug('VoicePin: handlevoiceprintAction: Response: '.$response);
        $pattern = '
                    /
                    \{              # { character
                        (?:         # non-capturing group
                            [^{}]   # anything that is not a { or }
                            |       # OR
                            (?R)    # recurses the entire pattern
                        )*          # previous group zero or more times
                    \}              # } character
                    /x
                    ';
                    
        preg_match_all($pattern, $response, $jsonResponse);
        $this->get('logger')->debug('VoicePin: handlevoiceprintAction: JSON Response: '.$jsonResponse[0][0]);
        $json = json_decode($jsonResponse[0][0], true);
        $trained = $json["trained"];
        $this->get('logger')->debug('VoicePin: handlevoiceprintAction: JSON Trained: '.$json["trained"]);
        $enrollStatus = $json["enrollStatus"];
        $this->get('logger')->debug('VoicePin: handlevoiceprintAction: JSON Trained: '.$json["enrollStatus"]);
        if ($enrollStatus != "SAMPLE_ACCEPTED"){
            $this->get('logger')->debug('VoicePin: handlevoiceprintAction: Recording not accepted');
            $twiml_response->say('Your recording was not accepted. You will be prompted to re-record your voice.', array('voice'=>'alice', 'language'=>'en-US'));
            $twiml_response->redirect('recordvoiceprinterror?iteration=1', array('method'=>'GET'));
        }else{
            $this->get('logger')->debug('VoicePin: handlevoiceprintAction: Recording accepted');
            $twiml_response->redirect('recordvoiceprint1', array('method'=>'POST'));
        }
        return new Response($twiml_response);
    }
    
    /**
     * @Route("/recordvoiceprint1", name="recordvoiceprint1")
     */
    public function recordvoiceprint1Action(Request $request)
    {
        $this->get('logger')->debug('VoicePin: recordvoiceprint1Action: Record #2');
		$twiml_response = new Services_Twilio_Twiml;
        $twiml_response->say('This is your second voice print. Press the pound key after you have finished recording.', array('voice'=>'alice', 'language'=>'en-US'));
        $twiml_response->record(array('action'=>'handlevoiceprint1','maxLength'=>5, 'playBeep'=>true, 'finishOnKey'=>'#'));
        return new Response($twiml_response);
    }
    
    /**
     * @Route("/handlevoiceprint1", name="handlevoiceprint1")
     */
    public function handlevoiceprint1Action(Request $request)
    {
        $twiml_response = new Services_Twilio_Twiml;
        //$twiml_response->play($request->request->get('RecordingUrl'));
        $recordingUrl=$request->request->get('RecordingUrl');
        $this->get('logger')->debug('VoicePin: handlevoiceprint1Action: Recording URL 2: '.$recordingUrl);
        $voiceprintId=$request->getSession()->get('voiceprintid');
        $this->get('logger')->debug('VoicePin: handlevoiceprint1Action: VoicePrintId'.$voiceprintId);
        $response = $this->enrollVoicePrint($recordingUrl,$voiceprintId);
        $this->get('logger')->debug('VoicePin: handlevoiceprint1Action: Response'.$response);
        $pattern = '
                    /
                    \{              # { character
                        (?:         # non-capturing group
                            [^{}]   # anything that is not a { or }
                            |       # OR
                            (?R)    # recurses the entire pattern
                        )*          # previous group zero or more times
                    \}              # } character
                    /x
                    ';
                    
        preg_match_all($pattern, $response, $jsonResponse);
        $this->get('logger')->debug('VoicePin: handlevoiceprint1Action: JSON Response: '.$jsonResponse[0][0]);
        $json = json_decode($jsonResponse[0][0], true);
        $trained = $json["trained"];
        $this->get('logger')->debug('VoicePin: handlevoiceprin1tAction: JSON Trained: '.$json["trained"]);
        $enrollStatus = $json["enrollStatus"];
        $this->get('logger')->debug('VoicePin: handlevoiceprint1Action: JSON Trained: '.$json["enrollStatus"]);
        if ($enrollStatus != "SAMPLE_ACCEPTED"){
            $this->get('logger')->debug('VoicePin: handlevoiceprint1Action: Recording not accepted');
            $twiml_response->say('Your recording was not accepted. You will be prompted to re-record your voice.', array('voice'=>'alice', 'language'=>'en-US'));
            $twiml_response->redirect('recordvoiceprinterror?iteration=2', array('method'=>'GET'));
        }else{
            $this->get('logger')->debug('VoicePin: handlevoiceprint1Action: Recording accepted');
            $twiml_response->redirect('recordvoiceprint2', array('method'=>'POST'));
        }        
        return new Response($twiml_response);
    }    
    
    /**
     * @Route("/recordvoiceprint2", name="recordvoiceprint2")
     */
    public function recordvoiceprint2Action(Request $request)
    {
		$twiml_response = new Services_Twilio_Twiml;
        $twiml_response->say('This is your final voice print. Press the pound key after you have finished recording.', array('voice'=>'alice', 'language'=>'en-US'));
        $twiml_response->record(array('action'=>'handlevoiceprint2','maxLength'=>5, 'playBeep'=>true, 'finishOnKey'=>'#'));
        return new Response($twiml_response);
    }
    
    /**
     * @Route("/handlevoiceprint2", name="handlevoiceprint2")
     */
    public function handlevoiceprint2Action(Request $request)
    {
        $twiml_response = new Services_Twilio_Twiml;
        //$twiml_response->play($request->request->get('RecordingUrl'));
        $recordingUrl=$request->request->get('RecordingUrl');
        $this->get('logger')->debug('VoicePin: handlevoiceprint2Action: Recording URL 3: '.$recordingUrl);
        $voiceprintId=$request->getSession()->get('voiceprintid');
        $this->get('logger')->debug('VoicePin: handlevoiceprint2Action: VoicePrintId'.$voiceprintId);
        $response = $this->enrollVoicePrint($recordingUrl,$voiceprintId);
        $this->get('logger')->debug('VoicePin: handlevoiceprint2Action: Response'.$response);
        $pattern = '
                    /
                    \{              # { character
                        (?:         # non-capturing group
                            [^{}]   # anything that is not a { or }
                            |       # OR
                            (?R)    # recurses the entire pattern
                        )*          # previous group zero or more times
                    \}              # } character
                    /x
                    ';
                    
        preg_match_all($pattern, $response, $jsonResponse);
        $this->get('logger')->debug('VoicePin: handlevoiceprint2Action: JSON Response: '.$jsonResponse[0][0]);
        $json = json_decode($jsonResponse[0][0], true);
        $trained = $json["trained"];
        $this->get('logger')->debug('VoicePin: handlevoiceprint2Action: JSON Trained: '.$json["trained"]);
        $enrollStatus = $json["enrollStatus"];
        $this->get('logger')->debug('VoicePin: handlevoiceprint2Action: JSON Trained: '.$json["enrollStatus"]);
        if ($enrollStatus != "SAMPLE_ACCEPTED"){
            $this->get('logger')->debug('VoicePin: handlevoiceprint2Action: Recording not accepted');
            $twiml_response->say('Your recording was not accepted. You will be prompted to re-record your voice.', array('voice'=>'alice', 'language'=>'en-US'));
            $twiml_response->redirect('recordvoiceprinterror?iteration=3', array('method'=>'GET'));
        }else{
            $this->get('logger')->debug('VoicePin: handlevoiceprintAction: Recording accepted');
            if ($trained){
                $this->get('logger')->debug('VoicePin: handlevoiceprint2Action: VoicePin trained');
                $customerid =  $request->getSession()->get('customerid');
                // $customer = $this->getDoctrine()
                //             ->getRepository('ComcloudVoiceBundle:Customer')
                //             ->findOneByUserid($customerid);
                $dbObj = $this->getDoctrine()->getManager();
                $customer = $dbObj->getRepository('CommcloudVoiceBundle:WCustomer')
                                    ->findOneByUserid($customerid);
                $customer->setTrained('true');
                $dbObj->flush();
                $twiml_response->say('Your Voice Print has successfully enrolled.', array('voice'=>'alice', 'language'=>'en-US'));
                $twiml_response->hangup();
            }else{
                $this->get('logger')->debug('VoicePin: handlevoiceprint2Action: VoicePin not trained');
                $twiml_response->redirect('recordvoiceprint2', array('method'=>'POST'));
            }
        }        
        return new Response($twiml_response);
    }    

	/**
     * @Route("/commcloudfpauth", name="commcloud_fp_auth")
     */
    public function commcloudfpauthAction(Request $request)
    {       			
		try{
	        $callerPhone = $request->get('From');
	        $this->get('logger')->debug('CommCloudFPAuth: commcloudfpauthAction: Caller ID: '.$request->get('From'));
	        $callerPhone = preg_replace("/[^0-9]/", "", $callerPhone);
	        $callerPhone = substr($callerPhone, -10);
	        $this->get('logger')->debug('CommCloudFPAuth: commcloudfpauthAction: Trimmed Caller ID: '.$callerPhone);
            $service_url = 'http://52.77.112.11:8080/FPAuthWS/EngageIVR/';
            $curl = curl_init($service_url);
            $headers = array();
            $headers[] = 'Content-Type: application/json;';
            $curl_post_data = array(
                //"phonenumber" => '9761769085',
                "phonenumber" => $callerPhone,
                "tpin" => '1234',
            );
            $post_data = json_encode($curl_post_data);
            $this->get('logger')->debug('CommCloudFPAuth: commcloudfpauthAction: Input Payload: '.$post_data);
            //echo $post_data;
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_POST, true);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $post_data);
            curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
            $curl_response = curl_exec($curl);
            curl_close($curl);
            $response  = json_decode($curl_response);
            $message = $response->status->message;
            $this->get('logger')->debug('CommCloudFPAuth: commcloudfpauthAction: Output Payload Message: '.$message);
            $twiml_response = new Services_Twilio_Twiml;
            if (strcasecmp($message, 'authentication success') == 0){
                $twiml_response->say('Welcome, you have been authenticated using next generation finger print authentication.', array('voice'=>'alice', 'language'=>'en-US'));
                $twiml_response->redirect('greeting', array('method'=>'GET'));
            }elseif(strcasecmp($message, 'authentication failed') == 0){
                $twiml_response->say('Welcome, your finger print authentication has failed. Please authenticate yourself using your voice.', array('voice'=>'alice', 'language'=>'en-US'));
                //$twiml_response->redirect('greetingvoicepin', array('method'=>'GET'));                
                $twiml_response->redirect('commcloudfpauthtpin', array('method'=>'GET'));                
            }else{
                $twiml_response->say('Welcome, your phone number or tpin or both do not match.', array('voice'=>'alice', 'language'=>'en-US'));
                $twiml_response->redirect('commcloudfpauthtpin', array('method'=>'GET'));                
            }
            return new Response($twiml_response);
		}catch(Exception $exception){
		    $this->get('logger')->debug('CommCloudFPAuth: commcloudfpauthAction: Exception: '.$exception->getMessage());
		}
    }
	/**
     * @Route("/commcloudfpauthtpin", name="commcloud_fp_auth_tpin")
     */
    public function commcloudfpauthtpinAction(Request $request)
    {
        try{
            $twiml_response = new Services_Twilio_Twiml;
            if($request->request->get('Digits') == null ){
                $gather = $twiml_response->gather(array('numDigits'=>4, 'method'=>'POST'));
                $gather->say('Please input your four digit TPIN to authenticate yourself.', array('voice'=>'alice', 'language'=>'en-US'));
                return new Response($twiml_response);
            }
            $collected_tpin = $request->request->get('Digits');
            $callerPhone = $request->get('From');
	        $this->get('logger')->debug('CommCloudFPAuth: commcloudfpauthtpinAction: Caller ID: '.$request->get('From'));
	        $callerPhone = preg_replace("/[^0-9]/", "", $callerPhone);
	        $callerPhone = substr($callerPhone, -10);
	        $this->get('logger')->debug('CommCloudFPAuth: commcloudfpauthtpinAction: Trimmed Caller ID: '.$callerPhone);
            $service_url = 'http://52.77.112.11:8080/FPAuthWS/EngageIVR/';
            $curl = curl_init($service_url);
            $headers = array();
            $headers[] = 'Content-Type: application/json;';
            $curl_post_data = array(
                //"phonenumber" => '9731769085',
                "phonenumber" => $callerPhone,
                "tpin" => '1234',
            );
            $post_data = json_encode($curl_post_data);
            $this->get('logger')->debug('CommCloudFPAuth: commcloudfpauthtpinAction: Input Payload: '.$post_data);
            //echo $post_data;
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_POST, true);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $post_data);
            curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
            $curl_response = curl_exec($curl);
            curl_close($curl);
            $response  = json_decode($curl_response);
            $message = $response->status->message;
            $this->get('logger')->debug('CommCloudFPAuth: commcloudfpauthAction: Output Payload Message: '.$message);
            if (strcasecmp($message, 'authentication success') == 0){
                $twiml_response->say('You have been authenticated using TPIN authentication.', array('voice'=>'alice', 'language'=>'en-US'));
                $twiml_response->redirect('greeting', array('method'=>'GET'));
            }else{
                $twiml_response->say('Your TPIN authentication has failed.', array('voice'=>'alice', 'language'=>'en-US'));
                $twiml_response->hangup();                
            }
            return new Response($twiml_response);
        }catch(Exception $exception){
            
        }
        
    }
    
}