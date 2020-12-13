<?php


class PlayerEntity
{
    private $id;
    private $name;
    private $surname;
    private $birth;
    private $position_id;
    private $nationality_id;
    private $club_id;
    private $value;
    private $rate;
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
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * @param mixed $surname
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;
    }

    /**
     * @return mixed
     */
    public function getBirth()
    {
        return $this->birth;
    }

    /**
     * @param mixed $birth
     */
    public function setBirth($birth)
    {
        $this->birth = $birth;
    }

    /**
     * @return mixed
     */
    public function getPositionId()
    {
        return $this->position_id;
    }

    /**
     * @param mixed $position_id
     */
    public function setPositionId($position_id)
    {
        $this->position_id = $position_id;
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
    public function getClubId()
    {
        return $this->club_id;
    }

    /**
     * @param mixed $club_id
     */
    public function setClubId($club_id)
    {
        $this->club_id = $club_id;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param mixed $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * @return mixed
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * @param mixed $rate
     */
    public function setRate($rate)
    {
        $this->rate = $rate;
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