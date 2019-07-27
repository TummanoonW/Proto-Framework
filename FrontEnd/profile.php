<?php
    //Proto Framework for PHP-HTML5
    //v4
    //Developed by Tummanoon Wacha-em

    $dir = "./"; //current directory
    include_once $dir . 'includer/includer.php'; //include Includer file to operate
    Includer::include_proto($dir); //include Proto Framework Architecture
    Includer::include_view($dir, 'view_profile.php');

    $auth = Session::getAuth(); //get Logged In user
    $apiKey = Session::getAPIKey(); //get secret API Key

    $api = new API($apiKey); //open API connection
    $io = new IO(); //open Input/Output receiver for certain $_GET and $_POST data 

    if(Session::checkUserExisted()){
        $paths = array(
            new Path(FALSE, "Home",     Nav::getHome($dir)),
            new Path(TRUE,  "Profile",  Nav::getURL($dir, App::$pageProfile))
        );

        Header::initHeader($dir, "$auth->username - Profile"); //initialize HTML header elements with 'Home' as Title
        ProfileView::initView($dir, $auth, $paths); //initialize HTML login elements
        Footer::initFooter($dir, FALSE); //initialize HTML footer elements
    }else{
        Nav::gotoHome($dir);
    }



