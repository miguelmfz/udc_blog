<?php 
 class defaultController{
     public function __contruct(){
         require_once'dataset.php';
         require_once'model.php';
            foreach(glob("model/*.php") as $file){
                require_once $file;
            }
        }
    public function view($vista,$datos){
        foreach($datos as $id_assoc=> $valor){
            ${$id_assoc}=$valor;
        }

        require_once'core/defaultView.php';
        $helper= new defaultView();
        require_once 'view'.$vista."View.php";
    }
    public function redirect($controlador=defaultController,$action=ActionDefault){
        header("Location:index.php?controller=".$controlador."&action=".$action);
    }
 }
?>