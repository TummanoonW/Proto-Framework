<?php

    $dir = "../";
    include_once $dir . '@proto/app.php'; //include Includer file to operate

    //include Proto Framework Architecture with retracked directory path
    App::include_proto($dir); 
    App::include_fun($dir, 'fun_feedback.php');

    $apiKey = Session::getAPIKey(); //get secret API Key

    $api = new API($apiKey); //open API connection
    $io = new IO(); //open Input/Output receiver for certain $_GET and $_POST data 

    switch($io->method){
        case 'submit':
            if(isset($io->get->err)) $error_code = $io->get->err;
            else $error_code = NULL;

            if($io->post != NULL){
                $form = $io->post;    
                $form->error_code = $error_code;

                $result = FunFeedback::send($api, $form);
                if($result->success){
                    InfoPage::initPage($dir, 'Thank you for sending us feedback, we will use it to improve our system.');
                    Console::log('Result', $result);
                }else{
                    ErrorPage::initPage($dir, $result);
                    Console::log('Result', $result);
                }
            }
            break;
        default:
            Nav::gotoHome($dir); //return to home page
            break;
    }
    