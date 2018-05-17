<?php 
    class DataSet{
        private $table,$db,$connection;

        public function __construct(){
            $this->tablet=(string) $table;
            
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
            $rs;
            if($query->num_rows>1){
                while($row=$query->fetch_object()){
                    $rs[]=$row;
                }
            }else{
                if($row=$query->fetch_object()){
                    $rs=$row;
                }
            }
            return $rs;
        }
        public function getAll(){
            $query=$this->db->query("SELECT * FROM $this->table ORDER BY id DESC");
            return $this->resultSet($query);
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