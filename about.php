<?php
    //Proto Framework
    //v5
    //Developed by Tummanoon Wacha-em

    $dir = "./"; //current directory
    include_once $dir . '@proto/app.php'; 
    App::include_proto($dir); 
    App::include_view($dir, 'view_about.php');

    
    Header::initHeader($dir, "About", TRUE, "More", TRUE); 
    AboutView::initView($dir); 
    Footer::initFooter($dir, TRUE); 


