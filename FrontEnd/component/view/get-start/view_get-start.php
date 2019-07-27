<?php
    class GetStartView{
        public static function initView($dir){
?>
            <body>
                <?php Toolbar::initToolbar($dir, 'Get Start'); ?>

                <div class="jumbotron bg-light padding-top">
                  <h1 class="display-4">Get Start</h1>
                  <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam volutpat placerat sem, eu egestas velit pulvinar eu. Quisque eleifend ligula non lorem blandit, vel malesuada augue commodo. Curabitur leo nibh, blandit vitae efficitur placerat, luctus ac magna. Mauris tempus aliquam quam quis mollis. In sem magna, suscipit ac hendrerit nec, sodales at metus. Cras orci lectus, rhoncus in nibh in, tincidunt ultrices enim. Nunc quis augue ac nunc tempor laoreet vitae a orci. Suspendisse consequat dignissim nibh nec posuere.</p>
                  <hr class="my-4">
                  <small>Currently v<?php echo App::$version ?></small>
                </div>

<?php
        }
    }