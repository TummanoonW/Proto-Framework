<?php
    class DocsComponentView{
        public static function initView($dir){
?>
          <nav class="p-4 navbar navbar-expand-">
              <div class="row w-100">
                <div class="col-sm-1 col-md-3 navbar-collapse">
                  <div class="nav flex-column nav-pills">
                    <a class="nav-link my-1 h6" href="https://www.trialation.com/proto-framework-docs/">Get Start</a>
                    <a class="nav-link my-1 h6" href="<?php Nav::echoURL($dir, 'page/docs/introduction.php') ?>">Introduction</a>
                    <a class="nav-link my-1 h6" href="<?php Nav::echoURL($dir, 'page/docs/includer.php') ?>">Includer</a>
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
                        <a class="nav-link ml-4" href="#item-1-8">InfoPage</a>
                      </nav>
                      <a class="nav-link ml-3" href="#item-2">View</a>
                      <a class="nav-link ml-3" href="#item-3">Next Step</a>
                    </nav>
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
            <h2 id="item-0">Component</h2>
            <!--<iframe class="youtube mt-1" src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>-->
            <img src="<?php Asset::embedThumb($dir, 'banner.png') ?>">
          </div>
          <div class="container mt-4">
            <h3 id="item-1">Layout</h3>
            <div class="pt-4 pb-2">
              <h4 id="item-1-1">Header</h4>
              <p>Header is the class that contains a static function <strong class="text-info">initHeader($dir, $title, $showToolbar, $active, $sticky)</strong> which to be used as one of the layout component that constructs HTML <strong>header</strong> and <strong>the start of body with <a href="item-1-2">Toolbar</a></strong>.</p>
              <h5>Class Header</h5>
              <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">Function</th>
                    <th scope="col">Parameter(s)</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th><a href="#item-1-1">initHeader($dir, $title, $showToolbar, $active, $sticky)</a></th>
                    <td>
                      <p><span class="text-primary">$dir</span> as the location of the current directory</p>
                      <p><span class="text-primary">$title</span> as the title of the web page</p>
                      <p><span class="text-primary">$showToolbar</span> as the status of Toolbar display (<strong>TRUE</strong> or <strong>FALSE</strong>)</p>
                      <p><span class="text-primary">$active</span> as the matching keyword to active one of the item on Toolbar</p>
                      <p><span class="text-primary">$sticky</span> as the status of the Toolbar position (<strong>TRUE</strong> = sticky Toolbar / <strong>FALSE</strong> = fixed Toolbar)</p>
                    </td>
                  </tr>
                </tbody>
              </table>
              <h5>Example</h5>
              <div class="p-4 rounded bg-dark">
                <code class="text-white-50">
                  &lt;?php
                  <br><span class="pl-2">$dir = "./"; </span>
                  <br><span class="pl-2">include_once $dir . '@proto/app.php'; </span>
                  <br><span class="pl-2">App::include_proto($dir); </span>
                  <br><span class="pl-2">App::include_view($dir, 'view_justapage.php'); </span>
                  <br>
                  <br><span class="pl-2 text-warning">Header::initHeader($dir, 'Just a page', TRUE, '', TRUE); </span>
                  <br><span class="pl-2">JustAPageView::initView($dir); </span>
                  <br><span class="pl-2">Footer::initFooter($dir, TRUE); </span>
                </code>
              </div>
              <h5 class="mt-3">Result</h5>
              <img class="w-100 h-auto" src="<?php Asset::embedImage($dir, 'img7.png') ?>">
            </div>
            <hr>
            <div class="pt-4 pb-2">
              <h4 id="item-1-2">Toolbar</h4>
              <p>Toolbar is the class that contains a static function <strong class="text-info">initToolbar($dir, $active, $sticky)</strong> which to be used as nav-bar.</p>
              <h5>Class: Toolbar</h5>
              <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Parameter(s)</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th><a href="#item-1-1">initToolbar($dir, $active, $sticky)</a></th>
                    <td>
                      <p><span class="text-primary">$dir</span> as the location of the current directory</p>
                      <p><span class="text-primary">$active</span> as the matching keyword to active one of the item on Toolbar</p>
                      <p><span class="text-primary">$sticky</span> as the status of the Toolbar position (<strong>TRUE</strong> = sticky Toolbar / <strong>FALSE</strong> = fixed Toolbar)</p>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <hr>
            <div class="pt-3 pb-2">
              <h4 id="item-1-3">Breadcrumb</h4>
              <p>Breadcrumb is the class that contains a static function <strong class="text-info">initBreadcrumb($dir, $paths)</strong> which to be used as navigation paths.</p>
              <h5>Class: Breadcrumb</h5>
              <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Parameter(s)</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th><a href="#item-1-1">initBreadcrumb($dir, $paths)</a></th>
                    <td>
                      <p><span class="text-primary">$dir</span> as the location of the current directory</p>
                      <p><span class="text-primary">$paths</span> as the array of <a href="<?php Nav::echoURL($dir, 'page/docs/config.php' . "#item-8") ?>">Paths</a></p>
                    </td>
                  </tr>
                </tbody>
              </table>
              <h5>Example</h5>
              <p></p>
              <div class="p-4 rounded bg-dark">
                <code class="text-white-50">
                  &lt;?php
                  <br><span class="pl-2">class JustAPageView{ </span>
                  <br><span class="pl-3">public static function initView($dir, $paths){</span>
                  <br><span>?&gt; </span>
                  <br><span class="pl-4 text-warning">Breadcrumb::initBreadcrumb($dir, $paths);</span>
                  <br><span class="pl-4">&lt;div class="container mt-4"&gt;</span>
                  <br><span class="pl-5">...</span>
                  <br><span class="pl-4">&lt;/div&gt;</span>
                  <br><span>&lt;?php</span>
                  <br><span class="pl-3">}</span>
                  <br><span class="pl-2">} </span>
                </code>
              </div>
              <p></p>
              <div class="p-4 rounded bg-dark">
                <code class="text-white-50">
                  &lt;?php
                  <br><span class="pl-2">$dir = "./"; </span>
                  <br><span class="pl-2">include_once $dir . '@proto/app.php'; </span>
                  <br><span class="pl-2">App::include_proto($dir); </span>
                  <br><span class="pl-2">App::include_view($dir, 'view_justapage.php'); </span>
                  <br>
                  <br><span class="pl-2 text-warning">$paths = array(</span>
                  <br><span class="pl-3 text-warning">new Path(FALSE, 'Home', $dir),</span>
                  <br><span class="pl-3 text-warning">new Path(TRUE, 'Just a Page', '#')</span>
                  <br><span class="pl-2 text-warning">);</span>
                  <br>
                  <br><span class="pl-2">Header::initHeader($dir, 'Just a page', TRUE, '', TRUE); </span>
                  <br><span class="pl-2 text-warning">JustAPageView::initView($dir, $paths); </span>
                  <br><span class="pl-2">Footer::initFooter($dir, TRUE); </span>
                </code>
              </div>
              <h5 class="mt-3">Result</h5>
              <img class="w-100 h-auto" src="<?php Asset::embedImage($dir, 'img8.png') ?>">
            </div>
            <hr>
            <div class="pt-3 pb-2">
              <h4 id="item-1-4">Footer</h4>
              <p>Footer is the class that contains a static function <strong class="text-info">initFooter($dir, $showFooter)</strong> which to be used as footer and closing HTML body.</p>
              <h5>Class: Footer</h5>
              <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Parameter(s)</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th><a href="#item-1-1">initFooter($dir, $showFooter)</a></th>
                    <td>
                      <p><span class="text-primary">$dir</span> as the location of the current directory</p>
                      <p><span class="text-primary">$showFooter</span> as the status of Footer display (<strong>TRUE</strong> or <strong>FALSE</strong>)</p>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <hr>
            <div class="pt-3 pb-2">
              <h4 id="item-1-5">Style</h4>
              <p>Style is the class that contains a static function <strong class="text-info">customStyle($dir, $file)</strong> which link a custom css file from the directory <span class="text-info">./assets/css/</span> by the given file name.</p>
              <h5>Class: Style</h5>
              <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Parameter(s)</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th><a href="#item-1-1">customStyle($dir, $file)</a></th>
                    <td>
                      <p><span class="text-primary">$dir</span> as the location of the current directory</p>
                      <p><span class="text-primary">$file</span> as the file name in the directory <span class="text-info">./assets/css/</span></p>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <hr>
            <div class="pt-3 pb-2">
              <h4 id="item-1-6">Script</h4>
              <p>Script is the class that contains static functions <strong class="text-info">customScript($dir, $file)</strong> which integrates a custom javascript file from the directory <span class="text-info">./assets/js/</span> by the given file name.</p>
              <h5>Class: Script</h5>
              <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Parameter(s)</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th><a href="#item-1-1">customScript($dir, $file)</a></th>
                    <td>
                      <p><span class="text-primary">$dir</span> as the location of the current directory</p>
                      <p><span class="text-primary">$file</span> as the file name in the directory <span class="text-info">./assets/js/</span></p>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <hr>
            <div class="pt-3 pb-2">
              <h4 id="item-1-7">ErrorPage</h4>
              <p>ErrorPage is the class that contains static functions <strong class="text-info">initPage($dir, $result)</strong> which displays a common error page. </p>
              <p><strong class="text-danger">Side note:</strong> The ErrorPage is an independent-complete web page which we don't have to call any other components later.</p>
              <h5>Class: ErrorPage</h5>
              <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Parameter(s)</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th><a href="#item-1-1">initPage($dir, $result)</a></th>
                    <td>
                      <p><span class="text-primary">$dir</span> as the location of the current directory</p>
                      <p><span class="text-primary">$result</span> as the StdClass object containing <strong>success</strong>, <strong>response</strong>, and <strong>err</strong> properties</p>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="pt-3 pb-2">
              <h4 id="item-1-8">InfoPage</h4>
              <p>InfoPage is the class that contains static functions <strong class="text-info">initPage($dir, $msg)</strong> which displays a simple message. </p>
              <p><strong class="text-danger">Side note:</strong> The InfoPage is an independent-complete web page which we don't have to call any other components later.</p>
              <h5>Class: InfoPage</h5>
              <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Parameter(s)</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th><a href="#item-1-1">initPage($dir, $msg)</a></th>
                    <td>
                      <p><span class="text-primary">$dir</span> as the location of the current directory</p>
                      <p><span class="text-primary">$msg</span> as the string value to display</p>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <hr>
          <div class="container mt-4">
            <h3 id="item-2">View</h3>
            <p>View is a directory located in <span class="text-info">./component/</span>. It is the place to keep all the custom view classes which to be called later in the web page file.</p>
            <h4>Create a new View</h4>
            <p class="mt-3">First, let's create a view file <span class="text-info">view_test.php</span> in the directory <span class="text-info">./component/view/</span> then write the code as follow.</p>
            <div class="p-4 rounded bg-dark">
              <code class="text-warning">
                    &lt;?php 
                <br><span class="pl-2">class TestView{ </span>
                <br><span class="pl-3">public static function initView($dir){ </span>
                <br>?&gt; 
                <br><span class="pl-4">&lt;div class="container mt-5"&gt; </span>
                <br><span class="pl-5">&lt;h1&gt;It was the nice time!&lt;/h1&gt; </span>
                <br><span class="pl-4">&lt;/div&gt; </span>
                <br>&lt;?php } 
                <br><span class="pl-2">} </span>
              </code>
            </div>
            <p class="mt-3">Second, create a web page file <span class="text-info">test.php</span> in the main directory then write the code as follow.</p>
            <div class="p-4 rounded bg-dark">
              <code class="text-warning">
                &lt;?php
                <br><span class="pl-2">$dir = "./"; </span>
                <br><span class="pl-2">include_once $dir . '@proto/app.php'; </span>
                <br><span class="pl-2">App::include_proto($dir); </span>
                <br><span class="pl-2">App::include_view($dir, 'view_test.php'); </span>
                <br>
                <br><span class="pl-2">Header::initHeader($dir, 'TestView', TRUE, NULL, TRUE); </span>
                <br><span class="pl-2">TestView::initView($dir); </span>
                <br><span class="pl-2">Footer::initFooter($dir, TRUE); </span>
              </code>
            </div>
            <h4 class="mt-3">Result</h4>
            <p>Upload the project to localhost or your web hosting server then open the url something like <span class="text-info">https://{{localhost or your web hosting}}/test.php</span></p>
            <img class="w-100 h-auto" src="<?php Asset::embedImage($dir, 'img9.png') ?>">
          </div>
          <div class="container mt-4">
            <h3 id="item-3" class="mt-4">Next Step!</h3>
            <a href="<?php Nav::echoURL($dir, 'page/docs/pages.php') ?>" class="btn btn-primary">Next<i class="fas fa-arrow-right ml-2"></i></a>
          </div>
<?php
        }
    }