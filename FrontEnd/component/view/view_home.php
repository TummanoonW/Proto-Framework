<?php
    class HomeView{
        public static function initView($dir){
?>
            <body>
                <?php Toolbar::initToolbar($dir, 'Home'); ?>

                <div class="jumbotron bg-light padding-top">
                  <h1 class="display-4"><?php echo App::$name ?></h1>
                  <p class="lead">Build your Front-End Website based on PHP7, HTML5, CSS and Javascript with integrated Offline Database library - combined with third-party like Bootstrap and jQuery today.</p>
                  <a class="btn btn-outline-primary btn-lg" href="<?php Nav::printURL($dir, App::$pageGetStart); ?>" role="button">Get Start</a>
                  &nbsp;
                  <a class="btn btn-outline-success btn-lg" target="_blank" href="https://www.trialation.com/products/proto-framework" role="button">See Back-End version</a>
                  <hr class="my-4">
                  <small>Currently v<?php echo App::$version ?></small>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-"></div>
                        <div class="col-"></div>
                        <div class="col-"></div>
                    </div>
                </div>
<?php
        }
    }