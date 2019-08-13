<?php
    $dir = "../../"; //current directory
    include_once $dir . 'includer/includer.php'; 
    Includer::include_proto($dir); 
    Includer::include_view($dir, 'docs/view_docs.php');


    Header::initHeader($dir, "Get Start - Docs", TRUE, "Docs", FALSE);
    DocsView::initView($dir); 
    Footer::initFooter($dir, TRUE); 


