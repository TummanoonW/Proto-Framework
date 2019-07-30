<?php
    class ErrorPage{
        public static function initPage($dir, $result){
            Header::initHeader($dir, "Error - " . $result->err->code, TRUE, ''); //initialize HTML header elements with '<<someone name>> 's Profile' as Title
?>
            <div class="jumbotron bg-light padding-top">
              <h1 class="display-4"><i class="far fa-frown"></i>&nbsp; Error <?php echo $result->err->code ?></h1>
              <p class="lead"><?php echo $result->err->msg ?>!</p>
              <hr class="my-4">
              <p>If you find any problem you can just go back or send a feedback.</p>
              <a class="btn btn-primary btn-lg" href="<?php Nav::echoPrevious(); ?>" role="button">Go Back</a>
            </div>
<?php
            Footer::initFooter($dir, FALSE); //initialize HTML footer elements
        }
    }