<?php

    //a parent class for being extended to other classes as data model
    class Doc{
        public $ID;

        function __construct($obj){
            if(isset($obj->ID))$this->ID = $obj->ID;
        }

        public function toJSON(){
            return json_encode($this);
        }
    }