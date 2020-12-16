<?php namespace App\Comments\Repository;

use App\Database\DatabaseConnector;
use App\Database\Repository\Repository;
use App\Comments\Entity\CommentsEntity;
use PDO;

class CommentsRepository extends Repository
{

    protected function getEntityName()
    {
        return "App\Comments\Entity\CommentsEntity";
    }

    protected function getTableName()
    {
        return "comments";
    }
}