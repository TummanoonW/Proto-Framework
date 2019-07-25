<?php
    class AboutView{
        public static function initView($dir){
?>
            <?php Toolbar::initToolbar($dir, 'Documentation'); ?>
            <div class="jumbotron bg-light padding-top">
              <h1 class="display-4"><?php echo App::$name ?></h1>
              <p class="lead">Developed by Tummanoon Wancha-em</p>
              <hr class="my-4">
              <small>Currently v4</small>
            </div>
            <?php Script::initScript($dir); ?>
<?php 
        }
    }