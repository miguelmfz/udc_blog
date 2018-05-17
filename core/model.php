<?php 
    class Model extends DataSet{
        private $table;

        public  function __construct($table){
            $this->table=(string) $table;
            parent::__construct($table);
        }
        public function execute($query){
            $rs;
            $query=$this->db()->query($query);
            if($query){
                if($query->num_rows>1){
                    while($row=$query->fetch_object()){
                        $rs[]=$row;
                    }
                }elseif($query->num_rows==1){
                    if($row===$query->fetch_object()){
                        $rs=$row;
                    }
                }else{
                    $rs=true;
                }
            }else{
                $rs=false;
            }
            return $rs;
        }
    }
?>