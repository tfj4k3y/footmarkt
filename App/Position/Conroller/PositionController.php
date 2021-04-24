<?php namespace App\Position\Controller;


use App\Router\RestBodyReader;
use App\Serializer\JsonSerializer;
use App\Position\Model\UserRequest;
use App\Position\Service\NationalityService;
use Doctrine\Common\Annotations\AnnotationReader;
use Doctrine\Common\Annotations\AnnotationRegistry;
use ReflectionClass;
use zpt\anno\Annotations;

/**
 * @Controller(path="/user")
 */
class PositionController {

    private $positionService;

    /**
     * UserController constructor.
     * @param $nationalityService
     */
    public function __construct() {
        $this->positionService = new PositionService();
    }


    /**
     * @Action(method="GET")
     */
    public function getPositions() {
        echo json_encode(array("test" => "test"));
    }

    /**
     * @Action(method="POST")
     */
    public function addPosition() {
        echo sprintf("Added position");
    }

    /**
     * @Authorized
     * @Action(method="GET", path="/{id}")
     */
    public function getPosition($id) {
        echo sprintf("Got position with id: %s", array($id));
    }

    /**
     * @Action(method="PUT", path="/{id}")
     */
    public function updatePosition($id) {
        echo sprintf("Updated position with id: %s", array($id));
    }

    /**
     * @Action(method="DELETE", path="/{id}")
     */
    public function deletePosition($id) {
        echo sprintf("Deleted position with id: %s", array($id));
    }
}