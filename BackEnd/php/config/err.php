<?php

    class Err{
        //preset of Err
        public static $ERR_NO_DATA = array("code" => 0, "msg" => "No Data");
        public static $ERR_WRONG_AUTH = array("code" => 1, "msg" => "Wrong email or password");

        //allow developers to create their owner constant Err
        public static function genErr($code, $msg){
            return array("code" => $code, "msg" => $msg);
        }
    }