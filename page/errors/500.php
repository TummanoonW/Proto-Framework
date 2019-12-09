<?php
    $dir = "../../";
    include_once $dir . '@proto/app.php'; 
    App::include_proto($dir); 

    ErrorPage2::initPage(
        '500', 
        'Internal Server Error', 
        'Sorry something went wrong on our website. We are currently trying to fix this problem.'
    );

