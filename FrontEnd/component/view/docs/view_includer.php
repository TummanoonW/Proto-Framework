<?php
    class DocsIncluderView{
        public static function initView($dir){
?>
          <nav class="p-4 navbar navbar-expand-">
              <div class="row w-100">
                <div class="col-sm-1 col-md-3 navbar-collapse">
                  <div class="nav flex-column nav-pills">
                    <a class="nav-link my-1 h6" href="<?php Nav::echoURL($dir, App::$pageDocs) ?>">Get Start</a>
                    <a class="nav-link my-1 h6" href="<?php Nav::echoURL($dir, App::$pageDocsIntroduction) ?>">Introduction</a>
                    <a class="nav-link my-1 h5 active" href="#item-0">Includer</a>
                    <a class="nav-link my-1 h6" href="<?php Nav::echoURL($dir, App::$pageDocsComponent) ?>">Component</a>
                    <a class="nav-link my-1 h6" href="<?php Nav::echoURL($dir, App::$pageDocsPages) ?>">Pages</a>
                    <a class="nav-link my-1 h6" href="<?php Nav::echoURL($dir, App::$pageDocsConfig) ?>">Config</a>
                    <a class="nav-link my-1 h6" href="<?php Nav::echoURL($dir, App::$pageDocsRoute) ?>">Route</a>
                    <a class="nav-link my-1 h6" href="<?php Nav::echoURL($dir, App::$pageDocsFunction) ?>">Function</a>
                    <a class="nav-link my-1 h6" href="<?php Nav::echoURL($dir, App::$pageDocsAsset) ?>">Asset</a>
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
            <h3 id="item-0">Includer</h3>
            <iframe class="youtube mt-1" src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>
          </div>
          <div class="container mt-4">
            <h4 id="item-1">Guides</h4>
            <p></p>
          </div>
          <div class="container mt-4">    
            <h4 id="item-2" class="mt-4">Next Step!</h4>
            <p>Now you are ready to code more with Proto-Framework.</p>
            <a href="<?php Nav::echoURL($dir, App::$pageDocsComponent) ?>" class="btn btn-primary">Next<i class="fas fa-arrow-right ml-2"></i></a>
          </div>
<?php
        }
    }