<?php
    $dir = "../../"; //current directory
    include_once $dir . 'includer/includer.php'; 
    Includer::include_proto($dir); 
    Includer::include_view($dir, 'docs/view_includer.php');


    Header::initHeader($dir, "Includer - Docs", TRUE, "Docs", FALSE);
    DocsIncluderView::initView($dir); 
    Footer::initFooter($dir, TRUE); 


