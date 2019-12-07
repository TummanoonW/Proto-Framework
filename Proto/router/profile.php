<?php

    $dir = "../";
    include_once $dir . '@proto/app.php'; //include Includer file to operate

    //include Proto Framework Architecture with retracked directory path
    App::include_proto($dir); 
    App::include_fun($dir, 'fun_auth.php');

    $apiKey = Session::getAPIKey(); //get secret API Key

    $api = new API($apiKey); //open API connection
    $io = new IO(); //open Input/Output receiver for certain $_GET and $_POST data

    //check if user exists
    if(Session::checkUserExisted()){
        //check if form were sent
        switch($io->method){
            case 'edit':
                if(isset($io->id) && isset($io->post->username)){
                    $form = new StdClass();
                    $form->ID = $io->id;

                    //if user changed username
                    if($io->post->username != "") $form->username = $io->post->username;
                    //if user changed password
                    if($io->post->password != "") $form->password = $io->post->password;

                    $result = FunAuth::editProfile($api, $form);
                        
                    if($result->success){ //if the API return result
                        $auth = Session::getAuth();
                        $auth->username = $form->username;
                        Session::logIn($auth); //update username
                        Nav::goto($dir, 'profile.php');
                    }else{
                        ErrorPage::initPage($dir, $result);
                    }
                }else{
                    Nav::gotoHome($dir); //return to home page
                }
                break;

            default:
                Nav::gotoHome($dir); //return to home page
                break;
        }
    }else{
        Nav::gotoHome($dir); //return to home page
    }