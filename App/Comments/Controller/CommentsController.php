<?php namespace App\Comments\Controller;


use App\Router\RestBodyReader;
use App\Serializer\JsonSerializer;
use App\User\Model\UserRequest;
use App\Comments\Service\CommentsService;
use Doctrine\Common\Annotations\AnnotationReader;
use Doctrine\Common\Annotations\AnnotationRegistry;
use ReflectionClass;
use zpt\anno\Annotations;

/**
 * @Controller(path="/comments")
 */
class CommentsController {

    private $commentsService;

    /**
     * CommentsController constructor.
     * @param $commentsService
     */
    public function __construct() {
        $this->commentsService = new CommentsService();
    }


    /**
     * @Action(method="GET")
     */
    public function getComments() {
        echo json_encode(array("test" => "test"));
    }

    /**
     * @Authorized(permission="sport_data_addition")
     * @Action(method="POST")
     */
    public function addComment() {

        $request = RestBodyReader::readBody(\App\Comments\Model\CommentsRequest::class);

        $commentsEntity = $this->commentsService->createComment($request);

        echo JsonSerializer::getInstance()->serialize($commentsEntity, 'json');

    }

    /**
     * @Action(method="GET", path="/{id}")
     */
    public function getComment($id) {
        echo sprintf("Got comment with id: %s", array($id));
    }

    /**
     * @Authorized(permission="sport_data_edition")
     * @Action(method="PUT", path="/{id}")
     */
    public function updateComment($id) {

        $request = RestBodyReader::readBody(\App\Comments\Model\CommentsRequest::class);

        $commentsEntity = $this->commentsService->updateComment($id,$request);

        echo JsonSerializer::getInstance()->serialize($commentsEntity, 'json');

    }

    /**
     * @Authorized(permission="sport_data_deletion")
     * @Action(method="DELETE", path="/{id}")
     */
    public function deleteComment($id) {
        echo sprintf("Deleted comment with id: %s", array($id));
    }
}