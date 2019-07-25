<?php
    class Connect{
        private $conn; //MySQLi Connection

        //setup database connection when an Object is being construct
        function __construct($config){

            $this->conn = mysqli_connect(
                $config['host'], 
                $config['username'], 
                $config['password'], 
                $config['db']
            );
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
            if($r || $r != NULL){
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

        //generate query script for INSERT
        public function scriptInsert($table, $obj){
            $rec = clone $obj;
            unset($rec->ID);
            $array = (array)$rec;
            $columns = "";
            $values = "";
            foreach ($array as $key => $value) {
                if($columns == "" && $values == ""){
                    $columns = "ID, $key";
                    $values = "NULL, '$value'";
                }else{
                    $columns = $columns . ', ' . "$key";
                    $values = $values . ', ' . "'$value'";
                }
            }
            $sql = "INSERT INTO $table ($columns) VALUES ($values)";
            return $sql;
        }

        //generate query script for UPDATE
        public function scriptUpdate($table, $obj, $wheres){
            $rec = clone $obj;
            unset($rec->ID);
            $array = (array)$rec;

            $sets = "";
            foreach ($array as $key => $value) {
                if($sets == "") $sets = $key . "=" . "'$value'";
                else $sets = $sets . ", " . $key . "=" . "'$value'";
            }

            $sql = "UPDATE $table SET $sets";

            if(count($wheres) != 0){
                $wh = "";
                foreach ($wheres as $key => $value) {
                    if($wh == "") $wh = $key . "='$value'";
                    else $wh = $wh . " AND " . $key . "='$value'";
                }
                $sql = $sql . " WHERE $wh";
            }


            return $sql;
        }

        //generate query script for SELECT
        public function scriptSelect($table, $select, $wheres, $limit, $offset, $orderBy, $desc){
            $sql = "SELECT $select FROM $table";

            if(count($wheres) != 0){
                $wh = "";
                foreach ($wheres as $key => $value) {
                    if($wh == "") $wh = $key . "='$value'";
                    else $wh = $wh . " AND " . $key . "='$value'";
                }
                $sql = $sql . " WHERE $wh";
            }

            if($limit != NULL){
                $sql = $sql . " LIMIT $limit";
            }

            if($offset != NULL){
                $sql = $sql . " OFFSET $offset";
            }

            if($orderBy != NULL){
                $sql = $sql . " ORDER BY $orderBy";
                
                if($desc == TRUE){
                    $sql = $sql . " DESC";
                }
            }

            return $sql;
        }

        //generate query script for DELETE
        public function scriptDelete($table, $wheres){
            $sql = "DELETE FROM $table";

            if(count($wheres) != 0){
                $wh = "";
                foreach ($wheres as $key => $value) {
                    if($wh == "") $wh = $key . "='$value'";
                    else $wh = $wh . " AND " . $key . "='$value'";
                }
                $sql = $sql . " WHERE $wh";
            }

            return $sql;
        }
    }