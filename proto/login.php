<?php
    //Proto Framework for PHP-HTML5
    //v4
    //Developed by Tummanoon Wacha-em

    $dir = "./"; //current directory
    include_once $dir . 'includer/includer.php'; //include Includer file to operate
    Includer::include_proto($dir); //include Proto Framework Architecture
    Includer::include_view($dir, 'view_login.php');


    Header::initHeader($dir, "Login", FALSE, ''); //initialize HTML header elements with 'Login' as Title
    LoginView::initView($dir); //initialize HTML login elements
    Footer::initFooter($dir, FALSE); //initialize HTML footer elements


