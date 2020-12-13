<?php namespace App\Player\Repository;


use App\Database\DatabaseConnector;
use App\Database\Repository\Repository;
use App\Player\Entity\PlayerEntity;
use PDO;

class PlayerRepository extends Repository {

    protected function getEntityName() {
        return "App\Player\Entity\PlayerEntity";
    }

    protected function getTableName() {
        return "player";
    }
}