<?php
    //Proto Framework for PHP-MySQL
    //v4
    //Developed by Tummanoon Wacha-em

    $dir = './';
    include $dir . 'includer/includer.php'; //include Includer file to operate
    Includer::include_proto($dir);
    Includer::include_fun($dir, 'fun_auth.php'); //call a specified-function that would trigger include-effect

    $io = new IO(); //open Input/Output receiver for certain $_GET and $_POST data 
    $conn = new Connect(App::$CONFIG); //open Connection

    //check connection (also close itself when connection fails)
    if($conn->checkConn()->success){
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

                default:
                    $result = new Result();
                    break;
            }

            $io->output($result); //output as JSON
        }

        $conn->closeConn(); //close connection
    }