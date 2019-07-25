<?php 
    class Header{ //header elements loader

        public static function initHeader($dir, $title){
?>

            <!DOCTYPE html>
            <html lang="en" dir="ltr">

            <head>
                <meta charset="utf-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                <title><?php echo $title ?></title>

                <!-- Prevent the demo from appearing in search engines (REMOVE THIS) -->
                <meta name="robots" content="noindex">

                <!-- Font Awesome Icons -->
                <link rel="stylesheet" href="<?php Nav::printURL($dir, 'assets/theme/font-awesome/all.css'); ?>">

                <!-- Bootstrap -->
                <link rel="stylesheet" href="<?php Nav::printURL($dir, 'assets/theme/bootstrap/css/bootstrap.min.css'); ?>">

                <!-- jQuery -->
                <script src="<?php Nav::printURL($dir, 'assets/jquery/jquery.min.js'); ?>"></script>

                <!-- Custom Style -->
                <?php Style::customStyle($dir, 'main.css');  ?>
            </head>
<?php
        }
    }
?>
    
