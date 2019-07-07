<?php
    class Security{
        private static $table = "auth"; //table name

        private $conn;
        private $apiKey;

        function __construct($conn){
            $this->conn = $conn;
        }

        public function checkSecurity(){
            $result = new Result();
            if(isset($_GET['apiKey'])){
                $this->apiKey = $_GET['apiKey'];
                $query = "SELECT * FROM " . self::$table . " WHERE apiKey='" . $this->apiKey . "'";
                $result = $this->conn->queryResult($query);
            }else{
                $result->setResult(FALSE, NULL, Err::$ERR_NO_APIKEY);

                //show error if security fails
                echo json_encode($result);
            }
            return $result;
        }
 
    }