<?php
    $dir = "../../"; //current directory
    include_once $dir . 'includer/includer.php'; 
    Includer::include_proto($dir); 
    Includer::include_view($dir, 'docs/view_component.php');


    Header::initHeader($dir, "Component - Docs", TRUE, "Docs", FALSE);
    DocsComponentView::initView($dir); 
    Footer::initFooter($dir, TRUE); 


