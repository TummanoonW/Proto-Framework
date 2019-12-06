<?php
    $dir = "../../"; //current directory
    include_once $dir . '@proto/app.php'; 
    App::include_proto($dir); 
    App::include_view($dir, 'docs/view_introduction.php');


    Header::initHeader($dir, "Introduction - Docs", TRUE, "Docs", FALSE);
    DocsIntroductionView::initView($dir); 
    Footer::initFooter($dir, TRUE); 


