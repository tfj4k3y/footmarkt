<?php


namespace App\Player\Model;


class PlayerModel {

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
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of surname
     */ 
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Set the value of surname
     *
     * @return  self
     */ 
    public function setSurname($surname)
    {
        $this->surname = $surname;

        return $this;
    }

    /**
     * Get the value of birth
     */ 
    public function getBirth()
    {
        return $this->birth;
    }

    /**
     * Set the value of birth
     *
     * @return  self
     */ 
    public function setBirth($birth)
    {
        $this->birth = $birth;

        return $this;
    }

    /**
     * Get the value of position_id
     */ 
    public function getPosition_id()
    {
        return $this->position_id;
    }

    /**
     * Set the value of position_id
     *
     * @return  self
     */ 
    public function setPosition_id($position_id)
    {
        $this->position_id = $position_id;

        return $this;
    }

    /**
     * Get the value of nationality_id
     */ 
    public function getNationality_id()
    {
        return $this->nationality_id;
    }

    /**
     * Set the value of nationality_id
     *
     * @return  self
     */ 
    public function setNationality_id($nationality_id)
    {
        $this->nationality_id = $nationality_id;

        return $this;
    }

    /**
     * Get the value of club_id
     */ 
    public function getClub_id()
    {
        return $this->club_id;
    }

    /**
     * Set the value of club_id
     *
     * @return  self
     */ 
    public function setClub_id($club_id)
    {
        $this->club_id = $club_id;

        return $this;
    }

    /**
     * Get the value of value
     */ 
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set the value of value
     *
     * @return  self
     */ 
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get the value of rate
     */ 
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * Set the value of rate
     *
     * @return  self
     */ 
    public function setRate($rate)
    {
        $this->rate = $rate;

        return $this;
    }

    /**
     * Get the value of created_at
     */ 
    public function getCreated_at()
    {
        return $this->created_at;
    }

    /**
     * Set the value of created_at
     *
     * @return  self
     */ 
    public function setCreated_at($created_at)
    {
        $this->created_at = $created_at;

        return $this;
    }
}