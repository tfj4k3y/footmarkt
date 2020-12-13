<?php namespace App\Club\Entity;

use App\Database\Entity\Entity;

class ClubEntity extends Entity
{
   private $id;
   private $name;
   private $league_id;
   private $created_at;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getLeagueId()
    {
        return $this->league_id;
    }

    /**
     * @param mixed $league_id
     */
    public function setLeagueId($league_id)
    {
        $this->league_id = $league_id;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * @param mixed $created_at
     */
    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;
    }

}