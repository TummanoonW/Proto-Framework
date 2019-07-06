<?php
    class IO{
        public $method;
        public $query;
        public $post;
        public $put;

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

            //use method 'POST' protocol 'p' as JSON to post anything
            if(isset($_POST['p'])){
                $p = $_POST['p'];
                $this->post = json_decode($p);
            }else{
                $this->post = new StdClass();
            }

            //use method 'PUT' protocol 'p' as JSON to post anything
            if(isset($_PUT['p'])){
                $p = $_PUT['p'];
                $this->put = json_decode($p);
            }else{
                $this->put = new StdClass();
            }
        }

        public function output($obj){
            echo json_encode($obj);
        }

    }