<?php 

namespace App\src\controller;

// use App\src\models\Article;
use App\src\DAO\ArticleDAO;

class FrontController{

    private $articleDAO;

    public function __construct()
    {
        $this->articleDAO = new ArticleDAO();
        
    }
    public function home(){
        $articles = $this->articleDAO->getAllArticles();
        require '../templates/home.php';
    }
}