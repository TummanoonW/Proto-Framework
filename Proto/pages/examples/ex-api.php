<?php
    //Proto Framework for PHP-HTML5
    //v4
    //Developed by Tummanoon Wacha-em

    $dir = "../../"; //current directory
    include_once $dir . 'includer/includer.php'; 
    Includer::include_proto($dir); 
    Includer::include_view($dir, 'examples/view_api.php');
    Includer::include_fun($dir, 'fun_example.php');

    $apiKey = Session::getAPIKey(); //get secret API Key
    $api = new API($apiKey); //open API connection

    $paths = array(
        new Path(FALSE, "Home", Nav::getHome($dir)),
        new Path(FALSE, "Examples", ""),
        new Path(TRUE,  "Proto API", "")
    );

    $items = array(
        (object) array(
            "ID" => NULL,
            "text" => "Daily wage",
            "date" => "2019/07/27 12:12:12",
            "value" => 500
        ),
        (object) array(
            "ID" => NULL,
            "text" => "Bratwürst",
            "date" => "2019/07/27 12:12:12",
            "value" => -44
        )
    );

    $result = FunExample::all($api);
    if($result->success)$items = $result->response;

    Header::initHeader($dir, "Proto API", TRUE, 'Examples', TRUE); 
    ExAPIView::initView($dir, $paths, $items); 
    Footer::initFooter($dir, TRUE); 


