<?php
    $dir = "../../"; //current directory
    include_once $dir . '@proto/app.php'; 
    App::include_proto($dir); 
    App::include_view($dir, 'proto-api/view_proto-api.php');

    $paths = array(
        new Path(FALSE, "Home", Nav::getHome($dir)),
        new Path(TRUE, "Proto-API Docs", "")
    );

    Header::initHeader($dir, "Proto-API Docs", TRUE, "More", TRUE);
    ProtoAPIView::initView($dir, $paths); 
    Footer::initFooter($dir, TRUE); 


