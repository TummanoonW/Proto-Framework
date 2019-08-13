<?php
    class FunAuth{
        public static function login($api, $form){
            $url = $api->getURL(App::$apiAuth, 'login', NULL);
            $result = $api->post($url, $form);

            return $result;
        }

        public static function register($api, $form){
            $url = $api->getURL(App::$apiAuth, 'register', NULL);
            $result = $api->post($url, $form);

            return $result;
        }

        public static function editProfile($api, $form){
            $url = $api->getURL(App::$apiProfile, 'edit', NULL);
            $result = $api->post($url, $form);

            return $result;
        }

        public static function resetPassword($api, $form){
            $url = $api->getURL(App::$apiAuth, 'reset', NULL);
            $result = $api->post($url, $form);

            return $result;
        }
    }