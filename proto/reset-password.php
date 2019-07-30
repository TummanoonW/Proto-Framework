<?php
    //Proto Framework for PHP-HTML5
    //v4
    //Developed by Tummanoon Wacha-em

    $dir = "./"; //current directory
    include_once $dir . 'includer/includer.php';
    Includer::include_proto($dir);
    Includer::include_view($dir, 'view_reset-password.php');


    Header::initHeader($dir, "Reset Password", FALSE, '');
    ResetPasswordView::initView($dir);
    Footer::initFooter($dir, FALSE);


