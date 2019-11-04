<?php
    class IO{
        public $method;
        public $query;
        public $get;
        public $post;

        function __construct(){
            //use method 'GET' protocol 'm' as specified method client wants to use
            if(isset($_GET['m'])){
                $this->method = $_GET['m'];
            }else{
                $this->method = NULL;
            }

            //use method 'GET' protocol 'q' as JSON to query anything
            if(isset($_GET['q'])){
                $q = $_GET['q'];
                $this->query = json_decode($q);
            }else{
                $this->query = NULL;
            }

            //use method 'GET' as JSON to get anything
            $get = (object)$_GET;

            //use method 'POST/PUT' (aka 'input') as JSON to post anything
            $p = file_get_contents('php://input');
            $this->post = json_decode($p);
        }

        //display a given Object or Array in JSON format as string
        public function output($obj){
            print json_encode($obj);
        }

    }