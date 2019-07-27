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
                $query = $this->conn->scriptSelect(
                    self::$table, 
                    "*",
                    array('apiKey' => $this->apiKey),
                    NULL,
                    NULL,
                    NULL,
                    FALSE
                );
                $result = $this->conn->queryResult($query);

                if(!$result->success){
                    $result->setResult(FALSE, NULL, Err::$ERR_UNAUTH_APIKEY);
                    //show error if security fails
                }
            }else{
                $result->setResult(FALSE, NULL, Err::$ERR_NO_APIKEY);
                //show error if security fails
            }
            return $result;
        }
 
    }