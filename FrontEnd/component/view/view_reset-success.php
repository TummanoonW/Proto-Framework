<?php
    class ResetSuccessView{
        public static function initView($dir, $email){
?>
          <div class="jumbotron jumbotron-fluid">
            <div class="container">
              <h1 class="display-4"><i class="far fa-check-circle color-success"></i>&nbsp; Reset succeed - <?php echo $email ?></h1>
              <p class="lead">You have reset password to the email "<?php echo $email ?>". You can chose to go to Home page or go to Login page now.</p>
              <a class="btn btn-primary btn-lg" href="<?php Nav::echoHome($dir); ?>" role="button">Home</a>
              <a class="btn btn-outline-success btn-lg" href="<?php Nav::echoURL($dir, App::$pageLogin); ?>" role="button">Login</a>
            </div>
          </div>
<?php
        }
    }