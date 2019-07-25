<?php
    class ProfileView{ ////profile HTML elements loader

        public static function initView($dir, $auth){
?>
            <body>
                <?php Toolbar::initToolbar($dir, 'Profile'); ?>
                
                <div class="container padding-top">
                    <a href="<?php Nav::printURL($dir, App::$routeLogOut); ?>" class="btn btn-outline-danger">
                        <i class="fas fa-sign-out-alt"></i>
                        Log Out
                    </a>
                </div>

                <?php Script::initScript($dir); ?>
<?php
        }

    }