<?php
    //Proto Framework for PHP-MySQL
    //v4
    //Developed by Tummanoon Wacha-em

    $dir = './';

    include $dir . 'includer/includer.php'; //include Includer file to operate
    Includer::include_proto($dir);
    Includer::include_fun($dir, 'fun_example.php'); //call a specified-function that would trigger include-effect

    $io = new IO(); //open Input/Output receiver for certain $_GET and $_POST data 
    $conn = new Connect(App::$CONFIG); //open Connection

    //check connection (also close itself when connection fails)
    $result = $conn->checkConn();
    if($result->success){

        //check specified methods from Input/Output
        if($io->method != NULL){
            $m = $io->method;

            switch($m){
                case 'add':
                    $form = $io->post;
                    $result = FunExample::addItem($conn, $form);
                    break;

                case 'remove':
                    $id = $io->query->id;
                    $result = FunExample::removeItem($conn, $id);
                    break;

                case 'all':
                    $result = FunExample::getItems($conn);
                    break;

                default:
                    $result = new Result();
                    break;
            }

        }
    }

$conn->closeConn(); //close connection
$io->output($result); //output as JSON