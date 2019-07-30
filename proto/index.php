<?php
    //Proto Framework for PHP-HTML5
    //v4
    //Developed by Tummanoon Wacha-em

    $dir = "./"; //current directory
    include_once $dir . 'includer/includer.php'; //include Includer file to operate
    Includer::include_proto($dir); //include Proto Framework Architecture
    Includer::include_view($dir, 'view_home.php');

    
    Header::initHeader($dir, App::$name, TRUE, 'Home'); //initialize HTML header elements with 'Home' as Title
    HomeView::initView($dir); //initialize HTML home elements
    Footer::initFooter($dir, TRUE); //initialize HTML footer elements


