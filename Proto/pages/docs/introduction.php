<?php
    $dir = "../../"; //current directory
    include_once $dir . 'includer/includer.php'; 
    Includer::include_proto($dir); 
    Includer::include_view($dir, 'docs/view_introduction.php');


    Header::initHeader($dir, "Introduction - Docs", TRUE, "Docs", FALSE);
    DocsIntroductionView::initView($dir); 
    Footer::initFooter($dir, TRUE); 


