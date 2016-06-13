<?php

namespace Commcloud\VoiceBundle\Entity;

/**
 * WorkerEventData
 */
class WorkerEventData
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $workersid;

    /**
     * @var string
     */
    private $workername;

    /**
     * @var string
     */
    private $workerattributes;

    /**
     * @var string
     */
    private $workeractivitysid;

    /**
     * @var string
     */
    private $workeractivityname;

    /**
     * @var int
     */
    private $workertimeinprevactivity;

    /**
     * @var string
     */
    private $workerprevactivitysid;


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
     * Set workersid
     *
     * @param string $workersid
     *
     * @return WorkerEventData
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
     * Set workername
     *
     * @param string $workername
     *
     * @return WorkerEventData
     */
    public function setWorkername($workername)
    {
        $this->workername = $workername;

        return $this;
    }

    /**
     * Get workername
     *
     * @return string
     */
    public function getWorkername()
    {
        return $this->workername;
    }

    /**
     * Set workerattributes
     *
     * @param string $workerattributes
     *
     * @return WorkerEventData
     */
    public function setWorkerattributes($workerattributes)
    {
        $this->workerattributes = $workerattributes;

        return $this;
    }

    /**
     * Get workerattributes
     *
     * @return string
     */
    public function getWorkerattributes()
    {
        return $this->workerattributes;
    }

    /**
     * Set workeractivitysid
     *
     * @param string $workeractivitysid
     *
     * @return WorkerEventData
     */
    public function setWorkeractivitysid($workeractivitysid)
    {
        $this->workeractivitysid = $workeractivitysid;

        return $this;
    }

    /**
     * Get workeractivitysid
     *
     * @return string
     */
    public function getWorkeractivitysid()
    {
        return $this->workeractivitysid;
    }

    /**
     * Set workeractivityname
     *
     * @param string $workeractivityname
     *
     * @return WorkerEventData
     */
    public function setWorkeractivityname($workeractivityname)
    {
        $this->workeractivityname = $workeractivityname;

        return $this;
    }

    /**
     * Get workeractivityname
     *
     * @return string
     */
    public function getWorkeractivityname()
    {
        return $this->workeractivityname;
    }

    /**
     * Set workertimeinprevactivity
     *
     * @param integer $workertimeinprevactivity
     *
     * @return WorkerEventData
     */
    public function setWorkertimeinprevactivity($workertimeinprevactivity)
    {
        $this->workertimeinprevactivity = $workertimeinprevactivity;

        return $this;
    }

    /**
     * Get workertimeinprevactivity
     *
     * @return int
     */
    public function getWorkertimeinprevactivity()
    {
        return $this->workertimeinprevactivity;
    }

    /**
     * Set workerprevactivitysid
     *
     * @param string $workerprevactivitysid
     *
     * @return WorkerEventData
     */
    public function setWorkerprevactivitysid($workerprevactivitysid)
    {
        $this->workerprevactivitysid = $workerprevactivitysid;

        return $this;
    }

    /**
     * Get workerprevactivitysid
     *
     * @return string
     */
    public function getWorkerprevactivitysid()
    {
        return $this->workerprevactivitysid;
    }
}

