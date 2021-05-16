<?php namespace App\Position\Controller;


use App\Position\Model\PositionRequest;
use App\Position\Repository\PositionRepository;
use App\Position\Service\PositionService;
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
     * @Authorized(permission="sport_data_addition")
     * @Action(method="POST")
     */
    public function addPosition() {
        $request = RestBodyReader::readBody(PositionRequest::class);

        $positionEntity = $this->positionService->createPosition($request);

        echo JsonSerializer::getInstance()->serialize($positionEntity, 'json');
    }

    /**
     * @Authorized
     * @Action(method="GET", path="/{id}")
     */
    public function getPosition($id) {
        echo sprintf("Got position with id: %s", array($id));
    }

    /**
     * @Authorized(permission="sport_data_edition")
     * @Action(method="PUT", path="/{id}")
     */
    public function updatePosition($id) {
        echo sprintf("Updated position with id: %s", array($id));

        $x = new PositionRepository();

        $entity = $x->getById($id);

        $entity->setName("Goalkeeper");

        $x->save($entity);
    }

    /**
     * @Authorized(permission="sport_data_deletion")
     * @Action(method="DELETE", path="/{id}")
     */
    public function deletePosition($id) {
        echo sprintf("Deleted position with id: %s", array($id));
    }
}