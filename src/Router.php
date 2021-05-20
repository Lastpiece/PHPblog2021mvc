<?php

namespace App\src;

use App\src\controller\CommentController;
use Exception;
use App\src\controller\FrontController;

class Router{

    private $frontController;
    // private $commentController;

    public function __construct(){
        $this->frontController = new FrontController();
    }

    // public function __construct()
    // {
    //     $this->commentControler = new CommentController();
    // }

    public function run(){
        
        // $url = explode('/', filter_var($_SERVER['REQUEST_URI'], FILTER_SANITIZE_URL));
        try{
            if(isset($_GET['path'])){
                $url = explode('/', filter_var($_GET['path'], FILTER_SANITIZE_URL));
                $ctrlFunction = $url[0];
                $ctrlFunction = $_GET['path'];
                //* Est ce que tu possèdes une fonction cettepartie ? Si oui execute la sinon renvoie une erreur
                if(method_exists($this->frontController,$ctrlFunction)){
                    if(isset($url[1])){
                        //*si l'array 2 existe alors c'est surement un paramètre execute donc la fonctions avec les params
                        $params = $url[1];
                        $this->frontController->{$ctrlFunction}($params);
                    }
                    $this->frontController->{$ctrlFunction}();
                }else{
                    echo 'La page à laquelle vous souhaiter accéder n\'existe pas';
                    $this->frontController->home();
                }

                // $this->frontController->{$ctrlFunction}();
            } else {
                $this->frontController->home();

            }
        }catch(Exception $err){
            echo 'Erreur : '.$err->getMessage();
        }
    }

    // public function run(){
    //     try{
    //         $this->commentController->comment();
    //     }catch(Exception $err){
    //         echo 'Erreur : '.$err->getMessage();
    //     }
    // }
}