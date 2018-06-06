<?php 
    class  blogController extends defaultController{
        public function __construct(){
            parent::__construct();
        }
        public function index(){
            $blog= new BlogModel();
            $bestBlogs=$blog->getAll();
            $datos=array("bestBlogs"=>$bestBlogs,"content"=>"home.php");
            $this->view('index',$datos);
        }
    }

?> 