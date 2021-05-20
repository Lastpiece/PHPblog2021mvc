<?php 

namespace App\src\controller;

// use App\src\models\Article;
use App\src\DAO\ArticleDAO;
use App\src\DAO\CommentDAO;

class FrontController{

    private $articleDAO;
    private $commentDAO;
    
    public function __construct()
    {
        $this->articleDAO = new ArticleDAO();
        $this->commentDAO = new CommentDAO();
        
    }
    public function home(){
        $articles = $this->articleDAO->getAllArticles();
        require '../templates/home.php';
    }
    public function comment(){
        $comments = $this->commentDAO->getAllComments();
        require '../templates/comment.php';
    }
    public function contact(){
        // $comments = $this->commentDAO->getAllComments();
        require '../templates/contact.php';
    }
}