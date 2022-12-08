<?php

class CommentController {
    public $model;

    public function allCommentsAction(){
        $comments = $this->model->allComments();
        return require_once('../view/comments.php');
    }

}