<?php
    //Proto Framework for PHP-HTML5
    //v4
    //Developed by Tummanoon Wacha-em

    $dir = "./"; //current directory
    include_once $dir . 'includer/includer.php'; //include Includer file to operate
    Includer::include_proto($dir); //include Proto Framework Architecture
    Includer::include_view($dir, 'view_register-success.php');

    $io = new IO(); //open Input/Output receiver for certain $_GET and $_POST data 

    if(isset($io->query->username)){
        $username = $io->query->username;
        Header::initHeader($dir, "Welcome - " . $username, FALSE, '', FALSE);
        RegisterSuccessView::initView($dir, $username);
        Footer::initFooter($dir, FALSE);
    }else{
        Nav::gotoHome($dir);
    }


