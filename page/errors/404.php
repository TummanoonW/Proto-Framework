<?php
    $dir = "../../";
    include_once $dir . '@proto/app.php'; 
    App::include_proto($dir); 

    ErrorPage2::initPage(
        '404', 
        'This Page Could Not Be Found', 
        'Sorry but the page you are looking for does not exist, have been removed. name changed or is temporarily unavailable'
    );

