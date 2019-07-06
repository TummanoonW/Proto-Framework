<?php
    //automatically encode UTF8 when Includer is loaded
    header('Content-Type: text/html; charset=utf-8');

    class Includer{
        //Include all files within 'config' directory
        public static function include_config(){
            foreach (glob("./config/*.php") as $filename){
                include_once $filename;
            }
        }

        //Include all files within 'structure' directory
        //Structure is obsolete and was never used
        public static function include_structure(){
            foreach (glob("./structure/*.php") as $filename){
                include_once $filename;
            }
        }

        //An instant-includer specified for class FunAuth
        public static function include_auth(){
            self::include_config();
            self::include_structure();
            include_once './function/fun_auth.php';
        }


    }