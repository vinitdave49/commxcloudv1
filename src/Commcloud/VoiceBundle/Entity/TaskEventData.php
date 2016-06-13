<?php

namespace Commcloud\VoiceBundle\Entity;

/**
 * TaskEventData
 */
class TaskEventData
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $tasksid;

    /**
     * @var string
     */
    private $taskattributes;

    /**
     * @var int
     */
    private $taskage;

    /**
     * @var int
     */
    private $taskpriority;

    /**
     * @var string
     */
    private $taskassignmentstatus;

    /**
     * @var string
     */
    private $taskcancelledreason;

    /**
     * @var string
     */
    private $taskcompletedreason;


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
     * Set tasksid
     *
     * @param string $tasksid
     *
     * @return TaskEventData
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

    /**
     * Set taskattributes
     *
     * @param string $taskattributes
     *
     * @return TaskEventData
     */
    public function setTaskattributes($taskattributes)
    {
        $this->taskattributes = $taskattributes;

        return $this;
    }

    /**
     * Get taskattributes
     *
     * @return string
     */
    public function getTaskattributes()
    {
        return $this->taskattributes;
    }

    /**
     * Set taskage
     *
     * @param integer $taskage
     *
     * @return TaskEventData
     */
    public function setTaskage($taskage)
    {
        $this->taskage = $taskage;

        return $this;
    }

    /**
     * Get taskage
     *
     * @return int
     */
    public function getTaskage()
    {
        return $this->taskage;
    }

    /**
     * Set taskpriority
     *
     * @param integer $taskpriority
     *
     * @return TaskEventData
     */
    public function setTaskpriority($taskpriority)
    {
        $this->taskpriority = $taskpriority;

        return $this;
    }

    /**
     * Get taskpriority
     *
     * @return int
     */
    public function getTaskpriority()
    {
        return $this->taskpriority;
    }

    /**
     * Set taskassignmentstatus
     *
     * @param string $taskassignmentstatus
     *
     * @return TaskEventData
     */
    public function setTaskassignmentstatus($taskassignmentstatus)
    {
        $this->taskassignmentstatus = $taskassignmentstatus;

        return $this;
    }

    /**
     * Get taskassignmentstatus
     *
     * @return string
     */
    public function getTaskassignmentstatus()
    {
        return $this->taskassignmentstatus;
    }

    /**
     * Set taskcancelledreason
     *
     * @param string $taskcancelledreason
     *
     * @return TaskEventData
     */
    public function setTaskcancelledreason($taskcancelledreason)
    {
        $this->taskcancelledreason = $taskcancelledreason;

        return $this;
    }

    /**
     * Get taskcancelledreason
     *
     * @return string
     */
    public function getTaskcancelledreason()
    {
        return $this->taskcancelledreason;
    }

    /**
     * Set taskcompletedreason
     *
     * @param string $taskcompletedreason
     *
     * @return TaskEventData
     */
    public function setTaskcompletedreason($taskcompletedreason)
    {
        $this->taskcompletedreason = $taskcompletedreason;

        return $this;
    }

    /**
     * Get taskcompletedreason
     *
     * @return string
     */
    public function getTaskcompletedreason()
    {
        return $this->taskcompletedreason;
    }
}

