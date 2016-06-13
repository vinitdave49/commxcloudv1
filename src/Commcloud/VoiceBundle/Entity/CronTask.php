<?php

namespace Commcloud\VoiceBundle\Entity;

/**
 * CronTask
 */
class CronTask
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $description;

    /**
     * @var array
     */
    private $commands;

    /**
     * @var integer
     */
    private $intrvl;

    /**
     * @var \DateTime
     */
    private $lastrun;

    /**
     * @var \DateTime
     */
    private $nextrun;

    /**
     * @var string
     */
    private $lastrunstatus;

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
     * Set name
     *
     * @param string $name
     *
     * @return CronTask
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return CronTask
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * Set commands
     *
     * @param array $commands
     *
     * @return CronTask
     */
    public function setCommands($commands)
    {
        $this->commands = $commands;

        return $this;
    }

    /**
     * Get commands
     *
     * @return array
     */
    public function getCommands()
    {
        return $this->commands;
    }

    /**
     * Set intrvl
     *
     * @param integer $intrvl
     *
     * @return CronTask
     */
    public function setIntrvl($intrvl)
    {
        $this->intrvl = $intrvl;

        return $this;
    }

    /**
     * Get intrvl
     *
     * @return integer
     */
    public function getIntrvl()
    {
        return $this->intrvl;
    }

    /**
     * Set lastrun
     *
     * @param \DateTime $lastrun
     *
     * @return CronTask
     */
    public function setLastrun($lastrun)
    {
        $this->lastrun = $lastrun;

        return $this;
    }

    /**
     * Get lastrun
     *
     * @return \DateTime
     */
    public function getLastrun()
    {
        return $this->lastrun;
    }

    /**
     * Set nextrun
     *
     * @param \DateTime $nextrun
     *
     * @return CronTask
     */
    public function setNextrun($nextrun)
    {
        $this->nextrun = $nextrun;

        return $this;
    }

    /**
     * Get nextrun
     *
     * @return \DateTime
     */
    public function getNextrun()
    {
        return $this->nextrun;
    }

    /**
     * Set lastrunstatus
     *
     * @param string $lastrunstatus
     *
     * @return CronTask
     */
    public function setLastrunstatus($lastrunstatus)
    {
        $this->lastrunstatus = $lastrunstatus;

        return $this;
    }

    /**
     * Get lastrunstatus
     *
     * @return string
     */
    public function getLastrunstatus()
    {
        return $this->lastrunstatus;
    }
}
