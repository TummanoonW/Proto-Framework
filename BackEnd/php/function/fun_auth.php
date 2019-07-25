<?php
    class FunAuth{
        private static $table = "auth"; //table name

        //---- These are instant-functions wrapped inside a class - just to be tracable and quick-usable ---

        public static function getAllAuths($conn){
            $query = $conn->scriptSelect(
                self::$table, 
                "*",
                array(),
                NULL,
                NULL,
                NULL,
                FALSE
            );
            $result = $conn->queryArray($query);
            return $result;
        }

        public static function getAuthByEmail($conn, $email){
            $query = $conn->scriptSelect(
                self::$table, 
                "*",
                array(
                'email' => $email),
                NULL,
                NULL,
                NULL,
                FALSE
            );
            $result = $conn->querySingle($query);
            return $result;
        }

        //this function does a complex process - just to reduce workload on Front-End
        public static function login($conn, $email, $password){
            $password_hash = md5($password);
            $query = $conn->scriptSelect(
                self::$table, 
                "*",
                array(
                'email' => $email, 
                'password_hash' => $password_hash),
                NULL,
                NULL,
                NULL,
                FALSE
            );

            $result = $conn->querySingle($query);

            //if response = NULL that means email and password are not authorized
            if($result->response == NULL){
                //This function has called one of Err's preset
                $result->setResult(FALSE, NULL, Err::$ERR_WRONG_AUTH);
            }

            return $result;
        }

        public static function register($conn, $form){
            $auth = new Auth($form); //objectified/encapsulate formData to Auth

            //check if this email is already existed in auth table
            $result = self::getAuthByEmail($conn, $auth->email);
            if($result->response == NULL){ //if not, continue the process
                $query = $conn->scriptInsert(self::$table, $auth); //generate query script for insertion
                $result = $conn->queryResult($query);
                //if succeed, return Result +inserted auth
                if($result->success){ 
                    $ID = $conn->getLastID();
                    $auth->ID = $ID;
                    $result->setResult(TRUE, $auth, NULL);
                }
            }else{
                $result->setResult(FALSE, NULL, Err::$ERR_USER_EXISTED);
            }

            return $result;
        }

        public static function editProfile($conn, $form){
            $auth = new Auth($form); //objectified/encapsulate formData to Auth

            $query = $auth->getUpdateQuery(self::$table);
            $result = $conn->queryResult($query);

            return $result;
        }
    }