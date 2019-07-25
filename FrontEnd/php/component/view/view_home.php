<?php
    class HomeView{
        public static function initView($dir){
?>
            <body>
                <?php Toolbar::initToolbar($dir, 'Home'); ?>

                <div class="jumbotron bg-light padding-top">
                  <h1 class="display-4"><?php echo App::$name ?></h1>
                  <p class="lead">Build your Front-End Website based on PHP, HTML5, and Javascript combined with third-party like Bootstrap and jQuery today.</p>
                  <a class="btn btn-outline-primary btn-lg" href="<?php Nav::printURL($dir, App::$pageGetStart); ?>" role="button">Get Start</a>
                  &nbsp;
                  <a class="btn btn-outline-success btn-lg" href="<?php Nav::printURL($dir, App::$pageFeedback); ?>" role="button">See Back-End version</a>
                  <hr class="my-4">
                  <small>Currently v4</small>
                </div>

                <?php Script::initScript($dir); ?>
<?php
        }
    }