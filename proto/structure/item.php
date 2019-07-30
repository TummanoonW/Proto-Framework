<?php
    class Item extends Doc{
        public $text = "";
        public $date = "";
        public $value = 0;

        //construct both itself and the parent class it extends
        function __construct($obj){
            parent::__construct($obj);
            $this->parseJSON($obj);
        }

        public function parseJSON($obj){
            if(isset($obj->text))$this->text = $obj->text;
            if(isset($obj->date)){
                $this->date = $obj->date;
            }else{
                $this->date = CustomDate::parseDateNow();
            }
            if(isset($obj->value))$this->value = $obj->value;
        }

        //return this object as JSON string
        public function toJSON(){
            return json_encode($this);
        }        
    }