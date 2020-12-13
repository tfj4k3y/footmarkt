<?php


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