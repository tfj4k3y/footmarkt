<?php namespace App\Permission\Repository;

use App\Database\DatabaseConnector;
use App\Database\Repository\Repository;
use App\Permission\Entity\PermissionEntity;
use PDO;

class PermissionRepository extends Repository
{

    protected function getEntityName()
    {
        return "App/Permission/Entity/PermissionEntity";
    }

    protected function getTableName()
    {
        return "permission";
    }
}