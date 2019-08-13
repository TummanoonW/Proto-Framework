<?php
    class DocsView{
        public static function initView($dir){
?>
          <nav class="p-4 navbar navbar-expand-">
              <div class="row w-100">
                <div class="col-sm-1 col-md-3 navbar-collapse">
                  <div class="nav flex-column nav-pills">
                    <a class="nav-link my-1 h5 active" href="#item-0">Get Start</a>
                    <nav class="nav nav-pills flex-column">
                      <a class="nav-link ml-3" href="#item-1">Guides</a>
                      <nav class="nav nav-pills flex-column">
                        <a class="nav-link ml-4" href="#item-1-1">Requirement</a>
                        <a class="nav-link ml-4" href="#item-1-2">Download & Installation</a>
                        <a class="nav-link ml-4" href="#item-1-3">Make your first page</a>
                      </nav>
                      <a class="nav-link ml-3" href="#item-2">Next Step</a>
                    </nav>
                    <a class="nav-link my-1 h6" href="<?php Nav::echoURL($dir, App::$pageDocsIntroduction) ?>">Introduction</a>
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
            <h2 id="item-0">Get Start</h2>
            <!--<iframe class="youtube mt-1" src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>-->
            <img src="<?php Asset::embedThumb($dir, 'banner.png') ?>">
          </div>
          <div class="container mt-4">
            <h3 id="item-1">Guides</h3>
            <div class="pt-3 pb-2">
              <h4 id="item-1-1">Requirement</h4>
              <p>Before starting a new project, make sure you have installed these required programs as follow.</p>
              <ul>
                <li>IDE Tool - such as <a href="https://code.visualstudio.com/" target="_blank">Visual Studio Code</a> or any others.</li>
                <li>PHP development environment - such as <a href="https://www.apachefriends.org/index.html" target="_blank">XAMPP</a> or any others.</li>
              </ul>
            </div>
            <div class="pt-3 pb-2">
              <h4 id="item-1-2">Download & Installation</h4>
              <p>Download one of the project from links provided below. You can choose to download <strong>Empty Project</strong> which is easy to <i>build from scratch</i> or <strong>with Examples and Docs</strong> which includes many example files and built-in docs.</p>
              <div class="container mt-4">
                <h5 class="mt-2 mb-2">Manually Downloads</h5>
                <a href="https://www.dropbox.com/s/llv78c3f2beh6b5/proto-empty%202.zip?dl=1" target="_blank" class="btn btn-outline-primary mr-2">
                  <i class="fas fa-download mr-2"></i>Empty Project
                </a>
                <a href="https://www.dropbox.com/s/4ssjenupkftrwd8/Proto-Framework.zip?dl=1" target="_blank" class="btn btn-outline-success mr-2">
                  <i class="fas fa-download mr-2"></i>with Examples and Docs
                </a>
                <a href="https://github.com/TummanoonW/Proto-Framework" target="_blank" class="btn btn-outline-info mr-2">
                  <i class="fas fa-cloud-download-alt mr-2"></i>Github
                </a>
              </div>
              <div class="container mt-4">
                <h5 class="mt-2 mb-2">Unzip & Setup</h5>
                <p class="mb-2">
                  Once you downloaded the file (which is .zip), extract the file to XAMPP (or alike) at directory <strong>htdocs</strong> as the following picture.
                </p>
                <img src="<?php Asset::embedImage($dir, 'img1.png') ?>" class="w-75 h-auto p2 mb-4">
                <p class="mb-2">
                  Start up Apache and MySQL services on XAMPP (or alike) then try navigate to URL <strong>localhost:{port}/{project directory}/</strong> on your web browser.
                </p>
                <img src="<?php Asset::embedImage($dir, 'img2.png') ?>" class="w-75 h-auto p2 mb-4">
              </div>
            </div>
            <div class="pt-3 pb-2">
              <h4 id="item-1-3">Make your first page</h4>
              <div class="container mt-4">
                <p>Next, let's start make some new page. Open Visual Studio Code (or alike) then open the project directory you've placed. It should look like the following picture.</p>
                <img src="<?php Asset::embedImage($dir, 'img3.png') ?>" class="w-75 h-auto p2 mb-4">
              </div>
              <div class="container mt-4">
                <p>Create new file named <strong>view_mypage.php</strong> on directory <strong>./component/view/</strong> then write the code into the file as follow.</p>
                <div class="p-4 rounded bg-dark">
                  <code class="text-warning">
                        &lt;?php 
                    <br><span class="pl-2">class MyPageView{ </span>
                    <br><span class="pl-3">public static function initView($dir){ </span>
                    <br>?&gt; 
                    <br><span class="pl-4">&lt;div class="container mt-5"&gt; </span>
                    <br><span class="pl-5">&lt;h1&gt;Hello World!&lt;/h1&gt; </span>
                    <br><span class="pl-4">&lt;/div&gt; </span>
                    <br>&lt;?php } 
                    <br><span class="pl-2">} </span>
                  </code>
                </div>
              </div>
                    
              <div class="container mt-4">
                <p>Create new file named <strong>mypage.php</strong> on the main directory then write the code into the file as follow.</p>
                <div class="p-4 rounded bg-dark">
                  <code class="text-warning">
                    &lt;?php
                    <br><span class="pl-2">$dir = "./"; </span>
                    <br><span class="pl-2">include_once $dir . 'includer/includer.php'; </span>
                    <br><span class="pl-2">Includer::include_proto($dir); </span>
                    <br><span class="pl-2">Includer::include_view($dir, 'view_mypage.php'); </span>
                    <br>
                    <br><span class="pl-2">Header::initHeader($dir, App::$name, TRUE, 'My Page', TRUE); </span>
                    <br><span class="pl-2">MyPageView::initView($dir); </span>
                    <br><span class="pl-2">Footer::initFooter($dir, TRUE); </span>
                  
                  </code>
                </div>
              </div>
                    
              <div class="container mt-4">
                <p>Once you've done both 2 steps above, the files should be placed like the following picture.</p>
                <img src="<?php Asset::embedImage($dir, 'img4.png') ?>" class="w-50 h-auto p2 mb-4">
              </div>
                  
              <div class="container mt-4">
                <p>Then go to URL <strong>localhost:{port}/{project directory}/mypage.php</strong>. The result should look like the following picture.</p>
                <img src="<?php Asset::embedImage($dir, 'img5.png') ?>" class="w-75 h-auto p2 mb-4">
              </div>
            </div>
          </div>
                    
          <div class="container mt-4">  
            <h3 id="item-2" class="mt-4">Next Step!</h3>
            <p>Now you are ready to code more with Proto-Framework.</p>
            <a href="<?php Nav::echoURL($dir, App::$pageDocs) ?>" class="btn btn-primary">Next<i class="fas fa-arrow-right ml-2"></i></a>
          </div>
<?php
        }
    }