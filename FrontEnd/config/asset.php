<?php
    class Asset{

        public static $iconURL = "assets/images/logo/primary.svg";

        public static $icon_path = "assets/images/icons/";
        public static $thumb_path = "assets/images/thumbs/";
        public static $image_path = "assets/images/";


        public static $icon_def = "assets/images/icons/def.png";
        public static $thumb_def = "assets/images/thumbs/def.png";
        public static $image_def = "assets/images/def.png";

        public static function echoIcon($dir, $url){
            if(file_exists($url)){
                echo $url;
            }else{
                echo $dir . self::$icon_def;
            }
        }

        public static function echoThumb($dir, $url){
            if(file_exists($url)){
                echo $url;
            }else{
                echo $dir . self::$thumb_def;
            }
        }
        
        public static function echoImage($dir, $url){
            if(file_exists($url)){
                echo $url;
            }else{
                echo $dir . self::$image_def;
            }
        }

        public static function embedIcon($dir, $file){
            $path = $dir . self::$icon_path . $file;
            if(file_exists($path)){
                echo $path;
            }else{
                echo $dir . self::$icon_def;
            }
        }

        public static function embedThumb($dir, $file){
            $path = $dir . self::$thumb_path . $file;
            if(file_exists($path)){
                echo $path;
            }else{
                echo $dir . self::$thumb_def;
            }
        }

        public static function embedImage($dir, $file){
            $path = $dir . self::$image_path . $file;
            if(file_exists($path)){
                echo $path;
            }else{
                echo $dir . self::$image_def;
            }
        }
    }