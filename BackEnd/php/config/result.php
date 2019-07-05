<?php
    class Result{
        public $success;
        public $response;
        public $err;

        function __construct(){
            $this->setResult(FALSE, NULL, NULL);
        }

        public function setResult($success, $response, $err){
            $this->setSuccess($success);
            $this->setResponse($response);
            $this->setErr($err);
        }

        public function setSuccess($success){
            $this->success = $success;
        }

        public function setResponse($response){
            $this->response = $response;
        }

        public function setErr($err){
            $this->err = $err;
        }

        public function getErrCode(){
            return $this->err->code;
        }

        public function getErrMsg(){
            return $this->err->msg;
        }

        public function toJSON(){
            return json_encode($this);
        }
    }