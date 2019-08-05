<?php
    $dir = "../../"; //current directory
    include_once $dir . 'includer/includer.php'; 
    Includer::include_proto($dir); 
    Includer::include_view($dir, 'docs/view_pages.php');


    Header::initHeader($dir, "Pages - Docs", TRUE, "Docs", FALSE);
    DocsPagesView::initView($dir); 
    Footer::initFooter($dir, TRUE); 