<?php
    //Proto Framework for PHP-HTML5
    //v4
    //Developed by Tummanoon Wacha-em

    $dir = "../../"; //current directory
    include_once $dir . 'includer/includer.php'; 
    Includer::include_proto($dir); 
    Includer::include_view($dir, 'docs/view_docs.php');


    Header::initHeader($dir, "Docs", TRUE, "Docs");
    DocsView::initView($dir); 
    Footer::initFooter($dir, TRUE); 


