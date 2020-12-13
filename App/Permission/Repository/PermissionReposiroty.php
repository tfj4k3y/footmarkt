<?php


class PermissionReposiroty extends Repository
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