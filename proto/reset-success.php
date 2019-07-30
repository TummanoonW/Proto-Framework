<?php
    //Proto Framework for PHP-HTML5
    //v4
    //Developed by Tummanoon Wacha-em

    $dir = "./"; //current directory
    include_once $dir . 'includer/includer.php'; 
    Includer::include_proto($dir); 
    Includer::include_view($dir, 'view_reset-success.php');

    $io = new IO(); 

    if(isset($io->query->email)){
        $email = $io->query->email;
        Header::initHeader($dir, "Reset succeed - " . $email, FALSE, ''); 
        ResetSuccessView::initView($dir, $email);
        Footer::initFooter($dir, FALSE); 
    }else{
        Nav::gotoHome($dir);
    }


