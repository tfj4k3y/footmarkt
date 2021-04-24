<?php namespace App\League\Repository;

use App\Database\DatabaseConnector;
use App\Database\Repository\Repository;
use App\League\Entity\LeagueEntity;
use PDO;

class LeagueRepository extends Repository {

    protected function getEntityName() {
        return "App\League\Entity\LeagueEntity";
    }

    protected function getTableName() {
        return "league";
    }
    public function isLeagueExists($id): string
    {
        return "isLeagueExist: ".$id;
    }
}