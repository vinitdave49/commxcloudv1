<?php

namespace Commcloud\VoiceBundle\Entity;

/**
 * HtReservationData
 */
class HtReservationData
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
    private $resourceid;

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
    private $reservation_accepted;

    /**
     * @var integer
     */
    private $reservations_canceled;

    /**
     * @var integer
     */
    private $reservations_created;

    /**
     * @var integer
     */
    private $reservations_timed_out;

    /**
     * @var integer
     */
    private $reservations_rejected;

    /**
     * @var integer
     */
    private $reservations_rescinded;


    /**
     * Set resourceid
     *
     * @param string $resourceid
     *
     * @return HtReservationData
     */
    public function setResourceid($resourceid)
    {
        $this->resourceid = $resourceid;

        return $this;
    }

    /**
     * Get resourceid
     *
     * @return string
     */
    public function getResourceid()
    {
        return $this->resourceid;
    }

    /**
     * Set startTime
     *
     * @param \DateTime $startTime
     *
     * @return HtReservationData
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
     * @return HtReservationData
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
     * Set reservationAccepted
     *
     * @param integer $reservationAccepted
     *
     * @return HtReservationData
     */
    public function setReservationAccepted($reservationAccepted)
    {
        $this->reservation_accepted = $reservationAccepted;

        return $this;
    }

    /**
     * Get reservationAccepted
     *
     * @return integer
     */
    public function getReservationAccepted()
    {
        return $this->reservation_accepted;
    }

    /**
     * Set reservationsCanceled
     *
     * @param integer $reservationsCanceled
     *
     * @return HtReservationData
     */
    public function setReservationsCanceled($reservationsCanceled)
    {
        $this->reservations_canceled = $reservationsCanceled;

        return $this;
    }

    /**
     * Get reservationsCanceled
     *
     * @return integer
     */
    public function getReservationsCanceled()
    {
        return $this->reservations_canceled;
    }

    /**
     * Set reservationsCreated
     *
     * @param integer $reservationsCreated
     *
     * @return HtReservationData
     */
    public function setReservationsCreated($reservationsCreated)
    {
        $this->reservations_created = $reservationsCreated;

        return $this;
    }

    /**
     * Get reservationsCreated
     *
     * @return integer
     */
    public function getReservationsCreated()
    {
        return $this->reservations_created;
    }

    /**
     * Set reservationsTimedOut
     *
     * @param integer $reservationsTimedOut
     *
     * @return HtReservationData
     */
    public function setReservationsTimedOut($reservationsTimedOut)
    {
        $this->reservations_timed_out = $reservationsTimedOut;

        return $this;
    }

    /**
     * Get reservationsTimedOut
     *
     * @return integer
     */
    public function getReservationsTimedOut()
    {
        return $this->reservations_timed_out;
    }

    /**
     * Set reservationsRejected
     *
     * @param integer $reservationsRejected
     *
     * @return HtReservationData
     */
    public function setReservationsRejected($reservationsRejected)
    {
        $this->reservations_rejected = $reservationsRejected;

        return $this;
    }

    /**
     * Get reservationsRejected
     *
     * @return integer
     */
    public function getReservationsRejected()
    {
        return $this->reservations_rejected;
    }

    /**
     * Set reservationsRescinded
     *
     * @param integer $reservationsRescinded
     *
     * @return HtReservationData
     */
    public function setReservationsRescinded($reservationsRescinded)
    {
        $this->reservations_rescinded = $reservationsRescinded;

        return $this;
    }

    /**
     * Get reservationsRescinded
     *
     * @return integer
     */
    public function getReservationsRescinded()
    {
        return $this->reservations_rescinded;
    }
}
