<?php namespace App\Nationality\Controller;


use App\Nationality\Model\NationalityRequest;
use App\Nationality\Repository\NationalityRepository;
use App\Router\RestBodyReader;
use App\Serializer\JsonSerializer;
use App\User\Model\UserRequest;
use App\User\Service\NationalityService;
use Doctrine\Common\Annotations\AnnotationReader;
use Doctrine\Common\Annotations\AnnotationRegistry;
use ReflectionClass;
use zpt\anno\Annotations;

/**
 * @Controller(path="/user")
 */
class NationalityController {

    private $nationalityService;

    /**
     * UserController constructor.
     * @param $nationalityService
     */
    public function __construct() {
        $this->nationalityService = new NationalityService();
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
    public function addNationality() {
        $request = RestBodyReader::readBody(NationalityRequest::class);

        $nationalityEntity = $this->addNationality($request);

        echo JsonSerializer::getInstance()->serialize($nationalityEntity, 'json');

    }

    /**
     * @Authorized
     * @Action(method="GET", path="/{id}")
     */
    public function getNationality($id) {
        echo sprintf("Got nationality with id: %s", array($id));
    }

    /**
     *@Authorized(permission="sport_data_edition")
     * @Action(method="PUT", path="/{id}")
     */
    public function updateNationality($id) {
        echo sprintf("Updated nationality with id: %s", array($id));

        $x = new NationalityRepository();

        $entity = $x->getById($id);

        $entity->setName("Poland");

        $x->save($entity);
    }

    /**
     * @Authorized(permission="sport_data_deletion")
     * @Action(method="DELETE", path="/{id}")
     */
    public function deleteNationality($id) {
        echo sprintf("Deleted nationality with id: %s", array($id));
    }
}