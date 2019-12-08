<?php
    class DocsIntroductionView{
        public static function initView($dir){
?>
          <nav class="p-4 navbar navbar-expand-">
              <div class="row w-100">
                <div class="col-sm-1 col-md-3 navbar-collapse">
                  <div class="nav flex-column nav-pills">
                    <a class="nav-link my-1 h6" href="https://www.trialation.com/proto-framework-docs/">Get Start</a>
                    <a class="nav-link my-1 h5 active" href="#item-0">Introduction</a>
                    <nav class="nav nav-pills flex-column">
                      <a class="nav-link ml-3" href="#item-1">What is it</a>
                      <a class="nav-link ml-3" href="#item-2">Architecture</a>
                      <a class="nav-link ml-3" href="#item-3">Next Step</a>
                    </nav>
                    <a class="nav-link my-1 h6" href="<?php Nav::echoURL($dir, 'page/docs/includer.php') ?>">Includer</a>
                    <a class="nav-link my-1 h6" href="<?php Nav::echoURL($dir, 'page/docs/component.php') ?>">Component</a>
                    <a class="nav-link my-1 h6" href="<?php Nav::echoURL($dir, 'page/docs/pages.php') ?>">Pages</a>
                    <a class="nav-link my-1 h6" href="<?php Nav::echoURL($dir, 'page/docs/config.php') ?>">Config</a>
                    <a class="nav-link my-1 h6" href="<?php Nav::echoURL($dir, 'page/docs/route.php') ?>">Route</a>
                    <a class="nav-link my-1 h6" href="<?php Nav::echoURL($dir, 'page/docs/function.php') ?>">Function</a>
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
            <h2 id="item-0">Introduction</h2>
            <!--<iframe class="youtube mt-1" src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>-->
            <img src="<?php Asset::embedThumb($dir, 'banner.png') ?>">
          </div>
          <div class="container mt-4">
            <h3 id="item-1">What is it?</h3>
            <p>Proto-Framework is a Responsive web application framework based on PHP7, HTML5, CSS designed to be coded in the Object-Oriented-Programming (OOP) style. The framework also includes collaboration with the Proto API (Back-End version for doing things with the database) and Proto DB (Javascript-base Offline Database).</p>
          </div>
          <div class="container mt-4">
            <h3 id="item-2">Architecture</h3>
            <img src="<?php Asset::embedImage($dir, 'img6.png') ?>" class="w-75 h-auto p2 mb-4" alt="Front-End Architecture">
            <p></p>
          </div>
          <div class="container mt-4">      
            <h3 id="item-3" class="mt-4">Next Step!</h3>
            <p>It is important to understand the idea and concept of Proto-Framework which will be the fundamental understand in the coming step.</p>
            <a href="<?php Nav::echoURL($dir, 'page/docs/includer.php') ?>" class="btn btn-primary">Next<i class="fas fa-arrow-right ml-2"></i></a>
          </div>
<?php
        }
    }