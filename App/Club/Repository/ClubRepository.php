<?php namespace App\Club\Repository;

use App\Database\DatabaseConnector;
use App\Database\Repository\Repository;
use App\Club\Entity\ClubEntity;
use PDO;

class ClubRepository extends Repository {

    protected function getEntityName() {
        return "App\Club\Entity\ClubEntity";
    }

    protected function getTableName() {
        return "club";
    }
}