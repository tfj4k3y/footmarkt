<?php


namespace App\Stats\Model;


class StatsRequest{
    private $appearances;
    private $goals;
    private $assists;
    private $pitch_time;

    /**
     * @return mixed
     */
    public function getAppearances()
    {
        return $this->appearances;
    }

    /**
     * @param mixed $appearances
     */
    public function setAppearances($appearances)
    {
        $this->appearances = $appearances;
    }

    /**
     * @return mixed
     */
    public function getGoals()
    {
        return $this->goals;
    }

    /**
     * @param mixed $goals
     */
    public function setGoals($goals)
    {
        $this->goals = $goals;
    }

    /**
     * @return mixed
     */
    public function getAssists()
    {
        return $this->assists;
    }

    /**
     * @param mixed $assists
     */
    public function setAssists($assists)
    {
        $this->assists = $assists;
    }

    /**
     * @return mixed
     */
    public function getPitchTime()
    {
        return $this->pitch_time;
    }

    /**
     * @param mixed $pitch_time
     */
    public function setPitchTime($pitch_time)
    {
        $this->pitch_time = $pitch_time;
    }


}