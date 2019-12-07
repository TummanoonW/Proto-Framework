<?php

    $dir = "../";
    include_once $dir . '@proto/app.php'; //include Includer file to operate

    //include Proto Framework Architecture with retracked directory path
    App::include_proto($dir); 
    App::include_fun($dir, 'fun_example.php');

    $apiKey = Session::getAPIKey(); //get secret API Key

    $api = new API($apiKey); //open API connection
    $io = new IO(); //open Input/Output receiver for certain $_GET and $_POST data 

    switch($io->method){
        case 'add':
            $form = $io->post;
            $result = FunExample::add($api, $form); 
            if($result->success){ 
                Nav::goto($dir, "page/examples/ex-api.php");
            }else{
                ErrorPage::initPage($dir, $result);
            }
            break;

        case 'remove':
            $id = $io->id;
            $result = FunExample::remove($api, $id); 
            if($result->success){ 
                Nav::goto($dir, "page/examples/ex-api.php"); 
            }else{
                ErrorPage::initPage($dir, $result);
            }
            break;

        default:
            Nav::gotoHome($dir); //return to home page
            break;
    }
    