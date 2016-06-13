<?php

namespace Commcloud\VoiceBundle\Entity;
/**
 * @ORM\Entity(repositoryClass="Commcloud\VoiceBundle\Repository\HtWorkeractdurationDataRepository")
 * /
/**
 * HtWorkeractdurationData
 */
class HtWorkeractdurationData
{
    /**
     * @var int
     */
    private $id;


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
     * @var string
     */
    private $workersid;

    /**
     * @var \DateTime
     */
    private $start_time;

    /**
     * @var \DateTime
     */
    private $end_time;

    /**
     * @var integer
     */
    private $task_assigned;

    /**
     * @var string
     */
    private $activitysid;

    /**
     * @var string
     */
    private $activityname;

    /**
     * @var integer
     */
    private $min_duration;

    /**
     * @var integer
     */
    private $max_duration;

    /**
     * @var integer
     */
    private $avg_duration;

    /**
     * @var integer
     */
    private $total_duration;


    /**
     * Set workersid
     *
     * @param string $workersid
     *
     * @return HtWorkeractdurationData
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
     * Set startTime
     *
     * @param \DateTime $startTime
     *
     * @return HtWorkeractdurationData
     */
    public function setStartTime($startTime)
    {
        $this->start_time = $startTime;

        return $this;
    }

    /**
     * Get startTime
     *
     * @return \DateTime
     */
    public function getStartTime()
    {
        return $this->start_time;
    }

    /**
     * Set endTime
     *
     * @param \DateTime $endTime
     *
     * @return HtWorkeractdurationData
     */
    public function setEndTime($endTime)
    {
        $this->end_time = $endTime;

        return $this;
    }

    /**
     * Get endTime
     *
     * @return \DateTime
     */
    public function getEndTime()
    {
        return $this->end_time;
    }

    /**
     * Set taskAssigned
     *
     * @param integer $taskAssigned
     *
     * @return HtWorkeractdurationData
     */
    public function setTaskAssigned($taskAssigned)
    {
        $this->task_assigned = $taskAssigned;

        return $this;
    }

    /**
     * Get taskAssigned
     *
     * @return integer
     */
    public function getTaskAssigned()
    {
        return $this->task_assigned;
    }

    /**
     * Set activitysid
     *
     * @param string $activitysid
     *
     * @return HtWorkeractdurationData
     */
    public function setActivitysid($activitysid)
    {
        $this->activitysid = $activitysid;

        return $this;
    }

    /**
     * Get activitysid
     *
     * @return string
     */
    public function getActivitysid()
    {
        return $this->activitysid;
    }

    /**
     * Set activityname
     *
     * @param string $activityname
     *
     * @return HtWorkeractdurationData
     */
    public function setActivityname($activityname)
    {
        $this->activityname = $activityname;

        return $this;
    }

    /**
     * Get activityname
     *
     * @return string
     */
    public function getActivityname()
    {
        return $this->activityname;
    }

    /**
     * Set minDuration
     *
     * @param integer $minDuration
     *
     * @return HtWorkeractdurationData
     */
    public function setMinDuration($minDuration)
    {
        $this->min_duration = $minDuration;

        return $this;
    }

    /**
     * Get minDuration
     *
     * @return integer
     */
    public function getMinDuration()
    {
        return $this->min_duration;
    }

    /**
     * Set maxDuration
     *
     * @param integer $maxDuration
     *
     * @return HtWorkeractdurationData
     */
    public function setMaxDuration($maxDuration)
    {
        $this->max_duration = $maxDuration;

        return $this;
    }

    /**
     * Get maxDuration
     *
     * @return integer
     */
    public function getMaxDuration()
    {
        return $this->max_duration;
    }

    /**
     * Set avgDuration
     *
     * @param integer $avgDuration
     *
     * @return HtWorkeractdurationData
     */
    public function setAvgDuration($avgDuration)
    {
        $this->avg_duration = $avgDuration;

        return $this;
    }

    /**
     * Get avgDuration
     *
     * @return integer
     */
    public function getAvgDuration()
    {
        return $this->avg_duration;
    }

    /**
     * Set totalDuration
     *
     * @param integer $totalDuration
     *
     * @return HtWorkeractdurationData
     */
    public function setTotalDuration($totalDuration)
    {
        $this->total_duration = $totalDuration;

        return $this;
    }

    /**
     * Get totalDuration
     *
     * @return integer
     */
    public function getTotalDuration()
    {
        return $this->total_duration;
    }
}
