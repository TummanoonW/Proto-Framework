<?php
    class DocsRouteView{
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
                    <a class="nav-link my-1 h5 active" href="#item-0">Route</a>
                    <nav class="nav nav-pills flex-column">
                      <a class="nav-link ml-3" href="#item-1">Guide</a>
                      <a class="nav-link ml-3" href="#item-2">Example</a>
                      <a class="nav-link ml-3" href="#item-3">Next Step</a>
                    </nav>
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
            <h2 id="item-0">Route</h2>
            <!--<iframe class="youtube mt-1" src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>-->
            <img src="<?php Asset::embedThumb($dir, 'banner.png') ?>">
          </div>
          <div class="container mt-4">
            <h3 id="item-1">Guide</h3>
            <p>Route is the directory <span class="text-info">./route/</span>. It is the place to keep all the routing pages which to be used to receive data form, process, or connect to API directly.</p>
          </div>
          <hr>
          <div class="container mt-4">
            <h3 id="item-2">Example</h3>
            <p>Create a file named <span class="text-info">simple-route.php</span> on the directory <span class="text-info">./route/</span></p>
            <div class="p-4 rounded bg-dark">
              <code class="text-warning">
                &lt;?php
                <br><span class="pl-2">$dir = "../"; </span>
                <br><span class="pl-2">include_once $dir . '@proto/app.php'; </span>
                <br><span class="pl-2">App::include_proto($dir); </span>
                <br>
                <br><span class="pl-2">$io = new IO();</span>
                <br>
                <br><span class="pl-2">switch($io->method){</span>
                <br><span class="pl-3">case 'product':</span>
                <br><span class="pl-4">$x = $io->query->x;</span>
                <br><span class="pl-4">$y = $io->query->y;</span>
                <br><span class="pl-4">$product = $x * $y;</span>
                <br><span class="pl-4">InfoPage::initPage($dir, "The product of $x and $y is $product.");</span>
                <br><span class="pl-4">break;</span>
                <br><span class="pl-3">default:</span>
                <br><span class="pl-4">Nav::gotoHome($dir);</span>
                <br><span class="pl-4">break;</span>
                <br><span class="pl-2">}</span>
              </code>
            </div>
            <h4 class="pt-3">Result</h4>
            <img class="w-100 h-auto" src="<?php Asset::embedImage($dir, 'img11.png') ?>">
          </div>
          <hr>
          <div class="container mt-4">
            <h3 id="item-3">Next Step!</h3>
            <a href="<?php Nav::echoURL($dir, 'page/docs/function.php') ?>" class="btn btn-primary">Next<i class="fas fa-arrow-right ml-2"></i></a>
          </div>
<?php
        }
    }