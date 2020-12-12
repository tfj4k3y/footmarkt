<?php namespace App\Database;

use App\Configuration\ConnectionConfiguration;
use PDO;

class DatabaseConnector {

    private static $databaseConnection;
    private static $databaseConfiguration;

    public static function getInstance() {

        if (!self::$databaseConfiguration) {
            self::$databaseConfiguration = new ConnectionConfiguration();
        }

        if (!self::$databaseConnection) {
            self::$databaseConnection = new PDO(
                self::$databaseConfiguration->getDbn(),
                self::$databaseConfiguration->getUsername(),
                self::$databaseConfiguration->getPassword(),
                array(PDO::ATTR_PERSISTENT => true)
            );
        }

        return self::$databaseConnection;
    }
}