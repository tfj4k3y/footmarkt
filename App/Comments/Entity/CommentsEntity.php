<?php namespace App\Comments\Entity;

use App\Database\Entity\Entity;

class CommentsEntity extends Entity
{
    private $id;
    private $title;
    private $content;
    private $user_id;
    private $player_id;
    private $created_at;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function setContent($content)
    {
        $this->content = $content;
    }

    public function getUserId()
    {
        return $this->user_id;
    }

    public function setUserId($user_id)
    {
        $this->user_id = $user_id;
    }

    public function getPlayerId()
    {
        return $this->player_id;
    }

    public function setPlayerId($player_id)
    {
        $this->player_id = $player_id;
    }

    public function getCreatedAt()
    {
        return $this->created_at;
    }

    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;
    }



}