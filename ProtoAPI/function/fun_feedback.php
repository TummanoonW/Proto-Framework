<?php 
    class FunFeedback{
        private static $table = 'feedback';

        public static function send($conn, $form){
            $query = $conn->scriptInsert(self::$table, $form); 
            $result = $conn->queryResult($query);
            //if succeed, return Result +inserted auth
            if($result->success){ 
                $ID = $conn->getLastID();
                $form->ID = $ID;
                $result->setResult(TRUE, $form, NULL);
            }
            return $result;
        }
    }