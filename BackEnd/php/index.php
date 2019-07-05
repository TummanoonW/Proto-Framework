<?php
    header('Content-Type: text/html; charset=utf-8');
    //Proto Framework for PHP-MySQL
    //v2.0
    //Developed by Tummanoon Wacha-em

    include './includer/includer.php'; //include Includer file to operate
    Includer::include_auth(); //call a specified-function that would trigger include-effect

    //use method 'GET' protocol 'q' as JSON to query anything
    if(isset($_GET['q'])){
        $q = $_GET['q'];
        $query = json_decode($q);
    }

    //use method 'POST' protocol 'p' as JSON to post anything
    if(isset($_POST['p'])){
        $p = $_POST['p'];
        $post = json_decode($p);
    }

    $conn = new Connect(); //open connection

    //check connection (also close itself when connection fails)
    if($conn->checkConn()->success){

        //use method 'GET' protocol 'm' as specified method client wants to use
        if(isset($_GET['m'])){
            $m = $_GET['m'];
            $result = new Result();

            switch($m){
                case 'all':
                    $result = FunAuth::getAllAuths($conn);
                    break;
                case 'email':
                    $email = $query->email;
                    $result = FunAuth::getAuthByEmail($conn, $email);
                    break;
                case 'login':
                    $email = $query->email;
                    $password = $query->password;
                    $result = FunAuth::login($conn, $email, $password);
                default:
                    break;
            }

            echo $result->toJSON(); //output as JSON
        }
    }