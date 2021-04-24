<?php namespace App\Nationality\Repository;
use App\Database\DatabaseConnector;
use App\Database\Repository\Repository;
use App\Nationality\Entity\NationalityEntity;
use PDO;
class NationalityRepository extends Repository
{
    protected function getEntityName(){
        return "App\Nationality\Entity\NationalityEntity";
    }
    protected function getTableName(){
        return "nationality";
    }

    public function isNationalityExists($id): string
    {
        return "isNationalityExist: ".$id;
    }

}