<?php namespace App\Stats\Repository;
use App\Database\DatabaseConnector;
use App\Database\Repository\Repository;
use App\Stats\Entity\StatsEntity;
use PDO;
class StatsRepository extends Repository
{
    protected function getEntityName(){
        return "App\Stats\Entity\StatsEntity";
    }
    protected function getTableName(){
        return "stats";
    }

}