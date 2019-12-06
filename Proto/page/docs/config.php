<?php
    $dir = "../../"; //current directory
    include_once $dir . '@proto/app.php'; 
    App::include_proto($dir); 
    App::include_view($dir, 'docs/view_config.php');


    Header::initHeader($dir, "Config - Docs", TRUE, "Docs", FALSE);
    DocsConfigView::initView($dir); 
    Footer::initFooter($dir, TRUE); 


