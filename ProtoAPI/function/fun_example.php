<?php
    class FunExample{
        private static $table = "example"; //table name

        public static function getItems($conn){
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

        public static function addItem($conn, $form){
            $query = $conn->scriptInsert(
                self::$table,
                $form
            );
            $result = $conn->queryResult($query);
            return $result;
        }

        public static function removeItem($conn, $id){
            $query = $conn->scriptDelete(
                self::$table,
                array(
                    "ID" => $id
                )
            );
            $result = $conn->queryResult($query);
            return $result;
        }
    }