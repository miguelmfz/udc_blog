<?php 
    function loadController($controller){
        $controlador=ucwords($controller).'controller';
        $strFileController='controller/'.$controlador.'.php';

        if(is_file($strFileController)){
            $strFileController='controller/'.ucwords(defaultController).'Controller.php';
        }


        require_once $strFileController;
        $controllerObject = new $controlador();
        return $controllerObject;
    } 

    function loadAction($controllerObject, $action){
        $localAction=$action;
        $controllerObject->$localAction;
    }

    function launchAction($controllerObject){
        if(isset($_GET["action"]) && method_exists($controllerObject,$_GET["action"]) ){
            loadAction($controllerObject,$_GET["action"]);
        }else{
            loadAction($controllerObject,ActionDefault);            
        }
    }