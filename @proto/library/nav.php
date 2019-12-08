<?php

    class Nav{
        /* --- navigate to Home // echo Home URL // return Home url string ---- */
        public static function gotoHome($dir){
            header( "location: " . $dir);
            exit();
        }
        public static function echoHome($dir){
            echo $dir;
        }
        public static function getHome($dir){
            return $dir;
        }
        /* --- navigate to Home // echo Home URL // return Home url string ---- */

        /* --- navigate to specific URL // echo specific URL // return specific URL --- */
        public static function goto($dir, $url){
            header( "location: " .  $dir . $url );
            exit();
        }
        public static function echoURL($dir, $file){
            echo $dir . $file;
        }
        public static function getURL($dir, $file){
            return $dir . $file;
        } 
        /* --- navigate to specific URL // echo specific URL // return specific URL --- */

        /* --- navigate to specific URL // echo specific URL // return specific URL --- */
        public static function gotoRouter($dir, $url){
            header( "location: " .  $dir . 'router/' . $url );
            exit();
        }
        public static function echoRouter($dir, $file){
            echo $dir . 'router/' . $file;
        }
        public static function getRouter($dir, $file){
            return $dir . 'router/' . $file;
        } 
        /* --- navigate to specific URL // echo specific URL // return specific URL --- */

        /* --- navigate to specific URL // echo specific URL // return specific URL --- */
        public static function gotoPage($dir, $url){
            header( "location: " .  $dir . 'page/' . $url );
            exit();
        }
        public static function echoPage($dir, $file){
            echo $dir . 'page/' . $file;
        }
        public static function getPage($dir, $file){
            return $dir . 'page/' . $file;
        } 
        /* --- navigate to specific URL // echo specific URL // return specific URL --- */

        /* --- navigate to previous URL // echo previous URL // return previous URL string --- */ 
        public static function goBack(){
	        header("Location: {$_SERVER['HTTP_REFERER']}");
	        exit();
        }
        public static function echoPrevious(){
            echo $_SERVER['HTTP_REFERER'];
        }
        public static function getPrevious(){
            return $_SERVER['HTTP_REFERER'];
        }
        /* --- navigate to previous URL // echo previous URL // return previous URL string --- */ 

        //refresh page
        public static function refresh(){
            header("Refresh:0");
        }
    }