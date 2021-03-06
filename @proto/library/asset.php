<?php
    class Asset{

        public static function echoIcon($dir, $url){
            if($url != ''){
                if(curl_init($url)){
                    echo $url;
                }else{
                    echo $dir . App::$icon_def;
                }
            }else{
                echo $dir . App::$icon_def;
            }
        }

        public static function echoThumb($dir, $url){
            if($url != ''){
                if(curl_init($url)){
                    echo $url;
                }else{
                    echo $dir . App::$thumb_def;
                }
            }else{
                echo $dir . App::$thumb_def;
            }
        }
        
        public static function echoImage($dir, $url){
            if($url != ''){
                if(curl_init($url)){
                    echo $url;
                }else{
                    echo $dir . App::$image_def;
                }
            }else{
                echo $dir . App::$image_def;
            }
        }

        public static function embedIcon($dir, $file){
            $path = $dir . "asset/images/icons/" . $file;
            if(file_exists($path)){
                echo $path;
            }else{
                echo $dir . App::$icon_def;
            }
        }

        public static function embedThumb($dir, $file){
            $path = $dir . "asset/images/thumbs/" . $file;
            if(file_exists($path)){
                echo $path;
            }else{
                echo $dir . App::$thumb_def;
            }
        }

        public static function embedImage($dir, $file){
            $path = $dir . "asset/images/" . $file;
            if(file_exists($path)){
                echo $path;
            }else{
                echo $dir . App::$image_def;
            }
        }
    }