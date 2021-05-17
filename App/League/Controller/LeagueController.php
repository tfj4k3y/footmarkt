<?php namespace App\League\Controller;


use App\League\Entity\LeagueEntity;
use App\League\Model\LeagueRequest;
use App\League\Repository\LeagueRepository;
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
     * @Authorized(permission="sport_data_addition")
     * @Action(method="POST")
     */
    public function addLeague() {
        $request = RestBodyReader::readBody(LeagueRequest::class);

        $leagueEntity = $this->leagueService->createLeague($request);

        echo JsonSerializer::getInstance()->serialize($leagueEntity, 'json');
    }

    /**
     * @Action(method="GET", path="/{id}")
     */
    public function getLeague($id) {
        echo sprintf("Got league with id: %s", array($id));
    }

    /**
     * @Authorized(permission="sport_data_edition")
     * @Action(method="PUT", path="/{id}")
     */
    public function updateLeague($id) {
        $x = new LeagueRepository();

        /** @var LeagueEntity $entity */
        $entity = $x->getById($id);

        $entity->setName("Premier League");

        $x->save($entity);
    }

    /**
     * @Authorized(permission="sport_data_deletion")
     * @Action(method="DELETE", path="/{id}")
     */
    public function deleteLeague($id) {
        echo sprintf("Deleted league with id: %s", array($id));
    }
}