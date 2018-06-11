<?php 
    class  blogController extends defaultController{
        public function __construct(){
            parent::__construct();
        }
        public function index(){
            $blog= new BlogModel();
            $bestBlogs=$blog->getBlogIndex();
            $datos=array("bestBlogs"=>$bestBlogs,"content"=>"home.php");
            $this->view('index',$datos);
        }

        public function read(){
            $id=$_GET["blog"];
            $blog= new BlogModel();
            $blogs=$blog->getBlog($id);
       
            $datos=array("blog"=>$blogs,"content"=>"blog.php");
            $this->view('index',$datos);
        }
    }

?> 