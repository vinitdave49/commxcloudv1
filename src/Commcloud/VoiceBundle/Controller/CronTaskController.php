<?php

namespace Commcloud\VoiceBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Commcloud\VoiceBundle\Entity\CronTask;

/**
 * @Route("/crontasks")
 */
class CronTaskController extends Controller{
    /**
     * @Route("/schedulestats", name="commcloud_voicebundle_crontasks_stats")
     */
    public function scheduleStatsAction()
    {
        $entity = new CronTask();

        $entity
            ->setName('Get Twilio TaskQueue Statistics')
            ->setDescription('Get Twilio TaskQueue Statistics')
            ->setIntrvl(1800) // Run once every 30 minutes
            ->setCommands(array(
                'getstats:run'
            ));

        $em = $this->getDoctrine()->getManager();
        $em->persist($entity);
        $em->flush();

        return new Response('OK!');
    }
    /**
     * @Route("/scheduleseed", name="commcloud_voicebundle_crontasks_seed")
     */
    public function scheduleSeedAction()
    {
        $entity = new CronTask();

        $entity
            ->setName('getseeddata')
            ->setDescription('Get Twilio Seed Data')
            ->setIntrvl(1800) // Run once every 30 minutes
            ->setCommands(array(
                'getseeddata:run'
            ));

        $em = $this->getDoctrine()->getManager();
        $em->persist($entity);
        $em->flush();

        return new Response('OK!');
    }    
}