<?php
    class Script{
        public static function initScript($dir){
?>
            <!-- Bootstrap -->
            <script src="<?php Nav::printURL($dir, 'assets/theme/bootstrap/js/bootstrap.min.js'); ?>"></script>
<?php
        }

        public static function customScript($dir, $file){
?>
            <script src="<?php Nav::printURL($dir, 'assets/js/' . $file); ?>"></script>
<?php
        }


    }