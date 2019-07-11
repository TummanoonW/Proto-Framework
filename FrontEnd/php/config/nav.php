<?php

    class Nav{

        public static $rootURL = "http://192.168.64.3/protoweb";

        function gotoHome(){
            header( "location: " . self::$rootURL);
            exit();
        }

        function redirect(){
            header("Refresh:0");
        }

        function goBack(){
	        header("Location: {$_SERVER['HTTP_REFERER']}");
	        exit();
        }

        public static function goto($dir, $url){
            header( "location: " .  $dir . $url );
            exit();
        }
    }