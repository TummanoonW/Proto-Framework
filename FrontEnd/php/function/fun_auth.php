<?php
    class FunAuth{
        public static function login($api, $form){
            $url = $api->getURL(App::$apiAuth, 'login', $form);
            $result = $api->get($url);

            return $result;
        }

        public static function register($api, $form){
            $url = $api->getURL(App::$apiAuth, 'register', NULL);
            $result = $api->post($url, $form);

            return $result;
        }
    }