<?php
    $dir = "../../"; //current directory
    include_once $dir . 'includer/includer.php'; 
    Includer::include_proto($dir); 
    Includer::include_view($dir, 'docs/view_route.php');


    Header::initHeader($dir, "Route - Docs", TRUE, "Docs", FALSE);
    DocsRouteView::initView($dir); 
    Footer::initFooter($dir, TRUE); 
