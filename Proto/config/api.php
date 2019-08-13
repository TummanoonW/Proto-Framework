<?php
    class API{

        private $apiKey = "null";

        function __construct($apiKey){
            if(isset($apiKey)){
                $this->apiKey = $apiKey;
            }
        }

        //build URL with custom path and all the parameters provided
        public function getURL($path, $method, $query){
            return $this->getURLCustom($path) . $this->getMethodParam($method) . $this->getQueryParam($query);
        }

        //build URL with custom path
        private function getURLCustom($path){
            return App::$apiURL . $path . $this->getAPIParam();
        }

        private function getURLRoot(){
            return App::$apiURL . $this->getAPIParam();
        }

        private function getQueryParam($query){
            $json = json_encode($query);
            return '&q=' . $json;
        }

        private function getMethodParam($m){
            return '&m=' . $m;
        }

        private function getAPIParam(){
            return '?apiKey=' . $this->apiKey;
        }

        //return data from the given URL 
        public function get($url){
            $curlSession = curl_init();
            curl_setopt($curlSession, CURLOPT_URL, $url);
            curl_setopt($curlSession, CURLOPT_BINARYTRANSFER, true);
            curl_setopt($curlSession, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curlSession, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($curlSession, CURLOPT_SSL_VERIFYHOST, false);

            $output = curl_exec($curlSession);
            $response = json_decode($output);
            curl_close($curlSession);
            
            return $response;
        }

        //post data then return data from the given URL
        public function post($url, $objArr){
            $json = json_encode($objArr);
            $curlSession = curl_init();
            curl_setopt($curlSession, CURLOPT_URL, $url);
            curl_setopt($curlSession, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curlSession, CURLOPT_BINARYTRANSFER, true);
            curl_setopt($curlSession, CURLOPT_POSTFIELDS, $json);
            curl_setopt($curlSession, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($curlSession, CURLOPT_SSL_VERIFYHOST, false);

            $output = curl_exec($curlSession);
            $response = json_decode($output);
            curl_close($curlSession);

            return $response;
        }

        //delete data then return data from the given URL
        /*public function delete($url){
            $curlSession = curl_init();
            curl_setopt($curlSession, CURLOPT_URL, $url);
            curl_setopt($curlSession, CURLOPT_CUSTOMREQUEST, "DELETE");
            curl_setopt($curlSession, CURLOPT_BINARYTRANSFER, true);
            curl_setopt($curlSession, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curlSession, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($curlSession, CURLOPT_SSL_VERIFYHOST, false);

            $output = curl_exec($curlSession);
            $response = json_decode($output);
            curl_close($curlSession);

            return $response;
        }*/
    }