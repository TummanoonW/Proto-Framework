<?php
    //Proto Framework for PHP-HTML5
    //v4
    //Developed by Tummanoon Wacha-em

    $dir = "../../"; //current directory
    include_once $dir . 'includer/includer.php'; 
    Includer::include_proto($dir); 
    Includer::include_view($dir, 'get-start/view_get-start.php');


    Header::initHeader($dir, "Get Start", TRUE, "Get Start");
    GetStartView::initView($dir); 
    Footer::initFooter($dir, TRUE); 


