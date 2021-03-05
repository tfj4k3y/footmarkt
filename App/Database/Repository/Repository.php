<?php

namespace App\Database\Repository;

use App\Database\DatabaseConnector;
use App\Database\Entity\Entity;
use App\Helpers\ReflectionUtils;
use PDO;

abstract class Repository {

    protected $databaseConnection;

    public function __construct() {
        $this->databaseConnection = DatabaseConnector::getInstance();
        $this->databaseConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    }

    public function getById($id) {
        $query = $this->prepare("SELECT * FROM " . $this->getTableName() . " WHERE id=:id");

        $query->execute(array(
            ":id" => $id
        ));

        return $query->fetch();
    }

    public function save(Entity $object) {

        $result = null;

        if (empty($object->getId())) {
            $result = $this->performSave($object);
        } else {
            $result = $this->performUpdate($object);
        }

        return $result;
    }

    protected function prepare($statement) {
        $query = $this->databaseConnection->prepare($statement);
        $query->setFetchMode(PDO::FETCH_CLASS, $this->getEntityName());

        return $query;
    }

    protected abstract function getEntityName();

    protected abstract function getTableName();

    private function performSave(Entity $entity) {

        $fields = ReflectionUtils::getObjectPrivateFields($entity);

        $fields = self::removeNullValuesFromAssoc($fields);

        $fieldNamesString = implode(", ", array_keys($fields));

        $fieldPlaceholders = self::addPrefixToArrayKeys($fields, ":");
        $fieldPlaceholdersString = join(", ", array_keys($fieldPlaceholders));

        $sql = "INSERT INTO " . $this->getTableName() . "($fieldNamesString) VALUES ($fieldPlaceholdersString)";
        $stmt = $this->databaseConnection->prepare($sql);

        foreach ($fieldPlaceholders as $key => $value) {
            if (is_string($value)) {
                $stmt->bindValue($key, $value, PDO::PARAM_STR);
            } else {
                $stmt->bindValue($key, $value);
            }
        }

        try {
            $stmt->execute();
        } catch (\PDOException $e) {
            return null;
        }

        return $this->getById($this->databaseConnection->lastInsertId());
    }

    private static function addPrefixToArrayKeys($array, $prefix) {
        $resultArray = array();

        foreach ($array as $key => $value) {
            $resultArray[$prefix . $key] = $value;
        }

        return $resultArray;
    }

    private static function removeNullValuesFromAssoc($array) {

        return array_filter($array, function ($value) {
            return $value != null && $value != "";
        });
    }
}