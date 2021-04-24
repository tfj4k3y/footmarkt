<?php namespace App\League\Controller;


use App\Router\RestBodyReader;
use App\Serializer\JsonSerializer;
use App\User\Model\UserRequest;
use App\League\Service\LeagueService;
use Doctrine\Common\Annotations\AnnotationReader;
use Doctrine\Common\Annotations\AnnotationRegistry;
use ReflectionClass;
use zpt\anno\Annotations;

/**
 * @Controller(path="/league")
 */
class LeagueController {

    private $leagueService;

    /**
     * UserController constructor.
     * @param $leagueService
     */
    public function __construct() {
        $this->leagueService = new LeagueService();
    }


    /**
     * @Action(method="GET")
     */
    public function getLeagues() {
        echo json_encode(array("test" => "test"));
    }

    /**
     * @Action(method="POST")
     */
    public function addLeague() {
        echo sprintf("Added league");
    }

    /**
     * @Authorized
     * @Action(method="GET", path="/{id}")
     */
    public function getLeague($id) {
        echo sprintf("Got league with id: %s", array($id));
    }

    /**
     * @Action(method="PUT", path="/{id}")
     */
    public function updateLeague($id) {
        echo sprintf("Updated league with id: %s", array($id));
    }

    /**
     * @Action(method="DELETE", path="/{id}")
     */
    public function deleteLeague($id) {
        echo sprintf("Deleted league with id: %s", array($id));
    }
}