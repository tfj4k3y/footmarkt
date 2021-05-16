<?php namespace App\Nationality\Controller;


use App\Router\RestBodyReader;
use App\Serializer\JsonSerializer;
use App\Stats\Model\StatsRequest;
use App\Stats\Repository\StatsRepository;
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
     * @Authorized(permission="sport_data_addition")
     * @Action(method="POST")
     */
    public function addStats() {
        $request = RestBodyReader::readBody(StatsRequest::class);

        $statsEntity = $this->statsService->createStats($request);

        echo JsonSerializer::getInstance()->serialize($statsEntity, 'json');
    }

    /**
     * @Authorized
     * @Action(method="GET", path="/{id}")
     */
    public function getStats($id) {
        echo sprintf("Got stats with id: %s", array($id));
    }

    /**
     * @Authorized(permission="sport_data_edition")
     * @Action(method="PUT", path="/{id}")
     */
    public function updateStats($id) {
        echo sprintf("Updated stats with id: %s", array($id));

        $x = new StatsRepository();

        $entity = $x->getById($id);

        $entity->setAppearances(1);
        $entity->setGoals(1);
        $entity->setAssists(1);
        $entity->setPitchTime(90);
    }

    /**
     * @Authorized(permission="sport_data_deletion")
     * @Action(method="DELETE", path="/{id}")
     */
    public function deleteStats($id) {
        echo sprintf("Deleted stats with id: %s", array($id));
    }
}