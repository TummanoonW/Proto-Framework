<?php
    class File{
        private $fileInput = NULL;
        private $target_dir = "";
        private $dirName = "";

        function __construct($fileInput, $dir, $target_dir){
            $this->fileInput = $fileInput;
            $this->target_dir = $dir . $target_dir;
            $this->dirName = $target_dir;
        }

        function upload($fileOption){
            $result = new Result();

            $input = $this->fileInput["name"];
            $uploadOk = FALSE;
            $imageFileType = strtolower(pathinfo($input, PATHINFO_EXTENSION));
            if(count($fileOption->types) > 0){
                foreach ($fileOption->types as $key => $value) {
                    if($value == $imageFileType) $uploadOk = TRUE;
                }
            }else{
                $uploadOk = TRUE;
            }

            if(!$uploadOk){
                $result->setResult(FALSE, NULL, Err::$ERR_FILE_INVALID_TYPE);
            }else{
                if($fileOption->fileName != NULL) $fileName = $fileOption->fileName;  
                else $fileName = basename($this->fileInput["name"]);
    
                if($fileOption->timeStampable){
                    $strs = explode('.', $fileName);
                    $name = "";
                    if(count($strs) > 1){
                        $extension = $strs[count($strs) - 1];
                        array_pop($strs); //remove extension and use its input extension
                        foreach ($strs as $key => $value) {
                            $name = $name . $value . '.';
                        }
                    }
                    $fileName = $name . CustomDate::timeStamp() . '.' . $imageFileType;
                }
    
                $target_file = $this->target_dir . $fileName;
                
                if (!$fileOption->replacable && file_exists($target_file)) {
                    $uploadOk = FALSE;
                    $result->setResult(FALSE, NULL, Err::$ERR_FILE_EXISTED);
                }else{
                    if($fileOption->imageVerification && !getimagesize($this->fileInput["tmp_name"])){
                        $uploadOk = FALSE;
                        $result->setResult(FALSE, NULL, Err::$ERR_FILE_INVALID);
                    }else{
                        if ($this->fileInput["size"] > $fileOption->limitSize) {
                            $uploadOk = FALSE;
                            $result->setResult(FALSE, NULL, Err::$ERR_FILE_OVERSIZE);
                        }
                    }
                }
            }

            if($uploadOk){
                if (move_uploaded_file($this->fileInput["tmp_name"], $target_file)) {
                    $uri = '/' . explode('/', $_SERVER['REQUEST_URI'])[1] . '/';
                    $url = "http" . (($_SERVER['SERVER_PORT'] == 443) ? "s" : "") . "://" . $_SERVER['HTTP_HOST'] . $uri;
                    $downloadURL = $url . $this->dirName . $fileName;
                    $result->setResult(TRUE, (object)array('downloadURL' => $downloadURL), NULL);
                } else {
                    $result->setResult(FALSE, NULL, Err::$ERR_FILE_FAILED);
                }
            }

            return $result;
        }
    }

