<?php

namespace App\Database\Repository;

use App\Database\DatabaseConnector;
use App\Database\Entity\Entity;
use PDO;

abstract class Repository
{
    protected abstract function getEntityName();

    protected abstract function getTableName();
}