<?php
    $dir = "../../"; //current directory
    include_once $dir . '@proto/app.php'; 
    App::include_proto($dir); 
    App::include_view($dir, 'docs/view_pages.php');


    Header::initHeader($dir, "Pages - Docs", TRUE, "Docs", FALSE);
    DocsPagesView::initView($dir); 
    Footer::initFooter($dir, TRUE); 