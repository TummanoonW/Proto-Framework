<?php
    //automatically encode UTF8 when Includer is loaded
    header('Content-Type: text/html; charset=utf-8');

    class Includer{
        //Include all files within 'config' directory
        public static function include_config($dir){
            foreach (glob($dir . "config/*.php") as $filename){
                include_once $filename;
            }
        }

        //Include all files within 'structure' directory
        //Structure is obsolete and was never used
        public static function include_structure($dir){
            foreach (glob($dir . "structure/*.php") as $filename){
                include_once $filename;
            }
        }

        public static function include_proto($dir){
            self::include_config($dir);
            self::include_structure($dir);
        }

        //An include a class of functions by given filename
        public static function include_fun($dir, $file){
            $arr = explode(".", $file);
            $lenght = count($arr);
            if($lenght == 1) $file = $file . ".php";
            
            include_once $dir . 'function/' . $file;
        }


    }