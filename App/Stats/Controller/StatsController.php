<?php namespace App\Nationality\Controller;


use App\Router\RestBodyReader;
use App\Serializer\JsonSerializer;
use App\Stats\Model\StatsRequest;
use App\Stats\Service\StatsService;
use Doctrine\Common\Annotations\AnnotationReader;
use Doctrine\Common\Annotations\AnnotationRegistry;
use ReflectionClass;
use zpt\anno\Annotations;

/**
 * @Controller(path="/user")
 */
class StatsController {

    private $statsService;

    /**
     * UserController constructor.
     * @param $statsService
     */
    public function __construct() {
        $this->statsService = new StatsService();
    }


    /**
     * @Action(method="GET")
     */
    public function getNationalities() {
        echo json_encode(array("test" => "test"));
    }

    /**
     * @Action(method="POST")
     */
    public function addStats() {
        echo sprintf("Added stats");
    }

    /**
     * @Authorized
     * @Action(method="GET", path="/{id}")
     */
    public function getStats($id) {
        echo sprintf("Got stats with id: %s", array($id));
    }

    /**
     * @Action(method="PUT", path="/{id}")
     */
    public function updateStats($id) {
        echo sprintf("Updated stats with id: %s", array($id));
    }

    /**
     * @Action(method="DELETE", path="/{id}")
     */
    public function deleteStats($id) {
        echo sprintf("Deleted stats with id: %s", array($id));
    }
}