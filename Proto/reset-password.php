<?php
    //Proto Framework for PHP-HTML5
    //v4
    //Developed by Tummanoon Wacha-em

    $dir = "./"; //current directory
    include_once $dir . '@proto/app.php';
    App::include_proto($dir);
    App::include_view($dir, 'view_reset-password.php');


    Header::initHeader($dir, "Reset Password", FALSE, '', FALSE);
    ResetPasswordView::initView($dir);
    Footer::initFooter($dir, FALSE);


