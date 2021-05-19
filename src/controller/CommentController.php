<?php

namespace App\src\controller;
use App\src\DAO\CommentDAO;

class CommentController{
    
    private $commentDAO;

    public function __construct()
    {
        $this->commentDAO = new CommentDAO();
    }
    public function comment(){
        $comments = $this->commentDAO->getAllComments();
        require '../templates/comment.php';
    }
}