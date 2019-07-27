<?php
    //Proto Framework for PHP-HTML5
    //v4
    //Developed by Tummanoon Wacha-em

    $dir = "./"; //current directory
    include_once $dir . 'includer/includer.php'; //include Includer file to operate
    Includer::include_proto($dir); //include Proto Framework Architecture
    Includer::include_view($dir, 'view_reset-success.php');

    $auth = Session::getAuth(); //get Logged In user
    $apiKey = Session::getAPIKey(); //get secret API Key

    $api = new API($apiKey); //open API connection
    $io = new IO(); //open Input/Output receiver for certain $_GET and $_POST data 

    if(isset($io->query->email)){
        $email = $io->query->email;
        Header::initHeader($dir, "Reset succeed - " . $email); //initialize HTML header elements with 'Home' as Title
        ResetSuccessView::initView($dir, $email); //initialize HTML login elements
        Footer::initFooter($dir); //initialize HTML footer elements
    }else{
        Nav::gotoHome();
    }


