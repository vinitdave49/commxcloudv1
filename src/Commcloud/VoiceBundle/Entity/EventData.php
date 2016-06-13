<?php

namespace Commcloud\VoiceBundle\Entity;

/**
 * EventData
 */
class EventData
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $eventtype;

    /**
     * @var string
     */
    private $accountsid;

    /**
     * @var string
     */
    private $workspacesid;

    /**
     * @var string
     */
    private $workspacename;

    /**
     * @var string
     */
    private $eventdescription;

    /**
     * @var string
     */
    private $resourcetype;

    /**
     * @var string
     */
    private $resourcesid;

    /**
     * @var string
     */
    private $timestamp;

    /**
     * @var string
     */
    private $workflowsid;

    /**
     * @var string
     */
    private $taskqueuesid;

    /**
     * @var string
     */
    private $reservationsid;

    /**
     * @var string
     */
    private $workersid;

    /**
     * @var string
     */
    private $tasksid;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set eventtype
     *
     * @param string $eventtype
     *
     * @return EventData
     */
    public function setEventtype($eventtype)
    {
        $this->eventtype = $eventtype;

        return $this;
    }

    /**
     * Get eventtype
     *
     * @return string
     */
    public function getEventtype()
    {
        return $this->eventtype;
    }

    /**
     * Set accountsid
     *
     * @param string $accountsid
     *
     * @return EventData
     */
    public function setAccountsid($accountsid)
    {
        $this->accountsid = $accountsid;

        return $this;
    }

    /**
     * Get accountsid
     *
     * @return string
     */
    public function getAccountsid()
    {
        return $this->accountsid;
    }

    /**
     * Set workspacesid
     *
     * @param string $workspacesid
     *
     * @return EventData
     */
    public function setWorkspacesid($workspacesid)
    {
        $this->workspacesid = $workspacesid;

        return $this;
    }

    /**
     * Get workspacesid
     *
     * @return string
     */
    public function getWorkspacesid()
    {
        return $this->workspacesid;
    }

    /**
     * Set workspacename
     *
     * @param string $workspacename
     *
     * @return EventData
     */
    public function setWorkspacename($workspacename)
    {
        $this->workspacename = $workspacename;

        return $this;
    }

    /**
     * Get workspacename
     *
     * @return string
     */
    public function getWorkspacename()
    {
        return $this->workspacename;
    }

    /**
     * Set eventdescription
     *
     * @param string $eventdescription
     *
     * @return EventData
     */
    public function setEventdescription($eventdescription)
    {
        $this->eventdescription = $eventdescription;

        return $this;
    }

    /**
     * Get eventdescription
     *
     * @return string
     */
    public function getEventdescription()
    {
        return $this->eventdescription;
    }

    /**
     * Set resourcetype
     *
     * @param string $resourcetype
     *
     * @return EventData
     */
    public function setResourcetype($resourcetype)
    {
        $this->resourcetype = $resourcetype;

        return $this;
    }

    /**
     * Get resourcetype
     *
     * @return string
     */
    public function getResourcetype()
    {
        return $this->resourcetype;
    }

    /**
     * Set resourcesid
     *
     * @param string $resourcesid
     *
     * @return EventData
     */
    public function setResourcesid($resourcesid)
    {
        $this->resourcesid = $resourcesid;

        return $this;
    }

    /**
     * Get resourcesid
     *
     * @return string
     */
    public function getResourcesid()
    {
        return $this->resourcesid;
    }

    /**
     * Set timestamp
     *
     * @param string $timestamp
     *
     * @return EventData
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;

        return $this;
    }

    /**
     * Get timestamp
     *
     * @return string
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * Set workflowsid
     *
     * @param string $workflowsid
     *
     * @return EventData
     */
    public function setWorkflowsid($workflowsid)
    {
        $this->workflowsid = $workflowsid;

        return $this;
    }

    /**
     * Get workflowsid
     *
     * @return string
     */
    public function getWorkflowsid()
    {
        return $this->workflowsid;
    }

    /**
     * Set taskqueuesid
     *
     * @param string $taskqueuesid
     *
     * @return EventData
     */
    public function setTaskqueuesid($taskqueuesid)
    {
        $this->taskqueuesid = $taskqueuesid;

        return $this;
    }

    /**
     * Get taskqueuesid
     *
     * @return string
     */
    public function getTaskqueuesid()
    {
        return $this->taskqueuesid;
    }

    /**
     * Set reservationsid
     *
     * @param string $reservationsid
     *
     * @return EventData
     */
    public function setReservationsid($reservationsid)
    {
        $this->reservationsid = $reservationsid;

        return $this;
    }

    /**
     * Get reservationsid
     *
     * @return string
     */
    public function getReservationsid()
    {
        return $this->reservationsid;
    }

    /**
     * Set workersid
     *
     * @param string $workersid
     *
     * @return EventData
     */
    public function setWorkersid($workersid)
    {
        $this->workersid = $workersid;

        return $this;
    }

    /**
     * Get workersid
     *
     * @return string
     */
    public function getWorkersid()
    {
        return $this->workersid;
    }

    /**
     * Set tasksid
     *
     * @param string $tasksid
     *
     * @return EventData
     */
    public function setTasksid($tasksid)
    {
        $this->tasksid = $tasksid;

        return $this;
    }

    /**
     * Get tasksid
     *
     * @return string
     */
    public function getTasksid()
    {
        return $this->tasksid;
    }
}
