<?php
    class DocsFunctionView{
        public static function initView($dir){
?>
          <nav class="p-4 navbar navbar-expand-">
              <div class="row w-100">
                <div class="col-sm-1 col-md-3 navbar-collapse">
                  <div class="nav flex-column nav-pills">
                    <a class="nav-link my-1 h6" href="<?php Nav::echoURL($dir, 'page/docs/') ?>">Get Start</a>
                    <a class="nav-link my-1 h6" href="<?php Nav::echoURL($dir, 'page/docs/introduction.php') ?>">Introduction</a>
                    <a class="nav-link my-1 h6" href="<?php Nav::echoURL($dir, 'page/docs/includer.php') ?>">Includer</a>
                    <a class="nav-link my-1 h6" href="<?php Nav::echoURL($dir, 'page/docs/component.php') ?>">Component</a>
                    <a class="nav-link my-1 h6" href="<?php Nav::echoURL($dir, 'page/docs/pages.php') ?>">Pages</a>
                    <a class="nav-link my-1 h6" href="<?php Nav::echoURL($dir, 'page/docs/config.php') ?>">Config</a>
                    <a class="nav-link my-1 h6" href="<?php Nav::echoURL($dir, 'page/docs/route.php') ?>">Route</a>
                    <a class="nav-link my-1 h5 active" href="#item-0">Function</a>
                    <nav class="nav nav-pills flex-column">
                      <a class="nav-link ml-3" href="#item-1">Guide</a>
                      <a class="nav-link ml-3" href="#item-2">Example</a>
                      <a class="nav-link ml-3" href="#item-3">Next Step</a>
                    </nav>
                    <a class="nav-link my-1 h6" href="<?php Nav::echoURL($dir, 'page/docs/asset.php') ?>">Asset</a>
                  </div>
                </div>
                <div class="col-sm-11 col-md-9">
                    <?php self::initPageGetStart($dir) ?>
                </div>
              </div>
            </nav> 

<?php
        }

        public static function initPageGetStart($dir){
?>
          <div class="container">
            <h2 id="item-0">Function</h2>
            <!--<iframe class="youtube mt-1" src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>-->
            <img src="<?php Asset::embedThumb($dir, 'banner.png') ?>">
          </div>
          <div class="container mt-4">
            <h3 id="item-1">Guides</h3>
            <p></p>
          </div>
          <hr>
          <div class="container mt-4">
            <h3 id="item-2">Example</h3>
          </div>
          <hr>
          <div class="container mt-4">
            <h3 id="item-2">Next Step!</h3>
            <p>Now you are ready to code more with Proto-Framework.</p>
            <a href="<?php Nav::echoURL($dir, 'page/docs/asset.php') ?>" class="btn btn-primary">Next<i class="fas fa-arrow-right ml-2"></i></a>
          </div>
<?php
        }
    }