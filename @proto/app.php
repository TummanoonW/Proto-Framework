<?php
    class App{
        /* --- (DO NOT DELETE) Framework Configuration --*/
        public static $name = "Proto-Framework";
        public static $framework = "Proto-Framework";
        public static $version = "5.4";
        public static $lastUpdate = "2019/12/09 23:59:59";
        public static $platform = ["PHP", "HTML", "JS", "CSS", "MySQL", "Front-End", "Back-End"]; 
        public static $debuggingMode = TRUE;
        
        //database configuration
        public static $CONFIG = array(
            'host'      => 'localhost',
            'username'  => 'cp255290_proto',
            'password'  => 'trialation27',
            'db'        => 'cp255290_proto'
        );
        
        public static $icon_def = "asset/images/icons/def.svg";
        public static $thumb_def = "asset/images/thumbs/def.png";
        public static $image_def = "asset/images/def.png";

        public static $apiURL = "https://www.trialation.com/proto-framework/api/"; //base URL to call API
        /* ---------------------------------------------*/
        
        //Include all files within 'library' directory
        public static function include_library($dir){
            foreach (glob($dir . "@proto/library/*.php") as $filename){
                include_once $filename;
            }
        }

        //Include all files within 'structure' directory
        //Structure is obsolete and was never used
        public static function include_structure($dir){
            foreach (glob($dir . "@proto/structure/*.php") as $filename){
                include_once $filename;
            }
        }

        //Include all files within 'layout' directory
        public static function include_layout($dir){
            foreach (glob($dir . "@proto/layout/*.php") as $filename){
                include_once $filename;
            }
        }

        //Include Proto-Framework Infastructure
        public static function include_proto_api($dir){
            if(!isset($dir)){
                $dir = "./";
            }

            self::include_library($dir);
            self::include_structure($dir);
        }

        //Include Proto-Framework Infastructure
        public static function include_proto($dir){
            if(!isset($dir)){
                $dir = "./";
            }
            
            self::include_library($dir);
            self::include_structure($dir);
            self::include_layout($dir);
        }

        //Include specific component view given by file name
        public static function include_view($dir, $file){
            if(!isset($dir)){
                $dir = "./";
            }
            
            $arr = explode(".", $file);
            $lenght = count($arr);
            if($lenght == 1) $file = $file . ".php";

            include_once $dir . '@proto/view/' . $file;
        }

        public static function include_fun($dir, $file){
            if(!isset($dir)){
                $dir = "./";
            }

            $arr = explode(".", $file);
            $lenght = count($arr);
            if($lenght == 1) $file = $file . ".php";

            include_once $dir . '@proto/function/' . $file;
        }

    }

    //automatically encode UTF8 when Includer is loaded
    header('Content-Type: text/html; charset=utf-8');

    if(App::$debuggingMode){
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
    }else{
        ini_set('display_errors', 0);
        ini_set('display_startup_errors', 0);
    }