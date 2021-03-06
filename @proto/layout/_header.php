<?php 
    class Header{ //header elements loader

        public static function initHeader($dir, $title, $showToolbar, $active, $sticky){
?>

            <!DOCTYPE html>
            <html lang="en" dir="ltr">

            <head>
                <meta charset="utf-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                <title><?php echo $title ?></title>

                <!-- Favicon -->
                <LINK rel="SHORTCUT ICON" href="<?php Asset::embedIcon($dir, 'favicon.ico') ?>">

                <!-- Prevent the demo from appearing in search engines (REMOVE THIS) -->
                <meta name="robots" content="noindex">

                <!-- Font Awesome Icons -->
                <link rel="stylesheet" href="<?php Nav::echoURL($dir, 'asset/theme/font-awesome/all.css'); ?>">

                <!-- Bootstrap -->
                <link rel="stylesheet" href="<?php Nav::echoURL($dir, 'asset/theme/bootstrap/css/bootstrap.min.css'); ?>">

                <!-- jQuery -->
                <script src="<?php Nav::echoURL($dir, 'asset/jquery/jquery.min.js'); ?>"></script>

                <!-- Proto-Framework Offline Database -->
                <script src="<?php Nav::echoURL($dir, 'asset/js/proto-db/connect.js') ?>"></script>

                <!-- Custom Style -->
                <?php Style::customStyle($dir, 'main.css');  ?>

                <script>var json = null;</script>
            </head>

            <body>
                <?php 
                    if($showToolbar){
                        Toolbar::initToolbar($dir, $active, $sticky); 
                    }
                ?>
<?php
        }
    }
?>
    
