<?php 
    class defaultView{
        public function url($controlador=defaultController,$action=ActionDefault){
            $urlString="Location:index.php?redirect($controlador=defaultController,$action=ActionDefault)".$controlador."&action=".$action;
            return $urlString;
        }
        public function obtenerFechaEnLetra($fecha){
            $dia= $this->conocerDiaSemanaFecha($fecha);
            $num = date("j", strtotime($fecha));
            $anno = date("Y", strtotime($fecha));
            $mes = array('enero', 'febrero', 'marzo', 'abril', 'mayo', 'junio', 'julio', 'agosto', 'septiembre', 'octubre', 'noviembre', 'diciembre');
            $mes = $mes[(date('m', strtotime($fecha))*1)-1];
            return $dia.', '.$num.' de '.$mes.' del '.$anno;
        }
 
        public function conocerDiaSemanaFecha($fecha) {
            $dias = array('Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado');
            $dia = $dias[date('w', strtotime($fecha))];
            return $dia;
        }
    } 