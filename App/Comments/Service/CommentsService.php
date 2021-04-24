<?php

namespace App\Comments\Service;
use App\Nationality\Repository\NationalityRepository;
use App\Comments\Entity\CommentsEntity;

class CommentsService
{
    private $commentsRepository;

    /**
     * CommentsService constructor.
     */
    public function __construct() {
        $this->commentsService = new CommentsService();
    }

    public function createComments(CommentsEntity $commentsEntity){
        echo sprintf("Comment created");
    }

    public function getComment($id) {
        echo sprintf("getComment: ".$id);
    }

    public function isCommentExists($id) {
        return $this->commentsRepository->isCommentExists($id);
    }
}