<?php

    class Auth extends Doc{

        public $email;
        public $password_hash;
        public $username;
        public $profile_pic;
        
        function __construct($obj){
            parent::__construct($obj);
            $this->parseJSON($obj);
        }

        public function parseJSON($obj){
            if($obj != NULL){
                $this->email = $obj->email;
                $this->password_hash = $obj->password_hash;
                $this->username = $obj->username;
                $this->profile_pic = $obj->profile_pic;
            }
        }

        public function toJSON(){
            return json_encode($this);
        }
    }