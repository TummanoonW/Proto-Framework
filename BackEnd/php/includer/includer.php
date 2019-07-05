<?php
    class Includer{
        //Include all files within 'config' directory
        public static function include_config(){
            foreach (glob("./config/*.php") as $filename){
                include_once $filename;
            }
        }

        //Include all files within 'structure' directory
        public static function include_structure(){
            foreach (glob("./structure/*.php") as $filename){
                include_once $filename;
            }
        }

        public static function include_auth(){
            self::include_config();
            self::include_structure();
            include_once './function/fun_auth.php';
        }


    }