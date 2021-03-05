<?php


namespace App\User\Model;


class Token
{
private $token;


    public function __construct($token=null)
    {
        $this->token = $token;
    }


    public function getToken()
    {
        return $this->token;
    }


    public function setToken(string $token): Token {
        $this->token = $token;
        return $this;
    }


}