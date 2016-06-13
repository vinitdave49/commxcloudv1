<?php

namespace Commcloud\VoiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WWorkflows
 *
 * @ORM\Table(name="w_workflows")
 * @ORM\Entity
 */
class WWorkflows
{
    /**
     * @var string
     *
     * @ORM\Column(name="friendly_name", type="string", length=50, nullable=false)
     */
    private $friendlyName;

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
     * @ORM\Column(name="assignment_callback_url", type="string", length=100, nullable=false)
     */
    private $assignmentCallbackUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="fallback_assignment_callback_url", type="string", length=100, nullable=false)
     */
    private $fallbackAssignmentCallbackUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="configuration", type="string", length=500, nullable=false)
     */
    private $configuration;

    /**
     * @var integer
     *
     * @ORM\Column(name="task_reservation_timeout", type="integer", nullable=false)
     */
    private $taskReservationTimeout = '120';

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
     * Set friendlyName
     *
     * @param string $friendlyName
     *
     * @return WWorkflows
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
     * Set accountSid
     *
     * @param string $accountSid
     *
     * @return WWorkflows
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
     * @return WWorkflows
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
     * Set assignmentCallbackUrl
     *
     * @param string $assignmentCallbackUrl
     *
     * @return WWorkflows
     */
    public function setAssignmentCallbackUrl($assignmentCallbackUrl)
    {
        $this->assignmentCallbackUrl = $assignmentCallbackUrl;

        return $this;
    }

    /**
     * Get assignmentCallbackUrl
     *
     * @return string
     */
    public function getAssignmentCallbackUrl()
    {
        return $this->assignmentCallbackUrl;
    }

    /**
     * Set fallbackAssignmentCallbackUrl
     *
     * @param string $fallbackAssignmentCallbackUrl
     *
     * @return WWorkflows
     */
    public function setFallbackAssignmentCallbackUrl($fallbackAssignmentCallbackUrl)
    {
        $this->fallbackAssignmentCallbackUrl = $fallbackAssignmentCallbackUrl;

        return $this;
    }

    /**
     * Get fallbackAssignmentCallbackUrl
     *
     * @return string
     */
    public function getFallbackAssignmentCallbackUrl()
    {
        return $this->fallbackAssignmentCallbackUrl;
    }

    /**
     * Set configuration
     *
     * @param string $configuration
     *
     * @return WWorkflows
     */
    public function setConfiguration($configuration)
    {
        $this->configuration = $configuration;

        return $this;
    }

    /**
     * Get configuration
     *
     * @return string
     */
    public function getConfiguration()
    {
        return $this->configuration;
    }

    /**
     * Set taskReservationTimeout
     *
     * @param integer $taskReservationTimeout
     *
     * @return WWorkflows
     */
    public function setTaskReservationTimeout($taskReservationTimeout)
    {
        $this->taskReservationTimeout = $taskReservationTimeout;

        return $this;
    }

    /**
     * Get taskReservationTimeout
     *
     * @return integer
     */
    public function getTaskReservationTimeout()
    {
        return $this->taskReservationTimeout;
    }

    /**
     * Set dateCreated
     *
     * @param \DateTime $dateCreated
     *
     * @return WWorkflows
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
     * @return WWorkflows
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
     * @return WWorkflows
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
    private $workflowSid;


    /**
     * Set workflowSid
     *
     * @param string $workflowSid
     *
     * @return WWorkflows
     */
    public function setWorkflowSid($workflowSid)
    {
        $this->workflowSid = $workflowSid;

        return $this;
    }

    /**
     * Get workflowSid
     *
     * @return string
     */
    public function getWorkflowSid()
    {
        return $this->workflowSid;
    }
}
