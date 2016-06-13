<?php

namespace Commcloud\VoiceBundle\Entity;

/**
 * HtTaskqueueData
 */
class HtTaskqueueData
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
    private $taskqueuesid;

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
    private $task_entered;

    /**
     * @var integer
     */
    private $task_canceled;

    /**
     * @var integer
     */
    private $task_deleted;

    /**
     * @var integer
     */
    private $task_moved;

    /**
     * @var integer
     */
    private $avg_task_acceptance_time;


    /**
     * Set startTime
     *
     * @param \DateTime $startTime
     *
     * @return HtTaskqueueData
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
     * @return HtTaskqueueData
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
     * Set taskEntered
     *
     * @param integer $taskEntered
     *
     * @return HtTaskqueueData
     */
    public function setTaskEntered($taskEntered)
    {
        $this->task_entered = $taskEntered;

        return $this;
    }

    /**
     * Get taskEntered
     *
     * @return integer
     */
    public function getTaskEntered()
    {
        return $this->task_entered;
    }

    /**
     * Set taskCanceled
     *
     * @param integer $taskCanceled
     *
     * @return HtTaskqueueData
     */
    public function setTaskCanceled($taskCanceled)
    {
        $this->task_canceled = $taskCanceled;

        return $this;
    }

    /**
     * Get taskCanceled
     *
     * @return integer
     */
    public function getTaskCanceled()
    {
        return $this->task_canceled;
    }

    /**
     * Set taskDeleted
     *
     * @param integer $taskDeleted
     *
     * @return HtTaskqueueData
     */
    public function setTaskDeleted($taskDeleted)
    {
        $this->task_deleted = $taskDeleted;

        return $this;
    }

    /**
     * Get taskDeleted
     *
     * @return integer
     */
    public function getTaskDeleted()
    {
        return $this->task_deleted;
    }

    /**
     * Set taskMoved
     *
     * @param integer $taskMoved
     *
     * @return HtTaskqueueData
     */
    public function setTaskMoved($taskMoved)
    {
        $this->task_moved = $taskMoved;

        return $this;
    }

    /**
     * Get taskMoved
     *
     * @return integer
     */
    public function getTaskMoved()
    {
        return $this->task_moved;
    }

    /**
     * Set avgTaskAcceptanceTime
     *
     * @param integer $avgTaskAcceptanceTime
     *
     * @return HtTaskqueueData
     */
    public function setAvgTaskAcceptanceTime($avgTaskAcceptanceTime)
    {
        $this->avg_task_acceptance_time = $avgTaskAcceptanceTime;

        return $this;
    }

    /**
     * Get avgTaskAcceptanceTime
     *
     * @return integer
     */
    public function getAvgTaskAcceptanceTime()
    {
        return $this->avg_task_acceptance_time;
    }

    /**
     * Set taskqueuesid
     *
     * @param string $taskqueuesid
     *
     * @return HtTaskqueueData
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
}
