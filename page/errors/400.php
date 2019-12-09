<?php
    $dir = "../../";
    include_once $dir . '@proto/app.php'; 
    App::include_proto($dir); 

    ErrorPage2::initPage(
        '400', 
        'Bad Request', 
        'Sorry but perhaps it is not valid JSON, or not the right URL.'
    );

