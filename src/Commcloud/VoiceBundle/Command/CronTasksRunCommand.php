<?php

namespace Commcloud\VoiceBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\StringInput;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Output\NullOutput;

class CronTasksRunCommand extends ContainerAwareCommand {
    
    protected function configure(){
        $this
            ->setName('crontasks:run')
            ->setDescription('Run jobs from the database table');
    }
    
    protected function execute(InputInterface $input, OutputInterface $output){
        
        $this->output = $output;
        
        $logger = $this->getContainer()->get('logger');
        
        $logger->debug('CronTasksRunCommand: Execute');
        
        $em = $this->getContainer()->get('doctrine.orm.entity_manager');
        $crontasks = $em->getRepository('CommcloudVoiceBundle:CronTask')->findAll();
        
        foreach($crontasks as $crontask){
            // Get the last run time of this task, and calculate when it should run next
            $lastrun = $crontask->getLastRun();
            $logger->debug('CronTasksRunCommand: Last Run Date and Time: '.$lastrun);
            $nextrun = $lastrun + $crontask->getIntrvl();
            $logger->debug('CronTasksRunCommand: Next Run Date and Time: '.$nextrun);

            // We must run this task if:
            // * time() is larger or equal to $nextrun
            $run = (time() >= $nextrun);
            $logger->debug('CronTasksRunCommand: Run? '.$run);
            if($run){
                $logger->debug('CronTasksRunCommand: Execute: Running Cron Task...');
                $crontask->setLastRun(time());
                $logger->debug('CronTasksRunCommand: Current Run Date and Time: '.time());
                try{
                    $commands = $crontask->getCommands();
                    foreach($commands as $command){
                        $logger->debug('CronTasksRunCommand: Execute: Running Command...'.$command);
                        //Run Command
                        $this->runCommand($command);
                    }
                    $logger->debug('CronTasksRunCommand: Execute: Command ran successfully '.$nextrun);
                    $crontask->setNextrun(time()+$crontask->getIntrvl());
                    $logger->debug('CronTasksRunCommand: Next Success Run Date and Time: '.$nextrun);
                    $crontask->setLastrunstatus('success');
                }catch(Exception $e){
                    $crontask->setNextrun(time()+$crontask->getIntrvl());
                    $logger->debug('CronTasksRunCommand: Next Failure Run Date and Time: '.$nextrun);
                    $crontask->setLastrunstatus('failed');
                    $logger->debug('CronTasksRunCommand: Execute: Command failed!!!');
                    $logger->debug('CronTasksRunCommand: Execute: Exception Occured: '.$e.getMessage());
                }
                // Persist crontask
                $em->persist($crontask);
            }else{
                $logger->debug('CronTasksRunCommand: Execute: Skipping Cron Task');
            }
            
        }
        // Flush database changes
        $em->flush();
        $logger->debug('CronTasksRunCommand: Execute: Done');
    }
    
    private function runCommand($string){
        $logger = $this->getContainer()->get('logger');
        $logger->debug('CronTasksRunCommand: runCommand: commandString: '.$string);
        // Split namespace and arguments
        //$namespace = explode(' ', $string)[0];
        //$logger->debug('CronTasksRunCommand: runCommand: Namespace: '.$namespace);

        // Set input
        $command = $this->getApplication()->find($string);
        
        $arguments = array(
                'command' => 'getstats:run',
            );

        $input = new ArrayInput($arguments);
        $output = new NullOutput();
        
        // Send all output to the console
        $returnCode = $command->run($input, $output);
        $logger->debug('CronTasksRunCommand: runCommand: returnCode: '.$returnCode);
        return $returnCode != 0;
    }
    
    public function convertunixtodate($sdatetime){
        $unixdatetime = strtotime($sdatetime);
        $datetime = date('Y-m-d H:i:s', $unixdatetime);
        return $datetime;
    }
}
?>
