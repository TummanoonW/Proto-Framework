<?php
    $dir = "../";
    include_once $dir . '@proto/app.php'; //include Includer file to operate

    //include Proto Framework Architecture with retracked directory path
    App::include_proto($dir); 

    $conn = new Connect(App::$CONFIG); //open Database connection
    $io = new IO(); //open Input/Output receiver for certain $_GET and $_POST data 
    $table = "example";

    switch($io->method){
        case 'add':
            $form = new Item($io->post);
            $result = Fun::create($conn, $table, $form); 
            if($result->success){ 
                Nav::gotoPage($dir, "examples/ex-api.php");
            }else{
                ErrorPage::initPage($dir, $result);
            }
            break;

        case 'remove':
            $id = $io->id;
            $result = Fun::delete($conn, $table, $id); 
            if($result->success){ 
                Nav::gotoPage($dir, "examples/ex-api.php"); 
            }else{
                ErrorPage::initPage($dir, $result);
            }
            break;

        default:
            Nav::gotoHome($dir); //return to home page
            break;
    }
    
    $conn->closeConn();