<?php
    $dir = "../../"; //current directory
    include_once $dir . '@proto/app.php'; 
    App::include_proto($dir); 
    App::include_view($dir, 'docs/view_component.php');


    Header::initHeader($dir, "Component - Docs", TRUE, "Docs", FALSE);
    DocsComponentView::initView($dir); 
    Footer::initFooter($dir, TRUE); 


