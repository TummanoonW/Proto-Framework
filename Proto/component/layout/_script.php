<?php
    class Script{
        public static function customScript($dir, $file){
            $arr = explode(".", $file);
            $lenght = count($arr);
            if($lenght == 1) $file = $file . ".js";
?>
            <script src="<?php Nav::echoURL($dir, 'assets/js/' . $file); ?>"></script>
<?php
        }


    }