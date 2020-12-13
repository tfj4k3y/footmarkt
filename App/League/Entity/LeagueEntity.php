<?php namespace App\League\Entity;

use App\Database\Entity\Entity;

class LeagueEntity extends Entity
{
    private $id;
    private $name;
    private $nationality_id;
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
    public function getNationalityId()
    {
        return $this->nationality_id;
    }

    /**
     * @param mixed $nationality_id
     */
    public function setNationalityId($nationality_id)
    {
        $this->nationality_id = $nationality_id;
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