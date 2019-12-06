<?php
    $dir = "../../"; //current directory
    include_once $dir . '@proto/app.php'; 
    App::include_proto($dir); 
    App::include_view($dir, 'docs/view_route.php');


    Header::initHeader($dir, "Route - Docs", TRUE, "Docs", FALSE);
    DocsRouteView::initView($dir); 
    Footer::initFooter($dir, TRUE); 
