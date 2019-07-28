<?php
    class FunExample{

        public static function all($api){
            $url = $api->getURL(App::$apiExample, 'all', NULL);
            $result = $api->get($url);

            return $result; 
        }

        public static function add($api, $form){
            $item = new Item($form);

            $url = $api->getURL(App::$apiExample, 'add', NULL);
            $result = $api->post($url, $item);

            return $result;           
        }

        public static function remove($api, $id){
            $item = new StdClass();
            $item->id = $id;

            $url = $api->getURL(App::$apiExample, 'remove', $item);
            $result = $api->get($url);

            return $result;  
        }
    }