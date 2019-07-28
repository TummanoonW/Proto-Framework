<?php
    class Style{
        public static function customStyle($dir, $file){
?>
            <link rel="stylesheet" href="<?php echo Nav::echoURL($dir, 'assets/css/' . $file) ?>">
<?php
        }
    }