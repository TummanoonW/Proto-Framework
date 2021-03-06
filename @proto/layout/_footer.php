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
                            <a class="nav-link" href="https://www.trialation.com/proto-framework-docs/" target="_blank">Get Start</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="https://www.trialation.com/proto-framework-docs/making-apis/" target="_blank">Proto API</a>
                          </li>
                          <li>
                            <a class="nav-link" href="https://www.trialation.com/proto-framework-docs/proto-db/" target="_blank">Proto DB</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="<?php Nav::echoURL($dir, 'about.php') ?>">About</a>
                          </li>
                        </ul>

                        <div class="p-3">
                            <p>Designed and built by <a href="<?php Nav::echoURL($dir, 'about.php') ?>">Tummanoon Wancha-em</a> with the help of <a href="https://github.com/TummanoonW/Proto-Framework/graphs/contributors" target="_blank">our contributors</a>.</p>
                            <p>Powered by <a href="https://www.trialation.com/proto-framework/" target="_blank"><?php echo App::$framework ?></a> .Currently v<?php echo App::$version ?>. Code licensed <a href="https://github.com/TummanoonW/Proto-Framework/blob/master/LICENSE" target="_blank" rel="license noopener">MIT </a>, docs <a href="https://creativecommons.org/licenses/by/3.0/" target="_blank">CC BY 3.0</a>.</p>
                        </div>
                      </div>
                    </footer>
                <?php } ?>
                
                <!-- Bootstrap -->
                <script src="<?php Nav::echoURL($dir, 'asset/theme/bootstrap/js/bootstrap.min.js'); ?>"></script>

                <?php Script::customScript($dir, 'main.js') ?>
            </body>
            </html>
<?php
        }
    }
?>