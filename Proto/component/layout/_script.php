<?php
    class Script{
        public static function customScript($dir, $file){
?>
            <script src="<?php Nav::echoURL($dir, 'assets/js/' . $file); ?>"></script>
<?php
        }


    }