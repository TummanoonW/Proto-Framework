<?php
    //Proto Framework
    //v5
    //Developed by Tummanoon Wacha-em

    $dir = "./"; //current directory
    include_once $dir . '@proto/app.php'; //include Includer file to operate
    App::include_proto($dir); //include Proto Framework Architecture

    $io = new IO(); //open Input/Output receiver for certain $_GET and $_POST data 

    if(isset($io->query->username)){
        $username = $io->query->username;
        Header::initHeader($dir, "Welcome - " . $username, FALSE, '', FALSE);
        ?>
            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                  <h1 class="display-4"><i class="far fa-check-circle color-success"></i>&nbsp; Welcome to <?php echo App::$name ?> - <?php echo $username ?></h1>
                  <p class="lead">You have registered to the system. You can chose to go to Home page or go to Login page now.</p>
                  <a class="btn btn-primary btn-lg" href="<?php Nav::echoHome($dir); ?>" role="button">Home</a>
                  <a class="btn btn-outline-success btn-lg" href="<?php Nav::echoURL($dir, 'login.php'); ?>" role="button">Login</a>
                </div>
            </div>
        <?php
        Footer::initFooter($dir, FALSE);
    }else{
        Nav::gotoHome($dir);
    }


