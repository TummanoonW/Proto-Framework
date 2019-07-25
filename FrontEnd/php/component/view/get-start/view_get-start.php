<?php
    class GetStartView{
        public static function initView($dir){
?>
            <body>
                <?php Toolbar::initToolbar($dir, 'Get Start'); ?>
                
                <?php Script::initScript($dir); ?>
<?php
        }
    }