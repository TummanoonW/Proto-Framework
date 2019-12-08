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

    //check connection (also close itself when connection fails)
    $result = $conn->checkConn();
    if($result->success){

        //check specified methods from Input/Output
        if($io->method != NULL){
            $m = $io->method;

            switch($m){
                case 'all':
                    $result = FunAuth::getAllAuths($conn);
                    break;

                case 'email':
                    $email = $io->query->email;
                    $result = FunAuth::getAuthByEmail($conn, $email);
                    break;

                case 'id':
                    $id = $io->query->id;
                    $result = FunAuth::getAuthByID($conn, $id);
                    break;

                case 'login':
                    $email = $io->post->email;
                    $password = $io->post->password;
                    $result = FunAuth::login($conn, $email, $password);
                    break;

                case 'register':
                    $result = FunAuth::register($conn, $io->post);
                    break;

                case 'reset':
                    $email = $io->post->email;
                    $n_password = $io->post->password;
                    $result = FunAuth::reset($conn, $email, $n_password);
                    break;

                default:
                    $result = new Result();
                    break;
            }

        }
    }

$conn->closeConn(); //close connection
$io->output($result); //output as JSON