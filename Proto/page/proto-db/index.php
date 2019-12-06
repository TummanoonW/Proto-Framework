<?php
    $dir = "../../"; //current directory
    include_once $dir . '@proto/app.php'; 
    App::include_proto($dir); 
    App::include_view($dir, 'proto-db/view_proto-db.php');

    $paths = array(
        new Path(FALSE, "Home", Nav::getHome($dir)),
        new Path(TRUE, "Proto-DB Docs", "")
    );

    Header::initHeader($dir, "Proto-DB Docs", TRUE, "More", TRUE);
    ProtoDBView::initView($dir, $paths); 
    Footer::initFooter($dir, TRUE); 


