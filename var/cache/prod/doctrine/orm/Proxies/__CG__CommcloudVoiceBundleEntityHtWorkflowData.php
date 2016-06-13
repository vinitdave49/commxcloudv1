<?php

namespace Proxies\__CG__\Commcloud\VoiceBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class HtWorkflowData extends \Commcloud\VoiceBundle\Entity\HtWorkflowData implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'Commcloud\\VoiceBundle\\Entity\\HtWorkflowData' . "\0" . 'id', '' . "\0" . 'Commcloud\\VoiceBundle\\Entity\\HtWorkflowData' . "\0" . 'workflowsid', '' . "\0" . 'Commcloud\\VoiceBundle\\Entity\\HtWorkflowData' . "\0" . 'start_time', '' . "\0" . 'Commcloud\\VoiceBundle\\Entity\\HtWorkflowData' . "\0" . 'end_time', '' . "\0" . 'Commcloud\\VoiceBundle\\Entity\\HtWorkflowData' . "\0" . 'task_entered', '' . "\0" . 'Commcloud\\VoiceBundle\\Entity\\HtWorkflowData' . "\0" . 'task_canceled', '' . "\0" . 'Commcloud\\VoiceBundle\\Entity\\HtWorkflowData' . "\0" . 'task_deleted', '' . "\0" . 'Commcloud\\VoiceBundle\\Entity\\HtWorkflowData' . "\0" . 'task_moved', '' . "\0" . 'Commcloud\\VoiceBundle\\Entity\\HtWorkflowData' . "\0" . 'tasks_timed_out_in_workfow', '' . "\0" . 'Commcloud\\VoiceBundle\\Entity\\HtWorkflowData' . "\0" . 'avg_task_acceptance_time'];
        }

        return ['__isInitialized__', '' . "\0" . 'Commcloud\\VoiceBundle\\Entity\\HtWorkflowData' . "\0" . 'id', '' . "\0" . 'Commcloud\\VoiceBundle\\Entity\\HtWorkflowData' . "\0" . 'workflowsid', '' . "\0" . 'Commcloud\\VoiceBundle\\Entity\\HtWorkflowData' . "\0" . 'start_time', '' . "\0" . 'Commcloud\\VoiceBundle\\Entity\\HtWorkflowData' . "\0" . 'end_time', '' . "\0" . 'Commcloud\\VoiceBundle\\Entity\\HtWorkflowData' . "\0" . 'task_entered', '' . "\0" . 'Commcloud\\VoiceBundle\\Entity\\HtWorkflowData' . "\0" . 'task_canceled', '' . "\0" . 'Commcloud\\VoiceBundle\\Entity\\HtWorkflowData' . "\0" . 'task_deleted', '' . "\0" . 'Commcloud\\VoiceBundle\\Entity\\HtWorkflowData' . "\0" . 'task_moved', '' . "\0" . 'Commcloud\\VoiceBundle\\Entity\\HtWorkflowData' . "\0" . 'tasks_timed_out_in_workfow', '' . "\0" . 'Commcloud\\VoiceBundle\\Entity\\HtWorkflowData' . "\0" . 'avg_task_acceptance_time'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (HtWorkflowData $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setWorkflowsid($workflowsid)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setWorkflowsid', [$workflowsid]);

        return parent::setWorkflowsid($workflowsid);
    }

    /**
     * {@inheritDoc}
     */
    public function getWorkflowsid()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWorkflowsid', []);

        return parent::getWorkflowsid();
    }

    /**
     * {@inheritDoc}
     */
    public function setStartTime($startTime)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStartTime', [$startTime]);

        return parent::setStartTime($startTime);
    }

    /**
     * {@inheritDoc}
     */
    public function getStartTime()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStartTime', []);

        return parent::getStartTime();
    }

    /**
     * {@inheritDoc}
     */
    public function setEndTime($endTime)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEndTime', [$endTime]);

        return parent::setEndTime($endTime);
    }

    /**
     * {@inheritDoc}
     */
    public function getEndTime()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEndTime', []);

        return parent::getEndTime();
    }

    /**
     * {@inheritDoc}
     */
    public function setTaskEntered($taskEntered)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTaskEntered', [$taskEntered]);

        return parent::setTaskEntered($taskEntered);
    }

    /**
     * {@inheritDoc}
     */
    public function getTaskEntered()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTaskEntered', []);

        return parent::getTaskEntered();
    }

    /**
     * {@inheritDoc}
     */
    public function setTaskCanceled($taskCanceled)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTaskCanceled', [$taskCanceled]);

        return parent::setTaskCanceled($taskCanceled);
    }

    /**
     * {@inheritDoc}
     */
    public function getTaskCanceled()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTaskCanceled', []);

        return parent::getTaskCanceled();
    }

    /**
     * {@inheritDoc}
     */
    public function setTaskDeleted($taskDeleted)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTaskDeleted', [$taskDeleted]);

        return parent::setTaskDeleted($taskDeleted);
    }

    /**
     * {@inheritDoc}
     */
    public function getTaskDeleted()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTaskDeleted', []);

        return parent::getTaskDeleted();
    }

    /**
     * {@inheritDoc}
     */
    public function setTaskMoved($taskMoved)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTaskMoved', [$taskMoved]);

        return parent::setTaskMoved($taskMoved);
    }

    /**
     * {@inheritDoc}
     */
    public function getTaskMoved()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTaskMoved', []);

        return parent::getTaskMoved();
    }

    /**
     * {@inheritDoc}
     */
    public function setTasksTimedOutInWorkfow($tasksTimedOutInWorkfow)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTasksTimedOutInWorkfow', [$tasksTimedOutInWorkfow]);

        return parent::setTasksTimedOutInWorkfow($tasksTimedOutInWorkfow);
    }

    /**
     * {@inheritDoc}
     */
    public function getTasksTimedOutInWorkfow()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTasksTimedOutInWorkfow', []);

        return parent::getTasksTimedOutInWorkfow();
    }

    /**
     * {@inheritDoc}
     */
    public function setAvgTaskAcceptanceTime($avgTaskAcceptanceTime)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAvgTaskAcceptanceTime', [$avgTaskAcceptanceTime]);

        return parent::setAvgTaskAcceptanceTime($avgTaskAcceptanceTime);
    }

    /**
     * {@inheritDoc}
     */
    public function getAvgTaskAcceptanceTime()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAvgTaskAcceptanceTime', []);

        return parent::getAvgTaskAcceptanceTime();
    }

}
