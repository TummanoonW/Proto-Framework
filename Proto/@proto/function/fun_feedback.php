<?php
    class FunFeedback{
        public static function send($api, $form){
            $url = $api->getURL("feedback.php", 'submit', NULL);
            $result = $api->post($url, $form);

            return $result;
        }
    }