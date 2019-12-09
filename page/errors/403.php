<?php
    $dir = "../../";
    include_once $dir . '@proto/app.php'; 
    App::include_proto($dir); 

    ErrorPage2::initPage(
        '403', 
        'Forbidden', 
        'Sorry but you do not have permission to access this path.'
    );

