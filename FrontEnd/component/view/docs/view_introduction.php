<?php
    class DocsIntroductionView{
        public static function initView($dir){
?>
          <nav class="p-4 navbar navbar-expand-">
              <div class="row w-100">
                <div class="col-sm-1 col-md-3 navbar-collapse">
                  <div class="nav flex-column nav-pills">
                    <a class="nav-link my-1 h6" href="<?php Nav::echoURL($dir, App::$pageDocs) ?>">Get Start</a>
                    <a class="nav-link my-1 h5 active" href="#item-0">Introduction</a>
                    <nav class="nav nav-pills flex-column">
                      <a class="nav-link ml-3" href="#item-1">What is it</a>
                      <a class="nav-link ml-3" href="#item-2">Architecture</a>
                      <a class="nav-link ml-3" href="#item-3">Next Step</a>
                    </nav>
                    <a class="nav-link my-1 h6" href="<?php Nav::echoURL($dir, App::$pageDocsIncluder) ?>">Includer</a>
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
            <h3 id="item-0">Introduction</h3>
            <iframe class="youtube mt-1" src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>
          </div>
          <div class="container mt-4">
            <h4 id="item-1">What is it?</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi tristique imperdiet nisi, eu tincidunt nulla vestibulum efficitur. Cras eget tempus ante, id pharetra urna. Integer.</p>
          </div>
          <div class="container mt-4">
            <h4 id="item-2">Architecture</h4>
            <img src="<?php Asset::embedImage($dir, 'img6.png') ?>" class="w-75 h-auto p2 mb-4" alt="Front-End Architecture">
            <p></p>
          </div>
          <div class="container mt-4">      
            <h4 id="item-3" class="mt-4">Next Step!</h4>
            <p>It is important to understand the idea and concept of Proto-Framework which will be the fundamental understand in the coming step.</p>
            <a href="<?php Nav::echoURL($dir, App::$pageDocsIncluder) ?>" class="btn btn-primary">Next<i class="fas fa-arrow-right ml-2"></i></a>
          </div>
<?php
        }
    }