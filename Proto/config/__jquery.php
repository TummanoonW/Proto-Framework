<?php
    class JQuery{
        public static function form($formId, $btnId, $actionURL, $redirectURL){
            echo "<script>
                let btn = document.getElementById('$btnId');
                btn.onclick = function(){
                    let f = document.getElementById('$formId');
                    let arr = Array.from(f);
                    var vals = {};
                    arr.forEach((e) => {
                        vals[e.name] = e.value;
                    });
                    $.post('$actionURL', vals)
                      .done(function(data) {
                        window.location = '$redirectURL';
                    });
                };
            </script>";
        }

        public static function get($url){
            echo '<script>' . '</script>';
        }
    }