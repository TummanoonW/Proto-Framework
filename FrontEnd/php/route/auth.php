<?php

    $dir = "../";
    include_once $dir . 'includer/includer.php'; //include Includer file to operate

    //include Proto Framework Architecture with retracked directory path
    Includer::include_proto($dir); 
    Includer::include_fun($dir, 'fun_auth.php');

    $apiKey = Session::getAPIKey(); //get secret API Key

    $api = new API($apiKey); //open API connection
    $io = new IO(); //open Input/Output receiver for certain $_GET and $_POST data 

    switch($io->method){
        case 'login':
            $form = new Auth($io->post);
            $result = FunAuth::login($api, $form); //connect to API requesting login method
            if($result->success){ //if the API return result
                $auth = $result->response;
                Session::logIn($auth); //save login data to session
                Nav::gotoHome(); //redirect to profile page
            }else{
                ErrorPage::initPage($dir, $result);
            }
            break;

        case 'register':
            $form = new Auth($io->post);
            $result = FunAuth::register($api, $form); //connect to API requesting login method
            if($result->success){ //if the API return result
                $auth = $result->response;
                Nav::goto($dir, App::$pageRegisterSuccess . '?q={"username": "' . $auth . '"}'); //redirect to profile page
            }else{
                ErrorPage::initPage($dir, $result);
            }
            break;

        case 'edit':
            $form = new Auth($io->post);
            $result = FunAuth::edit($api, $form); //connect to API requesting login method
            if($result->success){ //if the API return result
                Nav::goBack(); //redirect to profile page
            }else{
                ErrorPage::initPage($dir, $result);
            }
            break;

        default:
            //Nav::gotoHome(); //return to home page
            break;
    }
    