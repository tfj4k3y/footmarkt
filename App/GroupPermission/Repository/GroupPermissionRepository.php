<?php namespace App\GroupPermission\Repository;

use App\Database\DatabaseConnector;
use App\Database\Repository\Repository;
use App\GroupPermission\Entity\GroupPermissionEntity;
use PDO;

class GroupPermissionRepository extends Repository
{

    protected function getEntityName()
    {
        return "App/GroupPermission/Entity/GroupPermissionEntity";
    }

    protected function getTableName()
    {
        return "group_permission";
    }
}