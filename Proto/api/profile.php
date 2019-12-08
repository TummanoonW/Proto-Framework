<?php
    //Proto Framework
    //v5
    //Developed by Tummanoon Wacha-em

    $dir = './';
    include $dir . '@proto/app.php'; //include Includer file to operate
    App::include_proto($dir);
    App::include_fun($dir, 'fun_auth.php'); //call a specified-function that would trigger include-effect

    $io = new IO(); //open Input/Output receiver for certain $_GET and $_POST data 
    $conn = new Connect(App::$CONFIG); //open Connection
    $secure = new Security($conn); //open Security for authorizing apiKey

    //check connection (also close itself when connection fails)
    $result = $conn->checkConn();
    if($result->success){

        //check the given apiKey if it is authorized
        $result = $secure->checkSecurity();
        if($result->success){
            
            //check specified methods from Input/Output
            if($io->method != NULL){
                $m = $io->method;
            
                switch($m){
                    case 'edit':
                        $form = $io->post;
                        $result = FunAuth::editProfile($conn, $form);
                        break;
                    default:
                        $result = new Result();
                        break;
                }
            }
        }
    }


    $conn->closeConn(); //close connection
    $io->output($result);