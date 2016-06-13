<?php

namespace Commcloud\VoiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WWorkspaces
 *
 * @ORM\Table(name="w_workspaces")
 * @ORM\Entity
 */
class WWorkspaces
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
     * @ORM\Column(name="friendly_name", type="string", length=50, nullable=false)
     */
    private $friendlyName;

    /**
     * @var string
     *
     * @ORM\Column(name="event_callback_url", type="string", length=500, nullable=false)
     */
    private $eventCallbackUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="default_activity_sid", type="string", length=50, nullable=false)
     */
    private $defaultActivitySid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_created", type="datetime", nullable=false)
     */
    private $dateCreated;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_updated", type="datetime", nullable=false)
     */
    private $dateUpdated;

    /**
     * @var string
     *
     * @ORM\Column(name="default_activity_name", type="string", length=50, nullable=false)
     */
    private $defaultActivityName;

    /**
     * @var string
     *
     * @ORM\Column(name="timeout_activity_sid", type="string", length=50, nullable=false)
     */
    private $timeoutActivitySid;

    /**
     * @var string
     *
     * @ORM\Column(name="timeout_activity_name", type="string", length=50, nullable=false)
     */
    private $timeoutActivityName;

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
     * @return WWorkspaces
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
     * Set friendlyName
     *
     * @param string $friendlyName
     *
     * @return WWorkspaces
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
     * Set eventCallbackUrl
     *
     * @param string $eventCallbackUrl
     *
     * @return WWorkspaces
     */
    public function setEventCallbackUrl($eventCallbackUrl)
    {
        $this->eventCallbackUrl = $eventCallbackUrl;

        return $this;
    }

    /**
     * Get eventCallbackUrl
     *
     * @return string
     */
    public function getEventCallbackUrl()
    {
        return $this->eventCallbackUrl;
    }

    /**
     * Set defaultActivitySid
     *
     * @param string $defaultActivitySid
     *
     * @return WWorkspaces
     */
    public function setDefaultActivitySid($defaultActivitySid)
    {
        $this->defaultActivitySid = $defaultActivitySid;

        return $this;
    }

    /**
     * Get defaultActivitySid
     *
     * @return string
     */
    public function getDefaultActivitySid()
    {
        return $this->defaultActivitySid;
    }

    /**
     * Set dateCreated
     *
     * @param \DateTime $dateCreated
     *
     * @return WWorkspaces
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
     * @return WWorkspaces
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
     * Set defaultActivityName
     *
     * @param string $defaultActivityName
     *
     * @return WWorkspaces
     */
    public function setDefaultActivityName($defaultActivityName)
    {
        $this->defaultActivityName = $defaultActivityName;

        return $this;
    }

    /**
     * Get defaultActivityName
     *
     * @return string
     */
    public function getDefaultActivityName()
    {
        return $this->defaultActivityName;
    }

    /**
     * Set timeoutActivitySid
     *
     * @param string $timeoutActivitySid
     *
     * @return WWorkspaces
     */
    public function setTimeoutActivitySid($timeoutActivitySid)
    {
        $this->timeoutActivitySid = $timeoutActivitySid;

        return $this;
    }

    /**
     * Get timeoutActivitySid
     *
     * @return string
     */
    public function getTimeoutActivitySid()
    {
        return $this->timeoutActivitySid;
    }

    /**
     * Set timeoutActivityName
     *
     * @param string $timeoutActivityName
     *
     * @return WWorkspaces
     */
    public function setTimeoutActivityName($timeoutActivityName)
    {
        $this->timeoutActivityName = $timeoutActivityName;

        return $this;
    }

    /**
     * Get timeoutActivityName
     *
     * @return string
     */
    public function getTimeoutActivityName()
    {
        return $this->timeoutActivityName;
    }

    /**
     * Set status
     *
     * @param integer $status
     *
     * @return WWorkspaces
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
    private $workspaceSid;


    /**
     * Set workspaceSid
     *
     * @param string $workspaceSid
     *
     * @return WWorkspaces
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
}
