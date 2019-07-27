<?php
    class AboutView{
        public static function initView($dir){
?>
            <?php Toolbar::initToolbar($dir, 'Documentation'); ?>
            <div class="jumbotron bg-light padding-top">
              <h1 class="display-4"><?php echo App::$name ?></h1>
              <p class="lead"><i class="fas fa-code"></i>&nbsp; Developed by Tummanoon Wancha-em</p>
              <p>Published by <a target="_blank" href="https://www.trialation.com/">Trialation</a></p>
              <p>License - MIT</p>              
              <p>Version - <?php echo App::$version ?></p>
              <p>Last update - <?php echo App::$lastUpdate ?></p>
              <hr class="my-4">
              <p class="lead"><i class="fas fa-code-branch"></i>&nbsp; Third parties</p>
              <p>Web component library - <a target="_blank" href="https://getbootstrap.com/">Bootstrap 4</a></p>
              <p>Icon set library - <a target="_blank" href="https://fontawesome.com/">Font Awesome</a></p>
              <p>Javascript library - <a target="_blank" href="https://jquery.com/">jQuery 3.4.1</a></p>
            </div>
<?php 
        }
    }