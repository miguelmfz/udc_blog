<?php 
    class DataSet{
        private $table,$db,$connection;

        public function __construct($table){
            $this->table=(string) $table;
            require_once "connection.php";
            $this->connection = new Connection();
            $this->db=$this->connection->connect();
        }
        public function getConnection(){
            return $this->connection;
        }
        public function db(){
            return $this->db;
        }
        public function resultSet($query){
            $rs=null;
            if($query->num_rows>0){
               
            }else{
                if($row=$query->fetch_object()){
                    $rs=$row;
                    foreach ($rs as $key) {
                        var_dump($rs);
                    }
                    
                }
            }
            return $rs;
        }
        public function getAll(){
            $query=$this->db->query("SELECT * FROM $this->table ORDER BY id DESC");
             while($row=$query->fetch_object()){

                    $rs[]=$row;
                }
            return $rs;
        }
        public function getById($id){
            $query=$this->db->query("SELECT * FROM $this->tabla WHERE id='$id'");
            return $this->resultSet($query);
        }
        public function getBy($column,$value){
            $query=$this->db->query("SELECT * FROM $this->tabla WHERE $column='$value'");
            return $this->resultSet($query);            
        }
        public function deleteById($id){
            $query=$this->db->query("DELETE FROM $this->table where id='$id'");
            return $query;
        }
        public function deleteBy($column,$value){
            $query=$this->db->query("DELETE FROM $this->table where $column='$value'");
            return query;
        }
    }
?>