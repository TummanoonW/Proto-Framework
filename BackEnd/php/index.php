<?php
    //Proto Framework for PHP-MySQL
    //v2.3
    //Developed by Tummanoon Wacha-em

    include './includer/includer.php'; //include Includer file to operate
    Includer::include_auth(); //call a specified-function that would trigger include-effect

    $io = new IO(); //open Input/Output receiver for certain $_GET and $_POST data 
    $conn = new Connect(); //open Connection

    //check connection (also close itself when connection fails)
    if($conn->checkConn()->success){
        //check specified methods from Input/Output
        if($io->method != NULL){
            $m = $io->method;
            $result = new Result();

            switch($m){
                case 'all':
                    $result = FunAuth::getAllAuths($conn);
                    break;
                case 'email':
                    $email = $io->query->email;
                    $result = FunAuth::getAuthByEmail($conn, $email);
                    break;
                case 'login':
                    $email = $io->query->email;
                    $password = $io->query->password;
                    $result = FunAuth::login($conn, $email, $password);
                case 'register':
                    $result = FunAuth::register($conn, $io->post);
                default:
                    break;
            }

            $io->output($result); //output as JSON
        }

        $conn->closeConn(); //close connection
    }