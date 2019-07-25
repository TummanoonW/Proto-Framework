<?php
    class ErrorPage{
        public static function initPage($dir, $result){
            Header::initHeader($dir, "Error - " . $result->err->code); //initialize HTML header elements with '<<someone name>> 's Profile' as Title
?>
            <body>
                <?php Toolbar::initToolbar($dir, ''); ?>
                <div class="jumbotron bg-light padding-top">
                  <h1 class="display-4">Error <?php echo $result->err->code ?></h1>
                  <p class="lead"><?php echo $result->err->msg ?>!</p>
                  <hr class="my-4">
                  <p>If you find any problem you can just go back or send a feedback.</p>
                  <a class="btn btn-primary btn-lg" href="<?php Nav::printPrevious(); ?>" role="button">Go Back</a>
                  <a class="btn btn-outline-success btn-lg" href="<?php Nav::printURL($dir, App::$pageFeedback); ?>" role="button">Send a Feedback</a>
                </div>


<?php
            Script::initScript($dir); 
            Footer::initFooter($dir); //initialize HTML footer elements
        }
    }