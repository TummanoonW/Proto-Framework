<?php
    class Fun{
        public static function get($conn, $table){
            $query = $conn->scriptSelect(
                $table,
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

        public static function count($conn, $table){
            $query = $conn->scriptSelect(
                $table,
                "COUNT(*)",
                array(),
                NULL,
                NULL,
                NULL,
                FALSE
            );
            $result = $conn->querySingle($query);
            $count = (array)$result->response;
            $result->setResponse((int)$count['COUNT(*)']);
            return $result;
        }

        public static function getSingle($conn, $table, $id){
            $query = $conn->scriptSelect(
                $table,
                "*",
                array('ID' => $id),
                NULL,
                NULL,
                NULL,
                FALSE
            );
            $result = $conn->querySingle($query);
            return $result;
        }

        public static function getFiltered($conn, $table, $where, $limit, $offset, $orderBy, $desc){
            $query = $conn->scriptSelect(
                $table,
                "*",
                $where,
                $limit,
                $offset,
                $orderBy,
                $desc
            );
            $result = $conn->queryArray($query);
            return $result;
        }

        public static function countFiltered($conn, $table, $where, $limit, $offset, $orderBy, $desc){
            $query = $conn->scriptSelect(
                $table,
                "*",
                $where,
                $limit,
                $offset,
                $orderBy,
                $desc
            );
            $result = $conn->querySingle($query);
            $count = (array)$result->response;
            $result->setResponse((int)$count['COUNT(*)']);
            return $result;
        }

        public static function create($conn, $table, $item){
            $query = $conn->scriptInsert(
                $table,
                $item
            );
            $result = $conn->queryResult($query);
            return $result;
        }

        public static function update($conn, $table, $id, $item){
            $query = $conn->scriptUpdate(
                $table,
                $item,
                array('ID' => $id)
            );
            $result = $conn->queryResult($query);
            return $result;
        }

        public static function updateMultiple($conn, $table, $where, $item){
            $query = $conn->scriptUpdate(
                $table,
                $item,
                $where
            );
            $result = $conn->queryResult($query);
            return $result;
        }

        public static function delete($conn, $table, $id){
            $query = $conn->scriptDelete(
                $table,
                array('ID' => $id)
            );
            $result = $conn->queryResult($query);
            return $result;
        }

        public static function deleteMultiple($conn, $table, $where){
            $query = $conn->scriptDelete(
                $table,
                $where
            );
            $result = $conn->queryResult($query);
            return $result;
        }
    }