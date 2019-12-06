<?php
    $dir = "../../"; //current directory
    include_once $dir . '@proto/app.php'; 
    App::include_proto($dir); 
    App::include_view($dir, 'docs/view_function.php');


    Header::initHeader($dir, "Function - Docs", TRUE, "Docs", FALSE);
    DocsFunctionView::initView($dir); 
    Footer::initFooter($dir, TRUE); 
