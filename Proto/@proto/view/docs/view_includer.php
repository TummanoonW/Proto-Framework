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
                    <nav class="nav nav-pills flex-column">
                      <a class="nav-link ml-3" href="#item-1">Guide</a>
                      <a class="nav-link ml-3" href="#item-2">Functions</a>
                      <a class="nav-link ml-3" href="#item-3">Next Step</a>
                    </nav>
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
            <h2 id="item-0">Includer</h2>
            <!--<iframe class="youtube mt-1" src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>-->
            <img src="<?php Asset::embedThumb($dir, 'banner.png') ?>">
            <p></p>
          </div>
          <div class="container mt-4">
          <h3 id="item-1">Guide</h3>
          <p></p>
          </div>
          <div class="container mt-4">
            <h3 id="item-2">Functions</h3>
            <table class="table">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">Name</th>
                  <th scope="col">Parameter(s)</th>
                  <th scope="col">Description</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th><a href="#item-1-1">include_proto($dir)</a></th>
                  <td><span class="text-primary">$dir</span> as the location of the current directory</td>
                  <td>The function to call <span class="text-info">include_config($dir)</span> and <span class="text-info">include_layout($dir)</span> to include all libraries and components required for Proto-Framework.</td>
                </tr>
                <tr>
                  <th>include_config($dir)</th>
                  <td><span class="text-primary">$dir</span> as the location of the current directory</td>
                  <td>The function to include all libraries within the directory <span class="text-info">./config/</span></td>
                </tr>
                <tr>
                  <th>include_layout($dir)</th>
                  <td><span class="text-primary">$dir</span> as the location of the current directory</td>
                  <td>The function to include all components within the directory <span class="text-info">./component/layout/</span></td>
                </tr>
                <tr>
                  <th><a href="#item-1-3">include_view($dir, $file)</a></th>
                  <td>
                    <p>
                      <span class="text-primary">$dir</span> as the location of the current directory
                    </p>
                    <p>
                      <span class="text-primary">$file</span> as a file name in the directory <span class="text-info">./component/view/</span>
                    </p>
                  </td>
                  <td>The function to include a specific view from the directory <span class="text-info">./component/view/</span> by the given file name</td>
                </tr>
                <tr>
                  <th><a href="#item-1-4">include_fun($dir, $file)</a></th>
                  <td>
                    <p>
                      <span class="text-primary">$dir</span> as the location of the current directory
                    </p>
                    <p>
                      <span class="text-primary">$file</span> as a file name in the directory <span class="text-info">./function/</span>
                    </p>
                  </td>
                  <td>The function to include a specific class of functions from the directory <span class="text-info">./function/</span> by the given file name</td>
                </tr>
              </tbody>
            </table>

          </div>
          <div class="container mt-4">    
            <h3 id="item-3" class="mt-4">Next Step!</h3>
            <p>You can not really understand the framework without knowing how to use Includer.</p>
            <a href="<?php Nav::echoURL($dir, App::$pageDocsComponent) ?>" class="btn btn-primary">Next<i class="fas fa-arrow-right ml-2"></i></a>
          </div>
<?php
        }
    }