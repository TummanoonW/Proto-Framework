<?php
    class RegisterSuccessView{
        public static function initView($dir, $username){
?>
          <div class="jumbotron jumbotron-fluid">
            <div class="container">
              <h1 class="display-4"><i class="far fa-check-circle color-success"></i>&nbsp; Welcome to <?php echo App::$name ?> - <?php echo $username ?></h1>
              <p class="lead">You have registered to the system. You can chose to go to Home page or go to Login page now.</p>
              <a class="btn btn-primary btn-lg" href="<?php Nav::printHome($dir); ?>" role="button">Home</a>
              <a class="btn btn-outline-success btn-lg" href="<?php Nav::printURL($dir, App::$pageLogin); ?>" role="button">Login</a>
            </div>
          </div>
<?php
        }
    }