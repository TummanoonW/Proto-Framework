<?php
    //Proto Framework for PHP-HTML5
    //v4
    //Developed by Tummanoon Wacha-em

    $dir = "../../"; //current directory
    include_once $dir . 'includer/includer.php'; 
    Includer::include_proto($dir); 
    Includer::include_view($dir, 'proto-api/view_proto-api.php');


    Header::initHeader($dir, "Proto-API Docs", TRUE, "Docs", TRUE);
    ProtoAPIView::initView($dir); 
    Footer::initFooter($dir, TRUE); 


