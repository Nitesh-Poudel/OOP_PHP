<?php
    //in_oop_connection_is_done_the_way_below

    class database{
        private $server="localhost";
        private $username="root";
        private $password="";
        private $dbname="labreport";
         private $conn;//will_hold_database_connection_object;
        
        private $mysqli;
        private $result=array();
        
        function __construct($db){
            $this->dbname=$db;
            $this->conn=new mysqli($this->server,$this->username,$this->password,$this->dbname);//$conn_is_object_of_mysqli_class

            if($this->conn){
                echo"Connection_established to ".$this->dbname;
            }
            else{
                return false;
                echo"Unable_to_connect";
            }
        }


         //insert data into table
        function insert($table,$arraydata){
          
            $column=implode(', ', array_keys($arraydata));
            $data = "'" . implode("', '", $arraydata) . "'";

            if($this->tableexist($table)){
                echo $sql="Insert into $table($column) VALUES($data)";
                $result=$this->conn->query($sql);
                if($result){
                    echo"Insertation Sucess";
                    
                }

            }
            else{
                return false;
            }

           
        }

        //update_into_table
        function update($table,$dataArray,$condition){

            echo $sql="UPDATE $table set $column =$value WHERE column=value";

        }

       
        //show data of  table
        function show($tableName){
            $sql="SELECT * FROM $tableName";
            $result=$this->conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    foreach ($row as $key=>$value) {
                        echo $key . ": " . $value . "</br> ";
                    }
                }
            }
            else{
                echo"No record available in the table";
            }
        }


        //table_exist_or_not
        private function tableexist($table){
            $sql="SHOW tables from $this->dbname LIKE '$table'";
            $tableIndb=$this->conn->query($sql);

            if($tableIndb){
                if($tableIndb->num_rows==1){
                    return true;
                }
                else{
                    return false;
                    array_push($this->result,$table."doesnot exist in ".$this->dbname." database");

                }
            }

        }
        //to_close_connection_when_every_task_is_finished

         function closeConnection(){
            if($this->conn){
                $this->conn->close();
                echo"connection closed";
            }
        }

         function __destruct(){
           
            $this->closeConnection();

        }
        
    }
?>