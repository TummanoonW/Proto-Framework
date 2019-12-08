<?php

    $dir = "../";
    include_once $dir . '@proto/app.php'; //include Includer file to operate

    //include Proto Framework Architecture with retracked directory path
    App::include_proto($dir); 
    App::include_fun($dir, 'fun_auth.php');

    $conn = new Connect(App::$CONFIG); //open Database connection
    $io = new IO(); //open Input/Output receiver for certain $_GET and $_POST data 

    switch($io->method){
        case 'login':
            $form = $io->post;
            $result = FunAuth::login($conn, $form); //connect to Database requesting login method
            if($result->success){ //if the Database return result
                $auth = $result->response;
                Session::logIn($auth); //save login data to session
                Nav::gotoHome($dir); //redirect to profile page
            }else{
                ErrorPage::initPage($dir, $result);
            }
            break;

        case 'register':
            $form = $io->post;
            $result = FunAuth::register($conn, $form); //connect to Database requesting login method
            if($result->success){ //if the Database return result
                $auth = $result->response;
                Nav::goto($dir, 'register-success.php' . '?q={"username": "' . $auth->username . '"}'); //redirect to profile page
            }else{
                ErrorPage::initPage($dir, $result);
            }
            break;

        case 'reset':
            $form = $io->post;
            $result = FunAuth::reset($conn, $form->email, $form->password);
            if($result->success){
                $email = $form->email;
                Nav::goto($dir, 'reset-success.php' . '?q={"email": "' . $email . '"}');
            }else{
                ErrorPage::initPage($dir, $result);
            }
            break;

        default:
            Nav::gotoHome($dir); //return to home page
            break;
    }
    