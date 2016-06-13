<?php

namespace Commcloud\VoiceBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\StringInput;
use Symfony\Component\Console\Input\InputArgument;
use \Taskrouter_Services_Twilio;
use Commcloud\VoiceBundle\Entity\WTaskqueues;
use Commcloud\VoiceBundle\Entity\WActivity;
use Commcloud\VoiceBundle\Entity\WorkerInfo;
use Commcloud\VoiceBundle\Entity\WWorkflows;
use Commcloud\VoiceBundle\Entity\WWorkspaces;

class GetSeedDataCommand extends ContainerAwareCommand
{
    private $output;
    
    protected function configure(){
        $this
            ->setName('getseeddata:run')
            ->setDescription('Fetch seed data from Twilio Comm Cloud')
            ->addArgument(
                'entity',
                InputArgument::OPTIONAL,
                'Which Twilio Entity do you want to synchronize? TaskQueue, Workflow, Activity');
    }
    
    protected function execute(InputInterface $input, OutputInterface $output){
        $taskrouterclient = $this->getContainer()->get('commcloud_twilio_wrapper.twilio_taskrouter');
        $logger = $this->getContainer()->get('logger');
        $em = $this->getContainer()->get('doctrine.orm.entity_manager');
        $entity = $input->getArgument('entity');
        
        if($entity){
            if($entity === "Activity" || $entity === "All"){
                $logger->debug('GetSeedDataCommand: Execute: A Entity Type: '.$entity);
                foreach($taskrouterclient->workspace->activities as $activity)
                {
                    $actseed = new WActivity();
                    $actseed->setActivitySid($activity->sid);
                    $actseed->setAccountSid($activity->account_sid);
                    $actseed->setWorkspaceSid($activity->workspace_sid);
                    $actseed->setFriendlyName($activity->friendly_name);
                    if ($activity->available){
                        $actseed->setAvailable('0');
                    }else{
                        $actseed->setAvailable('1');
                    }
                    $em->persist($actseed);
                    $em->flush();
                    $logger->debug('GetSeedDataCommand: Execute: Activity Name: '.$activity->friendly_name.' inserted into the database table: '.$activity->sid);
                }                
            }
            if($entity === "TaskQueue" || $entity === "All"){
                $logger->debug('GetSeedDataCommand: Execute: B Entity Type: '.$entity);
                foreach($taskrouterclient->workspace->task_queues as $taskqueue)
                {
                    $tqseed = new WTaskqueues();
                    $tqseed->setTaskqueueSid($taskqueue->sid);
                    $tqseed->setAccountSid($taskqueue->account_sid);
                    $tqseed->setWorkspaceSid($taskqueue->workspace_sid);
                    $tqseed->setFriendlyName($taskqueue->friendly_name);
                    $tqseed->setTargetWorkers($taskqueue->target_workers);
                    $tqseed->setMaxReservedWorkers($taskqueue->max_reserved_workers);
                    $tqseed->setReservationActivitySid($taskqueue->reservation_activity_sid);
                    $tqseed->setReservationActivityName($taskqueue->reservation_activity_name);
                    $tqseed->setAssignmentActivitySid($taskqueue->assignment_activity_sid);
                    $tqseed->setAssignmentActivityName($taskqueue->assignment_activity_name);
                    $createdate = $this->convertunixtodate($taskqueue->date_created);
                    $updatedate = $this->convertunixtodate($taskqueue->date_updated);
                    $tqseed->setDateCreated(new \DateTime($createdate));
                    $tqseed->setDateUpdated(new \DateTime($updatedate));
                    $em->persist($tqseed);
                    $em->flush();
                    $logger->debug('GetSeedDataCommand: Execute: Task Queue Name: '.$taskqueue->friendly_name.' inserted into the database table: '.$taskqueue->sid);
                }                
            }
            if($entity === "Workflow" || $entity === "All"){
                $logger->debug('GetSeedDataCommand: Execute: C Entity Type: '.$entity);
                foreach($taskrouterclient->workspace->workflows as $workflow)
                {
                    $wfseed = new WWorkflows();
                    $wfseed->setWorkflowSid($workflow->sid);
                    $wfseed->setAccountSid($workflow->account_sid);
                    $wfseed->setWorkspaceSid($workflow->workspace_sid);
                    $wfseed->setFriendlyName($workflow->friendly_name);
                    $wfseed->setAssignmentCallbackUrl($workflow->assignment_callback_url);
                    $wfseed->setFallbackAssignmentCallbackUrl($workflow->fallback_assignment_callback_url);
                    $wfseed->setConfiguration($workflow->configuration);
                    $wfseed->setTaskReservationTimeout($workflow->task_reservation_timeout);
                    $createdate = $this->convertunixtodate($workflow->date_created);
                    $updatedate = $this->convertunixtodate($workflow->date_updated);
                    $wfseed->setDateCreated(new \DateTime($createdate));
                    $wfseed->setDateUpdated(new \DateTime($updatedate));
                    $em->persist($wfseed);
                    $em->flush();
                    $logger->debug('GetSeedDataCommand: Execute: Workflow Name: '.$workflow->friendly_name.' inserted into the database table: '.$workflow->sid);
                }                
            }
        }
    }
    
    public function convertunixtodate($sdatetime){
        $unixdatetime = strtotime($sdatetime);
        $datetime = date('Y-m-d H:i:s', $unixdatetime);
        return $datetime;
    }
}