<?php
    class DocsAssetView{
        public static function initView($dir){
?>
          <nav class="p-4 navbar navbar-expand-">
              <div class="row w-100">
                <div class="col-sm-1 col-md-3 navbar-collapse">
                  <div class="nav flex-column nav-pills">
                    <a class="nav-link my-1 h6" href="https://www.trialation.com/proto-framework-docs/">Get Start</a>
                    <a class="nav-link my-1 h6" href="<?php Nav::echoURL($dir, 'page/docs/introduction.php') ?>">Introduction</a>
                    <a class="nav-link my-1 h6" href="<?php Nav::echoURL($dir, 'page/docs/includer.php') ?>">Includer</a>
                    <a class="nav-link my-1 h6" href="<?php Nav::echoURL($dir, 'page/docs/component.php') ?>">Component</a>
                    <a class="nav-link my-1 h6" href="<?php Nav::echoURL($dir, 'page/docs/pages.php') ?>">Pages</a>
                    <a class="nav-link my-1 h6" href="<?php Nav::echoURL($dir, 'page/docs/config.php') ?>">Config</a>
                    <a class="nav-link my-1 h6" href="<?php Nav::echoURL($dir, 'page/docs/route.php') ?>">Route</a>
                    <a class="nav-link my-1 h6" href="<?php Nav::echoURL($dir, 'page/docs/function.php') ?>">Function</a>
                    <a class="nav-link my-1 h5 active" href="#item-0">Asset</a>
                    <nav class="nav nav-pills flex-column">
                        <a class="nav-link ml-3" href="#item-1">CSS</a>
                        <a class="nav-link ml-3" href="#item-2">JS</a>
                        <a class="nav-link ml-3" href="#item-3">Images</a>
                        <a class="nav-link ml-3" href="#item-4">jQuery</a>
                        <a class="nav-link ml-3" href="#item-5">Theme</a>
                    </nav>
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
            <h2 id="item-0">Asset</h2>
            <!--<iframe class="youtube mt-1" src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>-->
            <img src="<?php Asset::embedThumb($dir, 'banner.png') ?>">
          </div>
          <div class="container mt-4">
            <h3 id="item-1">CSS</h3>
            <p></p>
          </div>
          <div class="container mt-4">
            <h3 id="item-2">JS</h3>
            <p></p>
          </div>
          <div class="container mt-4">
            <h3 id="item-3">Images</h3>
            <p></p>
          </div>
          <div class="container mt-4">
            <h3 id="item-4">jQuery</h3>
            <p></p>
          </div>
          <div class="container mt-4">
            <h3 id="item-5">Theme</h3>
            <p></p>
          </div>
          <div class="container mt-4">
            <h3 id="item-2" class="mt-4">Ende!</h3>
            <p>Now you are ready to code more with Proto-Framework.</p>
            <a href="<?php Nav::echoURL($dir, "page/examples/ex-api.php") ?>" class="btn btn-outline-info">Proto API<i class="fas fa-server ml-2"></i></a>
            <a href="<?php Nav::echoURL($dir, "page/examples/ex-off-db.php") ?>" class="btn btn-outline-success">Proto DB<i class="fas fa-database ml-2"></i></a>
          </div>
<?php
        }
    }