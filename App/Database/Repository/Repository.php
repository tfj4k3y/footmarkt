<?php


abstract class Repository
{
    protected abstract function getEntityName();

    protected abstract function getTableName();
}