<?php namespace App\Configuration;

class ConnectionConfiguration {

    private $dbn = "mysql:host=localhost;dbname=footmarkt";
    private $username = "root";
    private $password = "";

    public function getDbn() {
        return $this->dbn;
    }

    public function getUsername() {
        return $this->username;
    }

    public function getPassword() {
        return $this->password;
    }
}