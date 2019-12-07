<?php
    class FunAuth{
        public static function login($api, $form){
            $url = $api->getURL("index.php", 'login', NULL);
            $result = $api->post($url, $form);

            return $result;
        }

        public static function register($api, $form){
            $url = $api->getURL("index.php", 'register', NULL);
            $result = $api->post($url, $form);

            return $result;
        }

        public static function editProfile($api, $form){
            $url = $api->getURL("profile.php", 'edit', NULL);
            $result = $api->post($url, $form);

            return $result;
        }

        public static function resetPassword($api, $form){
            $url = $api->getURL("index.php", 'reset', NULL);
            $result = $api->post($url, $form);

            return $result;
        }
    }