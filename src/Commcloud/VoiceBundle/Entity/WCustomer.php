<?php

namespace Commcloud\VoiceBundle\Entity;

/**
 * WCustomer
 */
class WCustomer
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $userid;

    /**
     * @var string
     */
    private $voiceprintid;

    /**
     * @var string
     */
    private $trained;

    /**
     * @var string
     */
    private $fullname;

    /**
     * @var string
     */
    private $phonenumber;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $balance;


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
     * Set userid
     *
     * @param string $userid
     *
     * @return WCustomer
     */
    public function setUserid($userid)
    {
        $this->userid = $userid;

        return $this;
    }

    /**
     * Get userid
     *
     * @return string
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * Set voiceprintid
     *
     * @param string $voiceprintid
     *
     * @return WCustomer
     */
    public function setVoiceprintid($voiceprintid)
    {
        $this->voiceprintid = $voiceprintid;

        return $this;
    }

    /**
     * Get voiceprintid
     *
     * @return string
     */
    public function getVoiceprintid()
    {
        return $this->voiceprintid;
    }

    /**
     * Set trained
     *
     * @param string $trained
     *
     * @return WCustomer
     */
    public function setTrained($trained)
    {
        $this->trained = $trained;

        return $this;
    }

    /**
     * Get trained
     *
     * @return string
     */
    public function getTrained()
    {
        return $this->trained;
    }

    /**
     * Set fullname
     *
     * @param string $fullname
     *
     * @return WCustomer
     */
    public function setFullname($fullname)
    {
        $this->fullname = $fullname;

        return $this;
    }

    /**
     * Get fullname
     *
     * @return string
     */
    public function getFullname()
    {
        return $this->fullname;
    }

    /**
     * Set phonenumber
     *
     * @param string $phonenumber
     *
     * @return WCustomer
     */
    public function setPhonenumber($phonenumber)
    {
        $this->phonenumber = $phonenumber;

        return $this;
    }

    /**
     * Get phonenumber
     *
     * @return string
     */
    public function getPhonenumber()
    {
        return $this->phonenumber;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return WCustomer
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set balance
     *
     * @param string $balance
     *
     * @return WCustomer
     */
    public function setBalance($balance)
    {
        $this->balance = $balance;

        return $this;
    }

    /**
     * Get balance
     *
     * @return string
     */
    public function getBalance()
    {
        return $this->balance;
    }
}

