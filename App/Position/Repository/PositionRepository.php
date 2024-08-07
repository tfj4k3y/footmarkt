<?php namespace App\Position\Repository;
use App\Database\DatabaseConnector;
use App\Database\Repository\Repository;
use App\Position\Entity\PositionEntity;
use PDO;
class PositionRepository extends Repository
{
    protected function getEntityName(){
        return "App\Position\Entity\PositionEntity";
    }
    protected function getTableName(){
        return "position";
    }

    public function isPositionExists($id): string
    {
        return "isPositionExist: ".$id;
    }

}