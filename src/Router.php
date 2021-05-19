<?php

namespace App\src;

use Exception;
use App\src\controller\FrontController;

class Router{

    private $frontController;

    public function __construct(){
        $this->frontController = new FrontController();
    }

    public function run(){
        try{
            // $this->frontController->home();
            $this->frontController->comment();
        }catch(Exception $err){
            echo 'Erreur : '.$err->getMessage();
        }
    }
}