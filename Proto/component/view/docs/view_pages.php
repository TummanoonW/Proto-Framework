<?php
    class DocsPagesView{
        public static function initView($dir){
?>
          <nav class="p-4 navbar navbar-expand-">
              <div class="row w-100">
                <div class="col-sm-1 col-md-3 navbar-collapse">
                  <div class="nav flex-column nav-pills">
                    <a class="nav-link my-1 h6" href="<?php Nav::echoURL($dir, App::$pageDocs) ?>">Get Start</a>
                    <a class="nav-link my-1 h6" href="<?php Nav::echoURL($dir, App::$pageDocsIntroduction) ?>">Introduction</a>
                    <a class="nav-link my-1 h6" href="<?php Nav::echoURL($dir, App::$pageDocsIncluder) ?>">Includer</a>
                    <a class="nav-link my-1 h6" href="<?php Nav::echoURL($dir, App::$pageDocsComponent) ?>">Component</a>
                    <a class="nav-link my-1 h5 active" href="#item-0">Pages</a>
                    <nav class="nav nav-pills flex-column">
                      <a class="nav-link ml-3" href="#item-1">Guide</a>
                      <a class="nav-link ml-3" href="#item-2">Example</a>
                      <a class="nav-link ml-3" href="#item-3">Next Step</a>
                    </nav>
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
            <h2 id="item-0">Pages</h2>
            <!--<iframe class="youtube mt-1" src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>-->
            <img src="<?php Asset::embedThumb($dir, 'banner.png') ?>">
          </div>
          <div class="container mt-4">
            <h3 id="item-1">Guides</h3>
            <p>Pages is the directory <span class="text-info">./pages/</span>. It is the place to keep all the custom view classes which to be called later in the web page file.</p>
          </div>
          <div class="container mt-4">
            <h3 id="item-2" class="pt-3">Example</h3>
            <p class="pt-4">First, create a file named <span class="">view_sample.php</span> on the directory <span class="text-info">./component/view/</span>.</p>
            <div class="p-4 rounded bg-dark">
              <code class="text-warning">
                    &lt;?php 
                <br><span class="pl-2">class SampleView{ </span>
                <br><span class="pl-3">public static function initView($dir){ </span>
                <br>?&gt; 
                <br><span class="pl-4">&lt;div class="container mt-5"&gt; </span>
                <br><span class="pl-5">&lt;p&gt;A good looking depress guy, smoking a cigarett, is not a movie!&lt;/p&gt; </span>
                <br><span class="pl-4">&lt;/div&gt; </span>
                <br>&lt;?php } 
                <br><span class="pl-2">} </span>
              </code>
            </div>
            <p class="pt-4">Second, create a file named <span class="text-info">sample.php</span> on the directory <span class="text-info">./pages/</span>.</p>
            <div class="p-4 rounded bg-dark">
              <code class="text-warning">
                &lt;?php
                <br><span class="pl-2">$dir = "../"; </span>
                <br><span class="pl-2">include_once $dir . 'includer/includer.php'; </span>
                <br><span class="pl-2">Includer::include_proto($dir); </span>
                <br><span class="pl-2">Includer::include_view($dir, 'view_sample.php'); </span>
                <br>
                <br><span class="pl-2">Header::initHeader($dir, 'Sample', TRUE, '', TRUE); </span>
                <br><span class="pl-2">SampleView::initView($dir); </span>
                <br><span class="pl-2">Footer::initFooter($dir, TRUE); </span>
              </code>
            </div>
            <p class="pt-2"><strong>Notice</strong> that since we don't create a web page on the main directory anymore. The variable <span class="text-primary">$dir</span> should have value of the current directory the file is on. In this case the variable <span class="text-primary">$dir</span> is '../'</p>
  
            <h4 class="pt-3">Result</h4>
            <p>Once you finished as above, upload to localhost or web hosting then open your web browser and go to something like <span class="text-info">https://{{localhost or your web hosting}}/pages/sample.php</span></p>
            <img class="w-100 h-auto" src="<?php Asset::embedImage($dir, 'img10.png') ?>">
          </div>
          
          <div class="container mt-4">  
            <h3 id="item-3" class="mt-4">Next Step!</h3>
            <a href="<?php Nav::echoURL($dir, App::$pageDocsConfig) ?>" class="btn btn-primary">Next<i class="fas fa-arrow-right ml-2"></i></a>
          </div>
<?php
        }
    }