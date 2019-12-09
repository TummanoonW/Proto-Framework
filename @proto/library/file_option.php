<?php
    class FileOption{
        public $replacable = FALSE;
        public $timeStampable = FALSE;
        public $imageVerification = FALSE;
        public $fileName = NULL;
        public $limitSize = 5 * 1000 * 1000; //(5MB)
        public $types = [];

        function __construct(){}

        public function set($replacable, $timeStampable, $imageVerification, $fileName, $limitSize, $types){
            $this->replacable = $replacable;
            $this->timeStampable = $timeStampable;
            $this->imageVerification = $imageVerification;
            $this->fileName = $fileName;
            $this->limitSize = $limitSize;
            $this->types = $types;
        }

        public function setReplacable($replacable){
            $this->replacable = $replacable;
        }

        public function setTimeStampable($timeStampable){
            $this->timeStampable = $timeStampable;
        }

        public function setImageVerification($imageVerification){
            $this->imageVerification = $imageVerification;
        }

        public function setFileName($fileName){
            $this->fileName = $fileName;
        }

        public function setLimitSize($limitSize){
            $this->limitSize = $limitSize;
        }

        public function setTypes($types){
            $this->types = $types;
        }
    }