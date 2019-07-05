<?php
    class FunAuth{
        public static $table = "auth"; //table name

        //---- These are instant-functions wrapped inside a class - just to be tracable and quick-usable ---

        public static function getAllAuths($conn){
            $query = "SELECT * FROM " . self::$table ;
            $result = $conn->queryArray($query);
            return $result;
        }

        public static function getAuthByEmail($conn, $email){
            $query = "SELECT * FROM " . self::$table . " WHERE email='" . $email . "'";
            $result = $conn->querySingle($query);
            return $result;
        }

        //this function does a complex process - just to reduce workload on Front-End
        public static function login($conn, $email, $password){
            $password_hash = md5($password);
            $query = "SELECT * FROM " . self::$table . " WHERE email='" . $email . "' AND password_hash='" . $password_hash . "'";
            $result = $conn->querySingle($query);

            //if response = NULL that means email and password are not authorized
            if($result->response == NULL){
                //This function has called one of Err's preset
                $result->setResult(FALSE, NULL, Err::$ERR_WRONG_AUTH);
            }

            return $result;
        }
    }