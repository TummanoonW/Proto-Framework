<?php
    class Footer{ //footer elements loader

        public static function initFooter($dir, $showFooter){
?>
                <?php if($showFooter){ ?>
                    <footer class="margin-top text-muted bg-light">
                      <div class="container-fluid p-2 p-md-4">
                        <ul class="nav">
                          <li class="nav-item">
                            <a class="nav-link" href="https://github.com/TummanoonW/Proto-Framework" target="_blank">Github</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="https://www.trialation.com/products/proto-framework" target="_blank">Back-End version</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="<?php Nav::echoURL($dir, App::$pageGetStart); ?>">Get Start</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="<?php Nav::echoURL($dir, App::$pageAbout) ?>">About</a>
                          </li>
                        </ul>

                        <div class="p-3">
                            <p>Designed and built by <a href="<?php Nav::echoURL($dir, App::$pageAbout) ?>">Tummanoon Wancha-em</a> with the help of <a href="https://github.com/TummanoonW/Proto-Framework/graphs/contributors" target="_blank">our contributors</a>.</p>
                            <p>Currently v<?php echo App::$version ?>. Code licensed <a href="https://github.com/TummanoonW/Proto-Framework/blob/master/LICENSE" target="_blank" rel="license noopener">MIT </a>, docs <a href="https://creativecommons.org/licenses/by/3.0/" target="_blank">CC BY 3.0</a>.</p>
                        </div>
                      </div>
                    </footer>
                <?php } ?>

                <?php Script::initScript($dir); ?>
            </body>
            </html>
<?php
        }
    }
?>