<?php
    //Proto Framework
    //v5
    //Developed by Tummanoon Wacha-em

    $dir = "./"; //current directory
    include_once $dir . '@proto/app.php'; 
    App::include_proto($dir); 

    $io = new IO(); 

    if(isset($io->query->email)){
        $email = $io->query->email;
        Header::initHeader($dir, "Reset succeed - " . $email, FALSE, '', FALSE); 
        ?>
            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                  <h1 class="display-4"><i class="far fa-check-circle color-success"></i>&nbsp; Reset succeed - <?php echo $email ?></h1>
                  <p class="lead">You have reset password to the email "<?php echo $email ?>". You can chose to go to Home page or go to Login page now.</p>
                  <a class="btn btn-primary btn-lg" href="<?php Nav::echoHome($dir); ?>" role="button">Home</a>
                  <a class="btn btn-outline-success btn-lg" href="<?php Nav::echoURL($dir, 'login.php'); ?>" role="button">Login</a>
                </div>
            </div>
        <?php
        Footer::initFooter($dir, FALSE); 
    }else{
        Nav::gotoHome($dir);
    }


