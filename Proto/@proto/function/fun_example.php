<?php
    class FunExample{

        public static function all($api){
            $url = $api->getURL("example.php", 'all', NULL);
            $result = $api->get($url);

            return $result; 
        }

        public static function add($api, $form){
            $url = $api->getURL("example.php", 'add', NULL);
            $result = $api->post($url, $form);

            return $result;           
        }

        public static function remove($api, $id){
            $item = new StdClass();
            $item->id = $id;

            $url = $api->getURL("example.php", 'remove', $item);
            $result = $api->get($url);

            return $result;  
        }
    }