<?php namespace App\Nationality\Controller;


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
class UserController {

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
     * @Action(method="POST")
     */
    public function addNationality() {
        echo sprintf("Added nationality");
    }

    /**
     * @Authorized
     * @Action(method="GET", path="/{id}")
     */
    public function getNationality($id) {
        echo sprintf("Got nationality with id: %s", array($id));
    }

    /**
     * @Action(method="PUT", path="/{id}")
     */
    public function updateNationality($id) {
        echo sprintf("Updated nationality with id: %s", array($id));
    }

    /**
     * @Action(method="DELETE", path="/{id}")
     */
    public function deleteNationality($id) {
        echo sprintf("Deleted nationality with id: %s", array($id));
    }
}