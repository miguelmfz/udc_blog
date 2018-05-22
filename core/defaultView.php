<?php 
    class defaultView{
        public function url($controlador=defaultController,$action=ActionDefault){
            $urlString="Location:index.php?controller=".$controlador."&action=".$action;
            return $urlString;
        }
    } 