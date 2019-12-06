<?php
    //Proto Framework for PHP-HTML5
    //v4
    //Developed by Tummanoon Wacha-em

    $dir = "./"; //current directory
    include_once $dir . '@proto/app.php'; //include Includer file to operate
    App::include_proto($dir); //include Proto Framework Architecture
    App::include_view($dir, 'view_register.php');


    Header::initHeader($dir, "Login", FALSE, '', FALSE); //initialize HTML header elements with 'Register' as Title
    RegisterView::initView($dir); //initialize HTML lregister elements
    Footer::initFooter($dir, FALSE); //initialize HTML footer elements


