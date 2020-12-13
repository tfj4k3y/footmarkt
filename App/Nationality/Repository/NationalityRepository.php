<?php namespace App\Nationality\Repository;
use App\Database\DatabaseConnector;
use App\Database\Repository\Repository;
use App\Nationality\Entity\NationalityEntity;
use PDO;
class StatsRepository extends Repository
{
    protected function getEntityName(){
        return "App\Nationality\Entity\NationalityEntity";
    }
    protected function getTableName(){
        return "nationality";
    }

}