<?php
    class DocsView{
        public static function initView($dir){
?>
          <div class="jumbotron bg-light padding-top">
            <h1 class="display-4"><i class="fas fa-lightbulb  mr-3"></i>Get Start</h1>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam volutpat placerat sem, eu egestas velit pulvinar eu. Quisque eleifend ligula non lorem blandit, vel malesuada augue commodo. Curabitur leo nibh, blandit vitae efficitur placerat, luctus ac magna. Mauris tempus aliquam quam quis mollis. In sem magna, suscipit ac hendrerit nec, sodales at metus. Cras orci lectus, rhoncus in nibh in, tincidunt ultrices enim. Nunc quis augue ac nunc tempor laoreet vitae a orci. Suspendisse consequat dignissim nibh nec posuere.</p>
            <hr class="my-4">
            <small>Currently v<?php echo App::$version ?></small>
          </div>
          <div class="container">
            <h3>Build Your First Project</h3>
            <iframe class="youtube mt-1" src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>
          </div>

          <div class="container mt-4">
            <h3>Guides</h3>

            <div class="pt-3 pb-2">
              <h5>Requirement</h5>
              <p>Before starting a new project, make sure you have installed these required programs as follow.</p>
              <ul>
                <li>IDE Tool - such as <a href="https://code.visualstudio.com/" target="_blank">Visual Studio Code</a> or any others.</li>
                <li>PHP development environment - such as <a href="https://www.apachefriends.org/index.html" target="_blank">XAMPP</a> or any others.</li>
              </ul>
            </div>

            <div class="pt-3 pb-2">
              <h5>Installation</h5>
              <p>Download one of the project from links provided below. You can choose to download <strong>Empty Project</strong> which is easy to <i>build from scratch</i> or <strong>with Examples and Docs</strong> which includes many example files and built-in docs.</p>

              <div class="container mt-4">
                <h6 class="mt-2 mb-2">Manually Downloads</h6>
                <a href="https://drive.google.com/file/d/1PPDTOBsgHSQtYxw7kfgGFtQcvJhf7z-2/view?usp=sharing" target="_blank" class="btn btn-outline-primary mr-2">
                  <i class="fas fa-download mr-2"></i>Empty Project
                </a>
                <a href="https://drive.google.com/file/d/1TxH54jXhSVUayGBvRO98R27tVKfLmsFx/view?usp=sharing" target="_blank" class="btn btn-outline-success mr-2">
                  <i class="fas fa-download mr-2"></i>with Examples and Docs
                </a>
                <a href="https://github.com/TummanoonW/Proto-Framework" target="_blank" class="btn btn-outline-info mr-2">
                  <i class="fas fa-cloud-download-alt mr-2"></i>Github
                </a>
              </div>

              <div class="container mt-4">
                <h6 class="mt-2 mb-2">Unzip & Setup</h6>
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
              <h5>Make your first page</h5>
              
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
                    <br><span class="pl-2">Header::initHeader($dir, App::$name, TRUE, 'My Page'); </span>
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

            <h3 class="mt-4">Done!</h3>
            <p>Now you are ready to code more with Proto-Framework.</p>
            <a href="#" class="btn btn-primary">Next Step <i class="fas fa-arrow-right ml-2"></i></a>
          </div>

<?php
        }
    }