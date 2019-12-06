<?php
    $dir = "../../"; //current directory
    include_once $dir . '@proto/app.php'; 
    App::include_proto($dir); 
    App::include_view($dir, 'docs/view_docs.php');


    Header::initHeader($dir, "Get Start - Docs", TRUE, "Docs", FALSE);
    DocsView::initView($dir); 
    Footer::initFooter($dir, TRUE); 


