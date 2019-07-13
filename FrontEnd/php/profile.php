<?php
    //Proto Framework for PHP-HTML5
    //v3
    //Developed by Tummanoon Wacha-em

    $dir = './';
    include_once $dir . 'includer/includer.php'; //include Includer file to operate
    Includer::include_proto($dir); //include Proto Framework Architecture
    Includer::include_view($dir, 'view_profile.php');

    $auth = Session::getAuth(); //get Logged In user
    $apiKey = Session::getAPIKey(); //get secret API Key

    $api = new API($apiKey); //open API connection
    $io = new IO(); //open Input/Output receiver for certain $_GET and $_POST data 

    Header::initHeader($dir, $auth->username . "'s Profile"); //initialize HTML header elements with '<<someone name>> 's Profile' as Title

    //check if user already logged in
    if(Session::checkUserExisted()){
        ProfileView::initView($dir, $auth); //initialize HTML profile elements
    }else{
        Nav::goto($dir, "index.php"); //return to home page
    }
    
    Footer::initFooter($dir); //initialize HTML footer elements
?>
    