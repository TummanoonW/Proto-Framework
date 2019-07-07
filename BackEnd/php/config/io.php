<?php
    class IO{
        public $method;
        public $query;
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
                $this->query = new StdClass();
            }

            //use method 'POST/PUT' (aka 'input') as JSON to post anything
            if(file_get_contents('php://input') != NULL){
                $p = file_get_contents('php://input');
                $this->post = json_decode($p);
            }else{
                $this->post = new StdClass();
            }


        }

        //echo a given Object or Array in JSON format as string
        public function output($obj){
            echo json_encode($obj);
        }

    }