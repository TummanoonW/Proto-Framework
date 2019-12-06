<?php
    //Proto Framework for PHP-HTML5
    //v4
    //Developed by Tummanoon Wacha-em

    $dir = "./"; //current directory
    include_once $dir . '@proto/app.php'; //include Includer file to operate
    App::include_proto($dir); //include Proto Framework Architecture
    App::include_view($dir, 'view_profile.php');

    $auth = Session::getAuth(); //get Logged In user

    if(Session::checkUserExisted()){
        $paths = array(
            new Path(FALSE, "Home",     Nav::getHome($dir)),
            new Path(TRUE,  "Profile",  Nav::getURL($dir, App::$pageProfile))
        );

        Header::initHeader($dir, "$auth->username - Profile", TRUE, 'Profile', TRUE); //initialize HTML header elements with 'Profile' as Title
        ProfileView::initView($dir, $auth, $paths); //initialize HTML profile elements
        Footer::initFooter($dir, FALSE); //initialize HTML footer elements
    }else{
        Nav::gotoHome($dir); //if user did not log in, automatically return to home page
    }



