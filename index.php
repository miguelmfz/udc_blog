<?php 
require_once 'config/global.php';

require_once 'core/defaultController.php';

require_once 'core/loadController.php';

if(isset($_GET["controller"])){
    $controllerObj=loadController($_GET["controller"]);
}else{
    $controllerObj=loadController(defaultController);
}
launchAction($controllerObj);