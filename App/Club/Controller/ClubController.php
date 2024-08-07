<?php namespace App\Club\Controller;


use App\Club\Entity\ClubEntity;
use App\Club\Model\ClubRequest;
use App\Club\Repository\ClubRepository;
use App\Router\RestBodyReader;
use App\Serializer\JsonSerializer;
use App\User\Model\UserRequest;
use App\Club\Service\ClubService;
use Doctrine\Common\Annotations\AnnotationReader;
use Doctrine\Common\Annotations\AnnotationRegistry;
use ReflectionClass;
use zpt\anno\Annotations;

/**
 * @Controller(path="/club")
 */
class ClubController {

    private $clubService;

    /**
     * UserController constructor.
     * @param $clubService
     */
    public function __construct() {
        $this->clubService = new ClubService();
    }


    /**
     * @Action(method="GET")
     */
    public function getClubs() {
        echo json_encode(array("test" => "test"));
    }

    /**
     * @Authorized(permission="sport_data_addition")
     * @Action(method="POST")
     */
    public function addClub() {
        $request = RestBodyReader::readBody(ClubRequest::class);

        $clubEntity = $this->clubService->createClub($request);

        echo JsonSerializer::getInstance()->serialize($clubEntity, 'json');
    }

    /**
     *
     * @Action(method="GET", path="/{id}")
     */
    public function getClub($id) {
        echo sprintf("Got club with id: %s", array($id));
    }

    /**
     * @Authorized(permission="sport_data_edition")
     * @Action(method="PUT", path="/{id}")
     */
    public function updateClub($id) {
       /* $x = new ClubRepository();


        $entity = $x->getById($id);

        $entity->setName("Manchester United");

        $x->save($entity);*/
        $request = RestBodyReader::readBody(ClubRequest::class);

        $clubEntity = $this->clubService->updateClub($id,$request);

        echo JsonSerializer::getInstance()->serialize($clubEntity, 'json');
    }

    /**
     * @Authorized(permission="sport_data_deletion")
     * @Action(method="DELETE", path="/{id}")
     */

    public function deleteClub($id) {
        echo sprintf("Deleted club with id: %s", array($id));
    }
}