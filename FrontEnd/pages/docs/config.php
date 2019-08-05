<?php
    $dir = "../../"; //current directory
    include_once $dir . 'includer/includer.php'; 
    Includer::include_proto($dir); 
    Includer::include_view($dir, 'docs/view_config.php');


    Header::initHeader($dir, "Config - Docs", TRUE, "Docs", FALSE);
    DocsConfigView::initView($dir); 
    Footer::initFooter($dir, TRUE); 


