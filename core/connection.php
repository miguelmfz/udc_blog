<?php 

class Connection{
    private $driver,$host,$user,$pass,$databases,$charset;

    public function __construct(){
        $config= require_once'config/database.php';
        $this->driver=$config["driver"];
        $this->host=$config["host"];;
        $this->user=$config["user"];;
        $this->pass=$config["pass"];;
        $this->database=$config["database"];;
        $this->charset=$config["charset"];;
    }

    public function connect(){
        if($this->driver=="mysql" || $this->driver==null){
            $con= new mysqli($this->host,$this->user,$this->pass,$this->database);
            $con->query("SET NAMES '$this->charset'");
        }
        return $con;
    }
}