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

        //Include all files within 'layout' directory
        public static function include_layout($dir){
            foreach (glob($dir . "component/layout/*.php") as $filename){
                include_once $filename;
            }
        }

        //Include Proto-Framework Infastructure
        public static function include_proto($dir){
            if(!isset($dir)){
                $dir = "./";
            }

            self::include_config($dir);
            self::include_layout($dir);
        }

        //Include specific component view given by file name
        public static function include_view($dir, $file){
            if(!isset($dir)){
                $dir = "./";
            }

            include_once $dir . 'component/view/' . $file;
        }

        public static function include_fun($dir, $file){
            if(!isset($dir)){
                $dir = "./";
            }

            include_once $dir . 'function/' . $file;
        }

    }