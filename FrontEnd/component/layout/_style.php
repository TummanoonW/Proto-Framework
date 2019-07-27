<?php
    class Style{
        public static function customStyle($dir, $file){
?>
            <link rel="stylesheet" href="<?php echo Nav::printURL($dir, 'assets/css/' . $file); ?>">
<?php
        }
    }