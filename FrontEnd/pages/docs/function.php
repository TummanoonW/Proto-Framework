<?php
    $dir = "../../"; //current directory
    include_once $dir . 'includer/includer.php'; 
    Includer::include_proto($dir); 
    Includer::include_view($dir, 'docs/view_function.php');


    Header::initHeader($dir, "Function - Docs", TRUE, "Docs", FALSE);
    DocsFunctionView::initView($dir); 
    Footer::initFooter($dir, TRUE); 
