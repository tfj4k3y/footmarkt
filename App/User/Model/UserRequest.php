<?php


namespace App\User\Model;


class UserRequest
{
    private $login;

    /**
     * @return mixed
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @param mixed $login
     */
    public function setLogin($login)
    {
        $this->login = $login;
    }
    private $password;



    public function getPassword() {
        return $this->password;
    }

    public function setPassword($password) {
        $this->password = $password;
        return $this;
    }
}