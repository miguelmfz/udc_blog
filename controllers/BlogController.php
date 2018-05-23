<?php 
    class  blogController extends defaultController{
        public function __construct(){}

        public function index(){
            $datos=array(1,2,3,4,5,6,7,8,9);
            $this->view('index',$datos);
        }
    }

?> 