<?php
    //Proto Framework for PHP-HTML5
    //v4
    //Developed by Tummanoon Wacha-em

    $dir = "../../"; //current directory
    include_once $dir . '@proto/app.php';
    App::include_proto($dir);
    App::include_view($dir, 'examples/view_off-db.php');


    $paths = array(
        new Path(FALSE, "Home", Nav::getHome($dir)),
        new Path(FALSE, "Examples", ""),
        new Path(TRUE,  "Proto DB", "")
    );

    Header::initHeader($dir, "Proto DB", TRUE, 'Examples', TRUE); 
    ExOffDBView::initView($dir, $paths); 
    Footer::initFooter($dir, TRUE); 


