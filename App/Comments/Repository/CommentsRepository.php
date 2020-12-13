<?php


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