<?php

namespace Commcloud\VoiceBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\StringInput;
use \Taskrouter_Services_Twilio;
use Commcloud\VoiceBundle\Entity\HtReservationData;
use Commcloud\VoiceBundle\Entity\HtTaskqueueData;
use Commcloud\VoiceBundle\Entity\HtWorkflowData;
use Commcloud\VoiceBundle\Entity\HtWorkeractdurationData;

class GetStatisticsCommand extends ContainerAwareCommand
{
    private $output;

    protected function configure(){
        $this
            ->setName('getstats:run')
            ->setDescription('Runs Cron Database Tasks if needed');
    }

    protected function execute(InputInterface $input, OutputInterface $output){

        $taskrouterclient = $this->getContainer()->get('commcloud_twilio_wrapper.twilio_taskrouter');
        
        $logger = $this->getContainer()->get('logger');
        
        $taskqueueArray = array();
        $workflowArray = array();
        $workerArray = array();
        
        foreach($taskrouterclient->workspace->task_queues as $taskqueue)
        {
                $taskqueueArray[] = $taskqueue->sid;
                //$logger->debug('Task Queue Name: '.$taskqueue->friendly_name.' Task Queue Sid: '.$taskqueue->sid);
        }

        foreach($taskqueueArray as $taskqueue)
        {
            $logger->debug('Task Queue: '.$taskqueue);
            
            $em = $this->getContainer()->get('doctrine.orm.entity_manager');
            $statistics = $taskrouterclient->getTaskQueueStatistics($taskqueue, array('Minutes' => 60));
            
            $htreservation = new HtReservationData();
            $htreservation->setResourceid($statistics->task_queue_sid);
            $starttime = $this->convertunixtodate($statistics->cumulative->start_time);
            $endtime = $this->convertunixtodate($statistics->cumulative->end_time);
            $logger->debug('Start Time:'.$starttime.' End Time: '.$endtime);
            $htreservation->setStartTime(new \DateTime($starttime));
            $htreservation->setEndTime(new \DateTime($endtime));
            $htreservation->setReservationAccepted($statistics->cumulative->reservations_accepted);
            $htreservation->setReservationsCanceled($statistics->cumulative->reservations_canceled);
            $htreservation->setReservationsCreated($statistics->cumulative->reservations_created);
            $htreservation->setReservationsRescinded($statistics->cumulative->reservations_rescinded);
            $htreservation->setReservationsRejected($statistics->cumulative->reservations_rejected);
            $htreservation->setReservationsTimedOut($statistics->cumulative->reservations_timed_out);
            $em->persist($htreservation);
            $em->flush();

            $httaskqueue = new HtTaskqueueData();
            $httaskqueue->setTaskqueuesid($statistics->task_queue_sid);
            $starttime = $this->convertunixtodate($statistics->cumulative->start_time);
            $endtime = $this->convertunixtodate($statistics->cumulative->end_time);
            $logger->debug('Start Time:'.$starttime.' End Time: '.$endtime);
            $httaskqueue->setStartTime(new \DateTime($starttime));
            $httaskqueue->setEndTime(new \DateTime($endtime));
            $httaskqueue->setTaskEntered($statistics->cumulative->tasks_entered);
            $httaskqueue->setTaskCanceled($statistics->cumulative->tasks_canceled);
            $httaskqueue->setTaskDeleted($statistics->cumulative->tasks_deleted);
            $httaskqueue->setTaskMoved($statistics->cumulative->tasks_moved);
            $httaskqueue->setAvgTaskAcceptanceTime($statistics->cumulative->avg_task_acceptance_time);
            $em->persist($httaskqueue);
            $em->flush();
            //$logger->debug('Longest Task Waiting Sid: '.$statistics->realtime->longest_task_waiting_sid);
        }
        
        foreach($taskrouterclient->workspace->workflows as $workflow)
        {
            $workflowArray[] = $workflow->sid;
            $logger->debug('Workflow Name: '.$workflow->friendly_name.' Workflow Sid: '.$workflow->sid);
        }
        
        foreach($workflowArray as $workflow)
        {
            $logger->debug('Workflow: '.$workflow);
            $em = $this->getContainer()->get('doctrine.orm.entity_manager');
            $statistics = $taskrouterclient->getWorkflowStatistics($workflow, array('Minutes' => 60));
            
            $htreservation = new HtReservationData();
            $htreservation->setResourceid($statistics->workflow_sid);
            $starttime = $this->convertunixtodate($statistics->cumulative->start_time);
            $endtime = $this->convertunixtodate($statistics->cumulative->end_time);
            $logger->debug('Start Time:'.$starttime.' End Time: '.$endtime);
            $htreservation->setStartTime(new \DateTime($starttime));
            $htreservation->setEndTime(new \DateTime($endtime));
            $htreservation->setReservationAccepted($statistics->cumulative->reservations_accepted);
            $htreservation->setReservationsCanceled($statistics->cumulative->reservations_canceled);
            $htreservation->setReservationsCreated($statistics->cumulative->reservations_created);
            $htreservation->setReservationsRescinded($statistics->cumulative->reservations_rescinded);
            $htreservation->setReservationsRejected($statistics->cumulative->reservations_rejected);
            $htreservation->setReservationsTimedOut($statistics->cumulative->reservations_timed_out);
            $em->persist($htreservation);
            $em->flush();
            
            $htworkflow = new HtWorkflowData();
            $htworkflow->setWorkflowsid($statistics->workflow_sid);
            $htworkflow->setStartTime(new \DateTime($starttime));
            $htworkflow->setEndTime(new \DateTime($endtime));
            $htworkflow->setTaskEntered($statistics->cumulative->tasks_entered);
            $htworkflow->setTaskCanceled($statistics->cumulative->tasks_canceled);
            $htworkflow->setTaskDeleted($statistics->cumulative->tasks_deleted);
            $htworkflow->setTaskMoved($statistics->cumulative->tasks_moved);
            $htworkflow->setAvgTaskAcceptanceTime($statistics->cumulative->avg_task_acceptance_time);            
            $htworkflow->setTasksTimedOutInWorkfow($statistics->cumulative->tasks_timed_out_in_workflow);
            $em->persist($htworkflow);
            $em->flush();
        }
        
        foreach($taskrouterclient->workspace->workers as $worker)
        {
        	$workerArray[] = $worker->sid;
        	$logger->debug('Worker Name: '.$worker->friendly_name.' Worker Sid: '.$worker->sid);
        }
        
        foreach($workerArray as $worker)
        {
            $logger->debug('Worker: '.$worker);
            $em = $this->getContainer()->get('doctrine.orm.entity_manager');
            $statistics = $taskrouterclient->getWorkerStatistics($worker, array('Minutes' => 60));
            
            $htreservation = new HtReservationData();
            $htreservation->setResourceid($statistics->worker_sid);
            $starttime = $this->convertunixtodate($statistics->cumulative->start_time);
            $endtime = $this->convertunixtodate($statistics->cumulative->end_time);
            $logger->debug('Start Time:'.$starttime.' End Time: '.$endtime);
            $htreservation->setStartTime(new \DateTime($starttime));
            $htreservation->setEndTime(new \DateTime($endtime));
            $htreservation->setReservationAccepted($statistics->cumulative->reservations_accepted);
            $htreservation->setReservationsCanceled($statistics->cumulative->reservations_canceled);
            $htreservation->setReservationsCreated($statistics->cumulative->reservations_created);
            $htreservation->setReservationsRescinded($statistics->cumulative->reservations_rescinded);
            $htreservation->setReservationsRejected($statistics->cumulative->reservations_rejected);
            $htreservation->setReservationsTimedOut($statistics->cumulative->reservations_timed_out);
            $em->persist($htreservation);
            $em->flush();            
            
            $activity_duration = $statistics->cumulative->activity_durations;
            //var_dump($activity_duration);
            foreach($activity_duration as $activity){
                $logger->debug('Activity Duration: '.$activity->friendly_name);
                $htworker = new HtWorkeractdurationData();
                $htworker->setWorkersid($statistics->worker_sid);
                $htworker->setStartTime(new \DateTime($starttime));
                $htworker->setEndTime(new \DateTime($endtime));
                $htworker->setTaskAssigned($statistics->cumulative->tasks_assigned);
                $htworker->setActivitysid($activity->sid);
                $htworker->setActivityname($activity->friendly_name);
                $htworker->setMinDuration($activity->min);
                $htworker->setMaxDuration($activity->max);
                $htworker->setAvgDuration($activity->avg);
                $htworker->setTotalDuration($activity->total);
                $em->persist($htworker);
                $em->flush();
            }
        }
    }

    public function convertunixtodate($sdatetime){
        $unixdatetime = strtotime($sdatetime);
        $datetime = date('Y-m-d H:i:s', $unixdatetime);
        return $datetime;
    }
}
