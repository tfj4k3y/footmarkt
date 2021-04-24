<?php namespace App\Player\Controller;


use App\Router\RestBodyReader;
use App\Serializer\JsonSerializer;
use App\User\Model\UserRequest;
use App\Player\Service\PlayerService;
use Doctrine\Common\Annotations\AnnotationReader;
use Doctrine\Common\Annotations\AnnotationRegistry;
use ReflectionClass;
use zpt\anno\Annotations;

/**
 * @Controller(path="/player")
 */
class PlayerController {

    private $playerService;

    /**
     * CommentsController constructor.
     * @param $playerService
     */
    public function __construct() {
        $this->playerService = new PlayerService();
    }


    /**
     * @Action(method="GET")
     */
    public function getPlayers() {
        echo json_encode(array("test" => "test"));
    }

    /**
     * @Authorized(permission="sport_data_addition")
     * @Action(method="POST")
     */
    public function addPlayer() {
        echo sprintf("Added player");
    }

    /**
     * @Action(method="GET", path="/{id}")
     */
    public function getPlayer($id) {
        echo sprintf("Got player with id: %s", array($id));
    }

    /**
     * @Authorized(permission="sport_data_edition")
     * @Action(method="PUT", path="/{id}")
     */
    public function updatePlayer($id) {
        echo sprintf("Updated player with id: %s", array($id));
    }

    /**
     * @Authorized(permission="sport_data_deletion")
     * @Action(method="DELETE", path="/{id}")
     */
    public function deletePlayer($id) {
        echo sprintf("Deleted player with id: %s", array($id));
    }
}