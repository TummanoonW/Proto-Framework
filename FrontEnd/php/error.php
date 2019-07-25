<?php
    $dir = "./"; //current directory
    include_once $dir . 'includer/includer.php'; //include Includer file to operate
    Includer::include_proto($dir); //include Proto Framework Architecture

    $result = new Result();
    $result->setResult(FALSE, NULL, Err::$ERR_NO_DATA);
    ErrorPage::initPage($dir, $result);

