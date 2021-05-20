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
        try{
                $url = explode('/', filter_var($_SERVER['REQUEST_URI'], FILTER_SANITIZE_URL));
            if(isset($_GET['path'])){
                // $url = explode('/', filter_var($_GET['url'], FILTER_SANITIZE_URL));
                // $ctrlFunction = $url[3];
                $ctrlFunction = $_GET['path'];
                if(method_exists($this->frontController,$ctrlFunction)){
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