<?php
    //Proto Framework for PHP-MySQL
    //v2.2
    //Developed by Tummanoon Wacha-em

    include './includer/includer.php'; //include Includer file to operate
    Includer::include_auth(); //call a specified-function that would trigger include-effect

    $io = new IO(); //open Input/Output receiver for certain $_GET and $_POST data 
    $conn = new Connect(); //open Connection
    $secure = new Security($conn); //open Security for authorizing apiKey

    //check connection (also close itself when connection fails)
    if($conn->checkConn()->success){
        //check the given apiKey if it is authorized
        if($secure->checkSecurity()->success){
            //check specified methods from Input/Output
            if($io->method != NULL){
                $m = $io->method;
                $result = new Result();

                switch($m){
                    case 'edit':
                        $form = $io->post;
                        $result = FunAuth::editProfile($conn, $form);
                        break;
                }

                $io->output($result); //output as JSON
            }
        }

        $conn->closeConn(); //close connection
    }