<?php
    $dir = "../../"; //current directory
    include_once $dir . '@proto/app.php'; 
    App::include_proto($dir); 
    App::include_view($dir, 'docs/view_includer.php');


    Header::initHeader($dir, "Includer - Docs", TRUE, "Docs", FALSE);
    DocsIncluderView::initView($dir); 
    Footer::initFooter($dir, TRUE); 


