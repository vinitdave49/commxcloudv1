<?php

namespace Commcloud\VoiceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class SmsController extends Controller
{
    /**
     * @Route("/app/sms", name="sms")
     */
    public function smsAction(Request $request)
    {
        return $this->render('CommcloudVoiceBundle:Admin:createsms.html.twig');
    }
    
}