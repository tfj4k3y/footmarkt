<?php


class GroupPermissionRepository extends Repository
{

    protected function getEntityName()
    {
        return "App/Group_permission/Entity/GroupPermissionEntity";
    }

    protected function getTableName()
    {
        return "group_permission";
    }
}