<?php

namespace Commcloud\VoiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WTaskqueues
 *
 * @ORM\Table(name="w_taskqueues")
 * @ORM\Entity
 */
class WTaskqueues
{
    /**
     * @var string
     *
     * @ORM\Column(name="account_sid", type="string", length=50, nullable=false)
     */
    private $accountSid;

    /**
     * @var string
     *
     * @ORM\Column(name="workspace_sid", type="string", length=50, nullable=false)
     */
    private $workspaceSid;

    /**
     * @var string
     *
     * @ORM\Column(name="friendly_name", type="string", length=50, nullable=false)
     */
    private $friendlyName;

    /**
     * @var string
     *
     * @ORM\Column(name="target_workers", type="string", length=100, nullable=false)
     */
    private $targetWorkers;

    /**
     * @var integer
     *
     * @ORM\Column(name="max_reserved_workers", type="integer", nullable=false)
     */
    private $maxReservedWorkers = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="reservation_activity_sid", type="string", length=50, nullable=false)
     */
    private $reservationActivitySid;

    /**
     * @var string
     *
     * @ORM\Column(name="reservation_activity_name", type="string", length=50, nullable=false)
     */
    private $reservationActivityName;

    /**
     * @var string
     *
     * @ORM\Column(name="assignment_activity_sid", type="string", length=50, nullable=false)
     */
    private $assignmentActivitySid;

    /**
     * @var string
     *
     * @ORM\Column(name="assignment_activity_name", type="string", length=50, nullable=false)
     */
    private $assignmentActivityName;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_created", type="datetime", nullable=true)
     */
    private $dateCreated;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_updated", type="datetime", nullable=true)
     */
    private $dateUpdated;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="sid", type="string", length=50)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $sid;



    /**
     * Set accountSid
     *
     * @param string $accountSid
     *
     * @return WTaskqueues
     */
    public function setAccountSid($accountSid)
    {
        $this->accountSid = $accountSid;

        return $this;
    }

    /**
     * Get accountSid
     *
     * @return string
     */
    public function getAccountSid()
    {
        return $this->accountSid;
    }

    /**
     * Set workspaceSid
     *
     * @param string $workspaceSid
     *
     * @return WTaskqueues
     */
    public function setWorkspaceSid($workspaceSid)
    {
        $this->workspaceSid = $workspaceSid;

        return $this;
    }

    /**
     * Get workspaceSid
     *
     * @return string
     */
    public function getWorkspaceSid()
    {
        return $this->workspaceSid;
    }

    /**
     * Set friendlyName
     *
     * @param string $friendlyName
     *
     * @return WTaskqueues
     */
    public function setFriendlyName($friendlyName)
    {
        $this->friendlyName = $friendlyName;

        return $this;
    }

    /**
     * Get friendlyName
     *
     * @return string
     */
    public function getFriendlyName()
    {
        return $this->friendlyName;
    }

    /**
     * Set targetWorkers
     *
     * @param string $targetWorkers
     *
     * @return WTaskqueues
     */
    public function setTargetWorkers($targetWorkers)
    {
        $this->targetWorkers = $targetWorkers;

        return $this;
    }

    /**
     * Get targetWorkers
     *
     * @return string
     */
    public function getTargetWorkers()
    {
        return $this->targetWorkers;
    }

    /**
     * Set maxReservedWorkers
     *
     * @param integer $maxReservedWorkers
     *
     * @return WTaskqueues
     */
    public function setMaxReservedWorkers($maxReservedWorkers)
    {
        $this->maxReservedWorkers = $maxReservedWorkers;

        return $this;
    }

    /**
     * Get maxReservedWorkers
     *
     * @return integer
     */
    public function getMaxReservedWorkers()
    {
        return $this->maxReservedWorkers;
    }

    /**
     * Set reservationActivitySid
     *
     * @param string $reservationActivitySid
     *
     * @return WTaskqueues
     */
    public function setReservationActivitySid($reservationActivitySid)
    {
        $this->reservationActivitySid = $reservationActivitySid;

        return $this;
    }

    /**
     * Get reservationActivitySid
     *
     * @return string
     */
    public function getReservationActivitySid()
    {
        return $this->reservationActivitySid;
    }

    /**
     * Set reservationActivityName
     *
     * @param string $reservationActivityName
     *
     * @return WTaskqueues
     */
    public function setReservationActivityName($reservationActivityName)
    {
        $this->reservationActivityName = $reservationActivityName;

        return $this;
    }

    /**
     * Get reservationActivityName
     *
     * @return string
     */
    public function getReservationActivityName()
    {
        return $this->reservationActivityName;
    }

    /**
     * Set assignmentActivitySid
     *
     * @param string $assignmentActivitySid
     *
     * @return WTaskqueues
     */
    public function setAssignmentActivitySid($assignmentActivitySid)
    {
        $this->assignmentActivitySid = $assignmentActivitySid;

        return $this;
    }

    /**
     * Get assignmentActivitySid
     *
     * @return string
     */
    public function getAssignmentActivitySid()
    {
        return $this->assignmentActivitySid;
    }

    /**
     * Set assignmentActivityName
     *
     * @param string $assignmentActivityName
     *
     * @return WTaskqueues
     */
    public function setAssignmentActivityName($assignmentActivityName)
    {
        $this->assignmentActivityName = $assignmentActivityName;

        return $this;
    }

    /**
     * Get assignmentActivityName
     *
     * @return string
     */
    public function getAssignmentActivityName()
    {
        return $this->assignmentActivityName;
    }

    /**
     * Set dateCreated
     *
     * @param \DateTime $dateCreated
     *
     * @return WTaskqueues
     */
    public function setDateCreated($dateCreated)
    {
        $this->dateCreated = $dateCreated;

        return $this;
    }

    /**
     * Get dateCreated
     *
     * @return \DateTime
     */
    public function getDateCreated()
    {
        return $this->dateCreated;
    }

    /**
     * Set dateUpdated
     *
     * @param \DateTime $dateUpdated
     *
     * @return WTaskqueues
     */
    public function setDateUpdated($dateUpdated)
    {
        $this->dateUpdated = $dateUpdated;

        return $this;
    }

    /**
     * Get dateUpdated
     *
     * @return \DateTime
     */
    public function getDateUpdated()
    {
        return $this->dateUpdated;
    }

    /**
     * Set status
     *
     * @param integer $status
     *
     * @return WTaskqueues
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Get sid
     *
     * @return string
     */
    public function getSid()
    {
        return $this->sid;
    }
    /**
     * @var string
     */
    private $taskqueueSid;


    /**
     * Set taskqueueSid
     *
     * @param string $taskqueueSid
     *
     * @return WTaskqueues
     */
    public function setTaskqueueSid($taskqueueSid)
    {
        $this->taskqueueSid = $taskqueueSid;

        return $this;
    }

    /**
     * Get taskqueueSid
     *
     * @return string
     */
    public function getTaskqueueSid()
    {
        return $this->taskqueueSid;
    }
}
