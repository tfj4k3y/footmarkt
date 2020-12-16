<?php namespace App\Group\Repository;

use App\Database\DatabaseConnector;
use App\Database\Repository\Repository;
use App\Group\Entity\GroupEntity;
use PDO;

class GroupRepository extends Repository
{

    protected function getEntityName()
    {
        return "App\Group\Entity\GroupEntity";
    }

    protected function getTableName()
    {
        return "group";
    }
}