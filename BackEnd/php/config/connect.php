<?php
    class Connect{
        private $host = "localhost"; //ip address or hostname
        private $username = "root"; 
        private $password = "";
        private $db = "test"; //database you want to connect
        private $conn; //MySQLi Connection

        //setup database connection when an Object is being construct
        function __construct(){
            $this->conn = mysqli_connect($this->host, $this->username, $this->password, $this->db);
        }

        //return Result of Connection (also return $conn if succeed or $err if failed) 
        public function checkConn(){
            $result = new Result();
            $conn = $this->getConn();
            if($conn){
                $result->setResult(TRUE, $conn, NULL);
            }else{
                $this->closeConn();
                $err = $this->getErr();
                $result->setResult(FALSE, NULL, $err);

                //show error if connection fails
                echo json_encode($result);
            }
            return $result;
        }

        //get Connection
        public function getConn(){
            return $this->conn;
        }

        //close Connection
        public function closeConn(){
            mysqli_close($this->conn);
        }

        //objectified mysqli errors and return as Err
        public function getErr(){
            //return Err::genErr(mysqli_connect_errno(), mysqli_connect_error());
            return Err::$ERR_CONN_FAILED;
        }

        //query and return Result
        public function queryResult($query){
            $r = mysqli_query($this->getConn(), $query);
            $result = new Result();
            if($r){
                $result->setResult(TRUE, $r, NULL);
            }else{
                $err = $this->getErr();
                $result->setResult(FALSE, NULL, $err);
            }
            return $result;
        }

        //query and return Result + data
        public function querySingle($query){
            $result = $this->queryResult($query);
            if($result->success){
                $row = mysqli_fetch_array($result->response, MYSQLI_ASSOC);
                $result->setResponse($row);
            }
            return $result;
        }

        //query and return Result + array of data
        public function queryArray($query){
            $result = $this->queryResult($query);
            if($result->success){
                $arr = array();
                while( $row = mysqli_fetch_array($result->response, MYSQLI_ASSOC) ){
                    array_push($arr, $row);
                }
                $result->setResponse($arr);
            }
            return $result;
        }

        //return last generated id
        public function getLastID(){
            return mysqli_insert_id($this->getConn());
        }
    }