<?php

namespace Commcloud\VoiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WActivity
 *
 * @ORM\Table(name="w_activity")
 * @ORM\Entity
 */
class WActivity
{
    /**
     * @var string
     *
     * @ORM\Column(name="account_sid", type="string", length=50, nullable=false)
     */
    private $accountSid="AC0f18494502dee91457252ff7b2bada6a";

    /**
     * @var string
     *
     * @ORM\Column(name="workspace_sid", type="string", length=50, nullable=false)
     */
    private $workspaceSid="WSce7860a1dd3d977493b7e15bead4e320";

    /**
     * @var string
     *
     * @ORM\Column(name="friendly_name", type="string", length=50, nullable=false)
     */
    private $friendlyName;

    /**
     * @var integer
     *
     * @ORM\Column(name="available", type="integer", nullable=true)
     */
    //private $available = '0';
    private $available;

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
     */
    private $sid;
    
    /**
     * Set sid
     *
     * @param string $sid
     *
     * @return WActivity
     */
    public function setSid($sid)
    {
        //echo "this is new activity".$sid;
        $this->sid = $sid;
        
        return $this;
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
     * Set friendlyName
     *
     * @param string $friendlyName
     *
     * @return WActivity
     */
    public function setFriendlyName($friendlyName)
    {
        $this->friendlyName = $friendlyName;

        return $this;
    }

    /**
     * Get $friendlyName
     *
     * @return string
     */
    public function getFriendlyName()
    {
        return $this->friendlyName;
    }
    
    /**
     * Set available
     *
     * @param integer $available
     *
     * @return WActivity
     */
    public function setAvailable($available)
    {
        $this->available = $available;

        return $this;
    }

    /**
     * Get $available
     *
     * @return integer
     */
    public function getAvailable()
    {
        return $this->available;
    }

    /**
     * Set accountSid
     *
     * @param string $accountSid
     *
     * @return WActivity
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
     * @return WActivity
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
     * Set status
     *
     * @param integer $status
     *
     * @return WActivity
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
     * @var string
     */
    private $activitySid;


    /**
     * Set activitySid
     *
     * @param string $activitySid
     *
     * @return WActivity
     */
    public function setActivitySid($activitySid)
    {
        $this->activitySid = $activitySid;

        return $this;
    }

    /**
     * Get activitySid
     *
     * @return string
     */
    public function getActivitySid()
    {
        return $this->activitySid;
    }
}
