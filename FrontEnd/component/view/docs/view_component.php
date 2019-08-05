<?php
    class DocsComponentView{
        public static function initView($dir){
?>
          <nav class="p-4 navbar navbar-expand-">
              <div class="row w-100">
                <div class="col-sm-1 col-md-3 navbar-collapse">
                  <div class="nav flex-column nav-pills">
                    <a class="nav-link my-1 h6" href="<?php Nav::echoURL($dir, App::$pageDocs) ?>">Get Start</a>
                    <a class="nav-link my-1 h6" href="<?php Nav::echoURL($dir, App::$pageDocsIntroduction) ?>">Introduction</a>
                    <a class="nav-link my-1 h6" href="<?php Nav::echoURL($dir, App::$pageDocsIncluder) ?>">Includer</a>
                    <a class="nav-link my-1 h5 active" href="#item-0">Component</a>
                    <nav class="nav nav-pills flex-column">
                      <a class="nav-link ml-3" href="#item-1">Layout</a>
                      <nav class="nav nav-pills flex-column">
                        <a class="nav-link ml-4" href="#item-1-1">Header</a>
                        <a class="nav-link ml-4" href="#item-1-2">Toolbar</a>
                        <a class="nav-link ml-4" href="#item-1-3">Breadcrumb</a>
                        <a class="nav-link ml-4" href="#item-1-4">Footer</a>
                        <a class="nav-link ml-4" href="#item-1-5">Style</a>
                        <a class="nav-link ml-4" href="#item-1-6">Script</a>
                        <a class="nav-link ml-4" href="#item-1-7">ErrorPage</a>
                      </nav>
                      <a class="nav-link ml-3" href="#item-2">View</a>
                      <a class="nav-link ml-3" href="#item-3">Next Step</a>
                    </nav>
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
            <h3 id="item-0">Component</h3>
            <iframe class="youtube mt-1" src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>
          </div>
          <div class="container mt-4">
            <h4 id="item-1">Layout</h4>
            <div class="pt-3 pb-2">
              <h5 id="item-1-1">Header</h5>
              <p></p>
            </div>
            <div class="pt-3 pb-2">
              <h5 id="item-1-1">Toolbar</h5>
              <p></p>
            </div>
            <div class="pt-3 pb-2">
              <h5 id="item-1-1">Breadcrumb</h5>
              <p></p>
            </div>
            <div class="pt-3 pb-2">
              <h5 id="item-1-1">Footer</h5>
              <p></p>
            </div>
            <div class="pt-3 pb-2">
              <h5 id="item-1-1">Style</h5>
              <p></p>
            </div>
            <div class="pt-3 pb-2">
              <h5 id="item-1-1">Script</h5>
              <p></p>
            </div>
            <div class="pt-3 pb-2">
              <h5 id="item-1-1">ErrorPage</h5>
              <p></p>
            </div>
          </div>
          <div class="container mt-4">
            <h4 id="item-2">View</h4>
            <p></p>
          </div>
          <div class="container mt-4">
            <h4 id="item-3" class="mt-4">Next Step!</h4>
            <p>Now you are ready to code more with Proto-Framework.</p>
            <a href="<?php Nav::echoURL($dir, App::$pageDocsPages) ?>" class="btn btn-primary">Next<i class="fas fa-arrow-right ml-2"></i></a>
          </div>
<?php
        }
    }