<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // index
        if ($pathinfo === '/index') {
            return array (  '_controller' => 'Commcloud\\VoiceBundle\\Controller\\AdminController::indexAction',  '_route' => 'index',);
        }

        // createactivity
        if ($pathinfo === '/app/createactivity') {
            return array (  '_controller' => 'Commcloud\\VoiceBundle\\Controller\\AdminController::createactivityAction',  '_route' => 'createactivity',);
        }

        // createactivityredirect
        if ($pathinfo === '/createactivityredirect') {
            return array (  '_controller' => 'Commcloud\\VoiceBundle\\Controller\\AdminController::createactivityRedirectAction',  '_route' => 'createactivityredirect',);
        }

        // updateworkerredirect
        if ($pathinfo === '/updateworkerredirect') {
            return array (  '_controller' => 'Commcloud\\VoiceBundle\\Controller\\AdminController::updateworkerRedirectAction',  '_route' => 'updateworkerredirect',);
        }

        // deleteworkerredirect
        if ($pathinfo === '/deleteworkerredirect') {
            return array (  '_controller' => 'Commcloud\\VoiceBundle\\Controller\\AdminController::deleteworkerRedirectAction',  '_route' => 'deleteworkerredirect',);
        }

        // updateactivityredirect
        if ($pathinfo === '/updateactivityredirect') {
            return array (  '_controller' => 'Commcloud\\VoiceBundle\\Controller\\AdminController::updateactivityRedirectAction',  '_route' => 'updateactivityredirect',);
        }

        if (0 === strpos($pathinfo, '/delete')) {
            // deleteactivityredirect
            if ($pathinfo === '/deleteactivityredirect') {
                return array (  '_controller' => 'Commcloud\\VoiceBundle\\Controller\\AdminController::deleteactivityRedirectAction',  '_route' => 'deleteactivityredirect',);
            }

            // deletetaskqueueredirect
            if ($pathinfo === '/deletetaskqueueredirect') {
                return array (  '_controller' => 'Commcloud\\VoiceBundle\\Controller\\AdminController::deletetaskqueueRedirectAction',  '_route' => 'deletetaskqueueredirect',);
            }

        }

        if (0 === strpos($pathinfo, '/create')) {
            // createactivityTemplate
            if ($pathinfo === '/createactivityTemplate') {
                return array (  '_controller' => 'Commcloud\\VoiceBundle\\Controller\\AdminController::createActivityTemplateAction',  '_route' => 'createactivityTemplate',);
            }

            // createworkerTemplate
            if ($pathinfo === '/createworkerTemplate') {
                return array (  '_controller' => 'Commcloud\\VoiceBundle\\Controller\\AdminController::createWorkerTemplateAction',  '_route' => 'createworkerTemplate',);
            }

        }

        // createworker
        if ($pathinfo === '/app/createworker') {
            return array (  '_controller' => 'Commcloud\\VoiceBundle\\Controller\\AdminController::createworker',  '_route' => 'createworker',);
        }

        // createworkeraction
        if ($pathinfo === '/createworkeraction') {
            return array (  '_controller' => 'Commcloud\\VoiceBundle\\Controller\\AdminController::createworkerAction',  '_route' => 'createworkeraction',);
        }

        // createtaskqueue
        if ($pathinfo === '/app/createtaskqueue') {
            return array (  '_controller' => 'Commcloud\\VoiceBundle\\Controller\\AdminController::createtaskqueue',  '_route' => 'createtaskqueue',);
        }

        // createtaskqueueaction
        if ($pathinfo === '/createtaskqueueaction') {
            return array (  '_controller' => 'Commcloud\\VoiceBundle\\Controller\\AdminController::createtaskqueueAction',  '_route' => 'createtaskqueueaction',);
        }

        // updatetaskqueueredirect
        if ($pathinfo === '/updatetaskqueueredirect') {
            return array (  '_controller' => 'Commcloud\\VoiceBundle\\Controller\\AdminController::updatetaskqueueRedirectAction',  '_route' => 'updatetaskqueueredirect',);
        }

        // createworkflow
        if ($pathinfo === '/app/createworkflow') {
            return array (  '_controller' => 'Commcloud\\VoiceBundle\\Controller\\AdminController::createworkflowAction',  '_route' => 'createworkflow',);
        }

        if (0 === strpos($pathinfo, '/c')) {
            if (0 === strpos($pathinfo, '/create')) {
                // createtaskqueueTemplate
                if ($pathinfo === '/createtaskqueueTemplate') {
                    return array (  '_controller' => 'Commcloud\\VoiceBundle\\Controller\\AdminController::createTaskQueueTemplateAction',  '_route' => 'createtaskqueueTemplate',);
                }

                // createuser
                if ($pathinfo === '/createuser') {
                    return array (  '_controller' => 'Commcloud\\VoiceBundle\\Controller\\AdminController::createuserAction',  '_route' => 'createuser',);
                }

                // createproject
                if ($pathinfo === '/createproject') {
                    return array (  '_controller' => 'Commcloud\\VoiceBundle\\Controller\\AdminController::createprojecttemplateAction',  '_route' => 'createproject',);
                }

            }

            // configureproject
            if ($pathinfo === '/configureproject') {
                return array (  '_controller' => 'Commcloud\\VoiceBundle\\Controller\\AdminController::configureprojectAction',  '_route' => 'configureproject',);
            }

            // createprojectaction
            if ($pathinfo === '/createprojectaction') {
                return array (  '_controller' => 'Commcloud\\VoiceBundle\\Controller\\AdminController::createprojectAction',  '_route' => 'createprojectaction',);
            }

        }

        // 
        if ($pathinfo === '/demopassword') {
            return array (  '_controller' => 'Commcloud\\VoiceBundle\\Controller\\AdminController::demopassword',  '_route' => '',);
        }

        if (0 === strpos($pathinfo, '/hold')) {
            // hold
            if ($pathinfo === '/hold') {
                return array (  '_controller' => 'Commcloud\\VoiceBundle\\Controller\\AgentController::holdAction',  '_route' => 'hold',);
            }

            // holdredirect
            if ($pathinfo === '/holdredirect') {
                return array (  '_controller' => 'Commcloud\\VoiceBundle\\Controller\\AgentController::holdRedirectAction',  '_route' => 'holdredirect',);
            }

        }

        if (0 === strpos($pathinfo, '/unhold')) {
            // unhold
            if ($pathinfo === '/unhold') {
                return array (  '_controller' => 'Commcloud\\VoiceBundle\\Controller\\AgentController::unholdAction',  '_route' => 'unhold',);
            }

            // unholdredirect
            if (0 === strpos($pathinfo, '/unholdredirect') && preg_match('#^/unholdredirect/(?P<session>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'unholdredirect')), array (  '_controller' => 'Commcloud\\VoiceBundle\\Controller\\AgentController::unholdRedirectAction',));
            }

        }

        if (0 === strpos($pathinfo, '/transfer')) {
            // transferaction
            if ($pathinfo === '/transferaction') {
                return array (  '_controller' => 'Commcloud\\VoiceBundle\\Controller\\AgentController::transferAction',  '_route' => 'transferaction',);
            }

            if (0 === strpos($pathinfo, '/transfercall')) {
                // transfercallaction
                if ($pathinfo === '/transfercallaction') {
                    return array (  '_controller' => 'Commcloud\\VoiceBundle\\Controller\\AgentController::transfercallaction',  '_route' => 'transfercallaction',);
                }

                // transfercallredirect
                if (0 === strpos($pathinfo, '/transfercallredirect') && preg_match('#^/transfercallredirect/(?P<transferagentid>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'transfercallredirect')), array (  '_controller' => 'Commcloud\\VoiceBundle\\Controller\\AgentController::transfercallredirect',));
                }

            }

        }

        if (0 === strpos($pathinfo, '/a')) {
            // agent_index
            if ($pathinfo === '/agentindex') {
                return array (  '_controller' => 'Commcloud\\VoiceBundle\\Controller\\AgentController::indexAction',  '_route' => 'agent_index',);
            }

            // commcloud_voice_welcome
            if ($pathinfo === '/app/content') {
                return array (  '_controller' => 'Commcloud\\VoiceBundle\\Controller\\AgentController::welcomeAction',  '_route' => 'commcloud_voice_welcome',);
            }

        }

        // commcloud_voice_token
        if ($pathinfo === '/token') {
            return array (  '_controller' => 'Commcloud\\VoiceBundle\\Controller\\AgentController::tokenAction',  '_route' => 'commcloud_voice_token',);
        }

        if (0 === strpos($pathinfo, '/app')) {
            if (0 === strpos($pathinfo, '/app/calls')) {
                // commcloud_voice_calllist
                if ($pathinfo === '/app/calls/list') {
                    return array (  '_controller' => 'Commcloud\\VoiceBundle\\Controller\\AgentController::calllistAction',  '_route' => 'commcloud_voice_calllist',);
                }

                // commcloud_voice_callhistory
                if ($pathinfo === '/app/calls/history') {
                    return array (  '_controller' => 'Commcloud\\VoiceBundle\\Controller\\AgentController::callhistoryAction',  '_route' => 'commcloud_voice_callhistory',);
                }

            }

            // commcloud_voice_agentlist
            if ($pathinfo === '/app/agent/list') {
                return array (  '_controller' => 'Commcloud\\VoiceBundle\\Controller\\AgentController::agentlistAction',  '_route' => 'commcloud_voice_agentlist',);
            }

            // commcloud_voice_getfromtoofcallrecording
            if ($pathinfo === '/app/call/recording/from_to') {
                return array (  '_controller' => 'Commcloud\\VoiceBundle\\Controller\\AgentController::getfromtoofcallrecordingAction',  '_route' => 'commcloud_voice_getfromtoofcallrecording',);
            }

        }

        // commcloud_voice_outboundtwiml
        if ($pathinfo === '/outboundtwiml') {
            return array (  '_controller' => 'Commcloud\\VoiceBundle\\Controller\\AgentController::outboundtwimlAction',  '_route' => 'commcloud_voice_outboundtwiml',);
        }

        if (0 === strpos($pathinfo, '/get')) {
            // getchat
            if (0 === strpos($pathinfo, '/getchat') && preg_match('#^/getchat/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'getchat')), array (  '_controller' => 'Commcloud\\VoiceBundle\\Controller\\ChatController::homeAction',));
            }

            // getagentchat
            if (0 === strpos($pathinfo, '/getagentchat') && preg_match('#^/getagentchat/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'getagentchat')), array (  '_controller' => 'Commcloud\\VoiceBundle\\Controller\\ChatController::demochatAction',));
            }

            // getchattoken
            if ($pathinfo === '/getchattoken') {
                return array (  '_controller' => 'Commcloud\\VoiceBundle\\Controller\\ChatController::getchattokenAction',  '_route' => 'getchattoken',);
            }

        }

        if (0 === strpos($pathinfo, '/c')) {
            // chathook
            if ($pathinfo === '/chat/hook') {
                return array (  '_controller' => 'Commcloud\\VoiceBundle\\Controller\\ChatController::webhookAction',  '_route' => 'chathook',);
            }

            if (0 === strpos($pathinfo, '/crontasks/schedules')) {
                // commcloud_voicebundle_crontasks_stats
                if ($pathinfo === '/crontasks/schedulestats') {
                    return array (  '_controller' => 'Commcloud\\VoiceBundle\\Controller\\CronTaskController::scheduleStatsAction',  '_route' => 'commcloud_voicebundle_crontasks_stats',);
                }

                // commcloud_voicebundle_crontasks_seed
                if ($pathinfo === '/crontasks/scheduleseed') {
                    return array (  '_controller' => 'Commcloud\\VoiceBundle\\Controller\\CronTaskController::scheduleSeedAction',  '_route' => 'commcloud_voicebundle_crontasks_seed',);
                }

            }

        }

        // commcloud_voice_default_index
        if ($pathinfo === '/index') {
            return array (  '_controller' => 'Commcloud\\VoiceBundle\\Controller\\DefaultController::indexAction',  '_route' => 'commcloud_voice_default_index',);
        }

        if (0 === strpos($pathinfo, '/commcloud')) {
            // commcloud_greeting
            if ($pathinfo === '/commcloudgreeting') {
                return array (  '_controller' => 'Commcloud\\VoiceBundle\\Controller\\IvrController::commcloudgreetingAction',  '_route' => 'commcloud_greeting',);
            }

            if (0 === strpos($pathinfo, '/commcloudc')) {
                // commcloud_conference
                if ($pathinfo === '/commcloudconference') {
                    return array (  '_controller' => 'Commcloud\\VoiceBundle\\Controller\\IvrController::commcloudconferenceAction',  '_route' => 'commcloud_conference',);
                }

                // commcloud_callhandler
                if ($pathinfo === '/commcloudcallhandler') {
                    return array (  '_controller' => 'Commcloud\\VoiceBundle\\Controller\\IvrController::commcloudcallhandlerAction',  '_route' => 'commcloud_callhandler',);
                }

            }

            // commcloud_sfdc
            if ($pathinfo === '/commcloudsfdc') {
                return array (  '_controller' => 'Commcloud\\VoiceBundle\\Controller\\IvrController::commcloudsfdcAction',  '_route' => 'commcloud_sfdc',);
            }

        }

        // commcloud_voice_greeting
        if ($pathinfo === '/greeting') {
            return array (  '_controller' => 'Commcloud\\VoiceBundle\\Controller\\IvrController::greetingAction',  '_route' => 'commcloud_voice_greeting',);
        }

        // commcloud_voice_incomingcallhandler
        if ($pathinfo === '/incomingcallhandler') {
            return array (  '_controller' => 'Commcloud\\VoiceBundle\\Controller\\IvrController::incomingcallhandlerAction',  '_route' => 'commcloud_voice_incomingcallhandler',);
        }

        // authenticatevoiceprint
        if ($pathinfo === '/authenticatevoiceprint') {
            return array (  '_controller' => 'Commcloud\\VoiceBundle\\Controller\\IvrController::authenticatevoiceprintAction',  '_route' => 'authenticatevoiceprint',);
        }

        // greetingvoicepin
        if ($pathinfo === '/greetingvoicepin') {
            return array (  '_controller' => 'Commcloud\\VoiceBundle\\Controller\\IvrController::greetingvoicepinAction',  '_route' => 'greetingvoicepin',);
        }

        // voicepin
        if ($pathinfo === '/voicepin') {
            return array (  '_controller' => 'Commcloud\\VoiceBundle\\Controller\\IvrController::voicepinAction',  '_route' => 'voicepin',);
        }

        // identifyuser
        if ($pathinfo === '/identifyuser') {
            return array (  '_controller' => 'Commcloud\\VoiceBundle\\Controller\\IvrController::identifyuserAction',  '_route' => 'identifyuser',);
        }

        if (0 === strpos($pathinfo, '/recordvoiceprint')) {
            // recordvoiceprinterror
            if ($pathinfo === '/recordvoiceprinterror') {
                return array (  '_controller' => 'Commcloud\\VoiceBundle\\Controller\\IvrController::recordvoiceprinterrorAction',  '_route' => 'recordvoiceprinterror',);
            }

            // recordvoiceprint
            if ($pathinfo === '/recordvoiceprint') {
                return array (  '_controller' => 'Commcloud\\VoiceBundle\\Controller\\IvrController::recordvoiceprintAction',  '_route' => 'recordvoiceprint',);
            }

        }

        // handlevoiceprint
        if ($pathinfo === '/handlevoiceprint') {
            return array (  '_controller' => 'Commcloud\\VoiceBundle\\Controller\\IvrController::handlevoiceprintAction',  '_route' => 'handlevoiceprint',);
        }

        // recordvoiceprint1
        if ($pathinfo === '/recordvoiceprint1') {
            return array (  '_controller' => 'Commcloud\\VoiceBundle\\Controller\\IvrController::recordvoiceprint1Action',  '_route' => 'recordvoiceprint1',);
        }

        // handlevoiceprint1
        if ($pathinfo === '/handlevoiceprint1') {
            return array (  '_controller' => 'Commcloud\\VoiceBundle\\Controller\\IvrController::handlevoiceprint1Action',  '_route' => 'handlevoiceprint1',);
        }

        // recordvoiceprint2
        if ($pathinfo === '/recordvoiceprint2') {
            return array (  '_controller' => 'Commcloud\\VoiceBundle\\Controller\\IvrController::recordvoiceprint2Action',  '_route' => 'recordvoiceprint2',);
        }

        // handlevoiceprint2
        if ($pathinfo === '/handlevoiceprint2') {
            return array (  '_controller' => 'Commcloud\\VoiceBundle\\Controller\\IvrController::handlevoiceprint2Action',  '_route' => 'handlevoiceprint2',);
        }

        if (0 === strpos($pathinfo, '/commcloudfpauth')) {
            // commcloud_fp_auth
            if ($pathinfo === '/commcloudfpauth') {
                return array (  '_controller' => 'Commcloud\\VoiceBundle\\Controller\\IvrController::commcloudfpauthAction',  '_route' => 'commcloud_fp_auth',);
            }

            // commcloud_fp_auth_tpin
            if ($pathinfo === '/commcloudfpauthtpin') {
                return array (  '_controller' => 'Commcloud\\VoiceBundle\\Controller\\IvrController::commcloudfpauthtpinAction',  '_route' => 'commcloud_fp_auth_tpin',);
            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'Commcloud\\VoiceBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
                }

                // login_check
                if ($pathinfo === '/login_check') {
                    return array (  '_controller' => 'Commcloud\\VoiceBundle\\Controller\\SecurityController::loginCheckAction',  '_route' => 'login_check',);
                }

            }

            // logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'Commcloud\\VoiceBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'logout',);
            }

        }

        // sms
        if ($pathinfo === '/app/sms') {
            return array (  '_controller' => 'Commcloud\\VoiceBundle\\Controller\\SmsController::smsAction',  '_route' => 'sms',);
        }

        // reporting_home
        if ($pathinfo === '/supervisorindex') {
            return array (  '_controller' => 'Commcloud\\VoiceBundle\\Controller\\SupervisorController::indexAction',  '_route' => 'reporting_home',);
        }

        // load_rt_workflow_report_filter
        if ($pathinfo === '/app/load_rt_workflow_report_filter') {
            return array (  '_controller' => 'Commcloud\\VoiceBundle\\Controller\\SupervisorController::rtworkflowreportfilterAction',  '_route' => 'load_rt_workflow_report_filter',);
        }

        // load_rt_workflow_report
        if ($pathinfo === '/load_rt_workflow_report') {
            return array (  '_controller' => 'Commcloud\\VoiceBundle\\Controller\\SupervisorController::rtworkflowreportAction',  '_route' => 'load_rt_workflow_report',);
        }

        // load_rt_worker_report_filter
        if ($pathinfo === '/app/load_rt_worker_report_filter') {
            return array (  '_controller' => 'Commcloud\\VoiceBundle\\Controller\\SupervisorController::rtworkerreportfilterAction',  '_route' => 'load_rt_worker_report_filter',);
        }

        // load_rt_worker_report
        if ($pathinfo === '/load_rt_worker_report') {
            return array (  '_controller' => 'Commcloud\\VoiceBundle\\Controller\\SupervisorController::rtworkerreportAction',  '_route' => 'load_rt_worker_report',);
        }

        // load_rt_taskqueue_report_filter
        if ($pathinfo === '/app/load_rt_taskqueue_report_filter') {
            return array (  '_controller' => 'Commcloud\\VoiceBundle\\Controller\\SupervisorController::rttaskqueuereportfilterAction',  '_route' => 'load_rt_taskqueue_report_filter',);
        }

        if (0 === strpos($pathinfo, '/load_')) {
            // load_rt_taskqueue_report
            if ($pathinfo === '/load_rt_taskqueue_report') {
                return array (  '_controller' => 'Commcloud\\VoiceBundle\\Controller\\SupervisorController::rttaskqueuereportAction',  '_route' => 'load_rt_taskqueue_report',);
            }

            // load_ht_taskqueue_report
            if ($pathinfo === '/load_ht_taskqueue_report') {
                return array (  '_controller' => 'Commcloud\\VoiceBundle\\Controller\\SupervisorController::httaskqueuereportAction',  '_route' => 'load_ht_taskqueue_report',);
            }

        }

        // load_ht_taskqueue_report_filter
        if ($pathinfo === '/app/load_ht_taskqueue_report_filter') {
            return array (  '_controller' => 'Commcloud\\VoiceBundle\\Controller\\SupervisorController::httaskqueuereportfilterAction',  '_route' => 'load_ht_taskqueue_report_filter',);
        }

        // load_ht_workflow_report
        if ($pathinfo === '/load_ht_workflow_report') {
            return array (  '_controller' => 'Commcloud\\VoiceBundle\\Controller\\SupervisorController::htworkflowreportAction',  '_route' => 'load_ht_workflow_report',);
        }

        if (0 === strpos($pathinfo, '/app/load_ht_')) {
            // load_ht_workflow_report_filter
            if ($pathinfo === '/app/load_ht_workflow_report_filter') {
                return array (  '_controller' => 'Commcloud\\VoiceBundle\\Controller\\SupervisorController::htworkflowreportfilterAction',  '_route' => 'load_ht_workflow_report_filter',);
            }

            // load_ht_activityduration_filter
            if ($pathinfo === '/app/load_ht_activityduration_filter') {
                return array (  '_controller' => 'Commcloud\\VoiceBundle\\Controller\\SupervisorController::htactivitydurationfilterAction',  '_route' => 'load_ht_activityduration_filter',);
            }

        }

        // load_ht_activityduration_report
        if ($pathinfo === '/load_ht_activityduration_report') {
            return array (  '_controller' => 'Commcloud\\VoiceBundle\\Controller\\SupervisorController::htactivitydurationreportAction',  '_route' => 'load_ht_activityduration_report',);
        }

        // load_rt_calllist_filter
        if ($pathinfo === '/app/load_rt_calllist_filter') {
            return array (  '_controller' => 'Commcloud\\VoiceBundle\\Controller\\SupervisorController::rtcalllistfilterAction',  '_route' => 'load_rt_calllist_filter',);
        }

        // load_rt_calllist_report
        if ($pathinfo === '/load_rt_callist_report') {
            return array (  '_controller' => 'Commcloud\\VoiceBundle\\Controller\\SupervisorController::rtcalllistAction',  '_route' => 'load_rt_calllist_report',);
        }

        // load_ht_calllist_filter
        if ($pathinfo === '/app/load_ht_calllist_filter') {
            return array (  '_controller' => 'Commcloud\\VoiceBundle\\Controller\\SupervisorController::htcalllistfilterAction',  '_route' => 'load_ht_calllist_filter',);
        }

        // load_ht_calllist_report
        if ($pathinfo === '/load_ht_callist_report') {
            return array (  '_controller' => 'Commcloud\\VoiceBundle\\Controller\\SupervisorController::htcalllistAction',  '_route' => 'load_ht_calllist_report',);
        }

        // call_recording
        if ($pathinfo === '/app/call/recording') {
            return array (  '_controller' => 'Commcloud\\VoiceBundle\\Controller\\SupervisorController::callrecordingAction',  '_route' => 'call_recording',);
        }

        // load_callrecording_table
        if ($pathinfo === '/load_callrecording_table') {
            return array (  '_controller' => 'Commcloud\\VoiceBundle\\Controller\\SupervisorController::loadcallrecordingtable',  '_route' => 'load_callrecording_table',);
        }

        if (0 === strpos($pathinfo, '/create')) {
            // createtask
            if ($pathinfo === '/createtask') {
                return array (  '_controller' => 'Commcloud\\VoiceBundle\\Controller\\TaskrouterController::CreateTaskAction',  '_route' => 'createtask',);
            }

            // createactivityaction
            if ($pathinfo === '/createactivityaction') {
                return array (  '_controller' => 'Commcloud\\VoiceBundle\\Controller\\TaskrouterController::createactivityAction',  '_route' => 'createactivityaction',);
            }

        }

        if (0 === strpos($pathinfo, '/post')) {
            // posteventcallback
            if ($pathinfo === '/posteventcallback') {
                return array (  '_controller' => 'Commcloud\\VoiceBundle\\Controller\\TaskrouterController::posteventcallbackAction',  '_route' => 'posteventcallback',);
            }

            // poststatuscallback
            if ($pathinfo === '/poststatuscallback') {
                return array (  '_controller' => 'Commcloud\\VoiceBundle\\Controller\\TaskrouterController::poststatuscallbackAction',  '_route' => 'poststatuscallback',);
            }

        }

        // commcloud_voice_assignmentcallback
        if ($pathinfo === '/assginmentcallback') {
            return array (  '_controller' => 'Commcloud\\VoiceBundle\\Controller\\TaskrouterController::assginmentcallbackAction',  '_route' => 'commcloud_voice_assignmentcallback',);
        }

        // commcloud_voice_taskassignmentcallback
        if ($pathinfo === '/taskassignmentcallback') {
            return array (  '_controller' => 'Commcloud\\VoiceBundle\\Controller\\TaskrouterController::taskassignmentcallbackAction',  '_route' => 'commcloud_voice_taskassignmentcallback',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
