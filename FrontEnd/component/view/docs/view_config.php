<?php
    class DocsConfigView{
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
                    <a class="nav-link my-1 h6" href="<?php Nav::echoURL($dir, App::$pageDocsPages) ?>">Pages</a>
                    <a class="nav-link my-1 h5 active" href="#item-0">Config</a>
                    <nav class="nav nav-pills flex-column">
                        <a class="nav-link ml-3" href="#item-1">App</a>
                        <a class="nav-link ml-3" href="#item-2">Nav</a>
                        <a class="nav-link ml-3" href="#item-3">IO</a>
                        <a class="nav-link ml-3" href="#item-4">API</a>
                        <a class="nav-link ml-3" href="#item-5">Session</a>
                        <a class="nav-link ml-3" href="#item-6">Asset</a>
                        <a class="nav-link ml-3" href="#item-7">CustomDate</a>
                        <a class="nav-link ml-3" href="#item-8">Path</a>
                        <a class="nav-link ml-3" href="#item-9">Console</a>
                        <a class="nav-link ml-3" href="#item-10">Next Step</a>
                    </nav>
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
            <h2 id="item-0">Config</h2>
            <!--<iframe class="youtube mt-1" src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>-->
            <img src="<?php Asset::embedThumb($dir, 'banner.png') ?>">
            <h3 class="pt-3">Guide</h3>
            <p></p>
          </div>
          <hr>
          <div class="container mt-4">
            <h3 id="item-1">App</h3>
            <p></p>
            <h4>Class (static): App</h4>
            <table class="table">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">Variable</th>
                  <th scope="col">Parameter(s)</th>
                  <th scope="col">Description</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th>$name</th>
                  <td></td>
                  <td>The name of your project.</td>
                </tr>
                <tr>
                  <th>$framework</th>
                  <td></td>
                  <td>The name of the framework.</td>
                </tr>
                <tr>
                  <th>$version</th>
                  <td></td>
                  <td>The version of the framework which is currently <?php echo App::$version ?>.</td>
                </tr>
                <tr>
                  <th>$lastUpdate</th>
                  <td></td>
                  <td>The date of latest update.</td>
                </tr>
                <tr>
                  <th>$platform</th>
                  <td></td>
                  <td>The array of string containing the key words indicated the platform it's running on.</td>
                </tr>
                <tr>
                  <th>$debuggingMode</th>
                  <td></td>
                  <td>The value of boolean which determines function Console::log() from the entire project.</td>
                </tr>
                <tr>
                  <th>$apiURL</th>
                  <td></td>
                  <td>The string value of the URL of API .</td>
                </tr>
              </tbody>
            </table>
          </div>
          <hr>
          <div class="container mt-4">
            <h3 id="item-2">Nav</h3>
            <p></p>
            <h4>Class (static): Nav</h4>
            <table class="table">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">Function</th>
                  <th scope="col">Parameter(s)</th>
                  <th scope="col">Description</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th>gotoHome($dir)</th>
                  <td><span class="text-primary">$dir</span> as the location of the current directory</td>
                  <td>The function to navigate the web browser to home (index) page.</td>
                </tr>
                <tr>
                  <th>echoHome($dir)</th>
                  <td><span class="text-primary">$dir</span> as the location of the current directory</td>
                  <td>The function to display home (index) page URL on the HTML page.</td>
                </tr>
                <tr>
                  <th>getHome($dir)</th>
                  <td><span class="text-primary">$dir</span> as the location of the current directory</td>
                  <td>The function to return home (index) page URL as string.</td>
                </tr>
                <tr>
                  <th>goto($dir, $url)</th>
                  <td>
                    <p>
                      <span class="text-primary">$dir</span> as the location of the current directory
                    </p>
                    <p>
                      <span class="text-primary">$url</span> as a file name in the directory or URL. <span class="text-danger">(If it's URL, put '' in the parameter $dir)</span>
                    </p>
                  </td>
                  <td>The function to navigate the web browser to the specific URL.</td>
                </tr>
                <tr>
                  <th>echoURL($dir, $url)</th>
                  <td>
                    <p>
                      <span class="text-primary">$dir</span> as the location of the current directory
                    </p>
                    <p>
                      <span class="text-primary">$url</span> as a file name in the directory or URL. <span class="text-danger">(If it's URL, put '' in the parameter $dir)</span>
                    </p>
                  </td>
                  <td>The function to display a specific URL on the HTML page.</td>
                </tr>
                <tr>
                  <th>getURL($dir, $url)</th>
                  <td>
                    <p>
                      <span class="text-primary">$dir</span> as the location of the current directory
                    </p>
                    <p>
                      <span class="text-primary">$url</span> as a file name in the directory or URL. <span class="text-danger">(If it's URL, put '' in the parameter $dir)</span>
                    </p>
                  </td>
                  <td>The function to return a specific URL as string.</td>
                </tr>
                <tr>
                  <th>goBack()</th>
                  <td></td>
                  <td>The function to navigate the web browser to the previous URL.</td>
                </tr>
                <tr>
                  <th>echoPrevious()</th>
                  <td></td>
                  <td>The function to display a previous URL on the HTML page.</td>
                </tr>
                <tr>
                  <th>getPrevious()</th>
                  <td></td>
                  <td>The function to return a previous URL as string.</td>
                </tr>
                <tr>
                  <th>refresh()</th>
                  <td></td>
                  <td>The function to refresh the HTML page.</td>
                </tr>
              </tbody>
            </table>
          </div>  
          <hr>
          <div class="container mt-4">
            <h3 id="item-3">IO</h3>
            <p></p>
            <h4>Class: IO</h4>
            <table class="table">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">Function & Variable</th>
                  <th scope="col">Parameter(s)</th>
                  <th scope="col">Description</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th>$id</th>
                  <td></td>
                  <td>The variable to recieve integer or string value from <span class="text-info">$_GET['id']</span>.</td>
                </tr>
                <tr>
                  <th>$query</th>
                  <td></td>
                  <td>The variable to recieve JSON string value from <span class="text-info">$_GET['q']</span> and convert to object.</td>
                </tr>
                <tr>
                  <th>$input</th>
                  <td></td>
                  <td>The variable to recieve JSON string values from method <span class="text-info">POST</span> and <span class="text-info">PUT</span> and convert to object.</td>
                </tr>
                <tr>
                  <th>$method</th>
                  <td></td>
                  <td>The variable to recieve string value from <span class="text-info">$_GET['method']</span>.</td>
                </tr>
                <tr>
                  <th>$get</th>
                  <td></td>
                  <td>The variable to recieve values from <span class="text-info">$_GET</span> and convert to object.</td>
                </tr>
                <tr>
                  <th>$post</th>
                  <td></td>
                  <td>The variable to recieve values from <span class="text-info">$_POST</span> and convert to object.</td>
                </tr>
                <tr>
                  <th>__construct()</th>
                  <td></td>
                  <td>The class constructor which also recieves and initializes variables.</td>
                </tr>
                <tr>
                  <th>output($obj)</th>
                  <td><span class="text-primary">$obj</span> as the value of object.</td>
                  <td>The function to display/output the given <span class="text-info">$obj</span> as JSON format.</td>
                </tr>
              </tbody>
            </table>
          </div>
          <hr>
          <div class="container mt-4">
            <h3 id="item-4">API</h3>
            <p></p>
            <h4>Class: API</h4>
            <table class="table">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">Function & Variable</th>
                  <th scope="col">Parameter(s)</th>
                  <th scope="col">Description</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th>__construct($apiKey)</th>
                  <td><span class="text-primary">$apiKey</span> as the secure API key.</td>
                  <td>The class constructor which also recieves and initializes API key.</td>
                </tr>
                <tr>
                  <th>getURL($path, $method, $query)</th>
                  <td>
                    <p><span class="text-primary">$path</span> as the file name or file path which will be directed from the <span class="text-info">$apiURL set in <a href="#item-1">App</a>.</p>
                    <p><span class="text-primary">$method</span> as the value of string to specify method you want to call.</p>
                    <p><span class="text-primary">$query</span> as the value of object to be used as data query.</p>
                  </td>
                  <td>The function to return a construcuted URL to be used to call the API.</td>
                </tr>
                <tr>
                  <th>get($url)</th>
                  <td>
                    <span class="text-primary">$url</span> as the URL constrcuted by <span class="text-info">getURL($path, $method, $query)<span> or any other API URL that would return data as JSON format.
                  </td>
                  <td>The function to get data from the given URL.</td>
                </tr>
                <tr>
                  <th>post($url, $objArr)</th>
                  <td>
                    <p><span class="text-primary">$url</span> as the URL constrcuted by <span class="text-info">getURL($path, $method, $query)<span> or any other API URL that would return data as JSON format.</p>
                    <p><span class="text-primary">$objArr</span> as the value of object or array to be sent through method POST</p>
                  </td>
                  <td>The function to post data to the given URL and also get the returned data.</td>
                </tr>
              </tbody>
            </table>
          </div> 
          <hr>
          <div class="container mt-4">
            <h3 id="item-5">Session</h3>
            <p></p>
            <h4>Class (static): Session</h4>
            <table class="table">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">Function</th>
                  <th scope="col">Parameter(s)</th>
                  <th scope="col">Description</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th>checkUserExisted()</th>
                  <td></td>
                  <td>The function to check and return the value of boolean wether the user is logged in or not (TRUE / FALSE).</td>
                </tr>
                <tr>
                  <th>logIn($auth)</th>
                  <td><span class="text-primary">$auth</span> as the user authenthication data.</td>
                  <td>The function to log in user to the session by calling function <a href="#item-5-3">setAuth($auth)</a> and <a href="#item-5-5">setAPIKey($auth->apiKey)</a>.</td>
                </tr>
                <tr>
                  <th id="item-5-3">setAuth($auth)</th>
                  <td><span class="text-primary">$auth</span> as the user authenthication data.</td>
                  <td>The function to store user authenthication data to session which to be used later in many pages and routes.</td>
                </tr>
                <tr>
                  <th>getAuth()</th>
                  <td></td>
                  <td>The function to return user authenthication data from the session.</td>
                </tr>
                <tr>
                  <th id="item-5-5">setAPIKey($apiKey)</th>
                  <td><span class="text-primary">$apiKey</span> as the value of API key.</td>
                  <td>The function to store API Key to session which to be used later in many pages and routes.</td>
                </tr>
                <tr>
                  <th>getAPIKey()</th>
                  <td></td>
                  <td>The function to return API key from the session.</td>
                </tr>
              </tbody>
            </table>
          </div>
          <hr>
          <div class="container mt-4">
            <h3 id="item-6">Asset</h3>
            <p></p>
            <h4>Class (static): Asset</h4>
            <table class="table">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">Function</th>
                  <th scope="col">Parameter(s)</th>
                  <th scope="col">Description</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th>echoIcon($dir, $url)</th>
                  <td>
                    <p><span class="text-primary">$dir</span> as the current directory</p>
                    <p><span class="text-primary">$url</span> as the URL of the icon image</p>
                  </td>
                  <td>The function to display the icon URL if it exists. If not, it will display default icon URL instead.</td>
                </tr>
                <tr>
                  <th>echoThumb($dir, $url)</th>
                  <td>
                    <p><span class="text-primary">$dir</span> as the current directory</p>
                    <p><span class="text-primary">$url</span> as the URL of the thumbnail image</p>
                  </td>
                  <td>The function to display the thumbnail URL if it exists. If not, it will display default thumbnail URL instead.</td>
                </tr>
                <tr>
                  <th>echoImage($dir, $url)</th>
                  <td>
                    <p><span class="text-primary">$dir</span> as the current directory</p>
                    <p><span class="text-primary">$url</span> as the URL of the image</p>
                  </td>
                  <td>The function to display the image URL if it exists. If not, it will display default image URL instead.</td>
                </tr>
                <tr>
                  <th>embedIcon($dir, $file)</th>
                  <td>
                    <p><span class="text-primary">$dir</span> as the current directory</p>
                    <p><span class="text-primary">$file</span> as an icon file name from the directory <span class="text-info">./assets/images/icons/</span></p>
                  </td>
                  <td>The function to display the icon URL within the project if it exists. If not, it will display default icon URL instead.</td>
                </tr>
                <tr>
                  <th>embedThumb($dir, $file)</th>
                  <td>
                    <p><span class="text-primary">$dir</span> as the current directory</p>
                    <p><span class="text-primary">$file</span> as an thumbnail file name from the directory <span class="text-info">./assets/images/thumbs/</span></p>
                  </td>
                  <td>The function to display the thumbnail URL within the project if it exists. If not, it will display default thumbnail URL instead.</td>
                </tr>
                <tr>
                  <th>embedImage($dir, $file)</th>
                  <td>
                    <p><span class="text-primary">$dir</span> as the current directory</p>
                    <p><span class="text-primary">$file</span> as an image file name from the directory <span class="text-info">./assets/images/</span></p>
                  </td>
                  <td>The function to display the image URL within the project if it exists. If not, it will display default image URL instead.</td>
                </tr>
              </tbody>
            </table>
          </div> 
          <hr>
          <div class="container mt-4">
            <h3 id="item-7">CustomDate</h3>
            <p></p>
            <h4>Class (static): CustomDate</h4>
            <table class="table">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">Function</th>
                  <th scope="col">Parameter(s)</th>
                  <th scope="col">Description</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th>getDateNow()</th>
                  <td></td>
                  <td>The function to return the object of class DateTime with the time of the present.</td>
                </tr>
                <tr>
                  <th>getDate($datestr)</th>
                  <td><span class="text-primary">$datestr</span> as the string value of time (Year-month-date hour:minute:second)</td>
                  <td>The function to return the object of class DateTime with the time of the given value.</td>
                </tr>
                <tr>
                  <th>parseDateNow()</th>
                  <td></td>
                  <td>The function to return the time of present as string value.</td>
                </tr>
                <tr>
                  <th>parseDate($dateTime)</th>
                  <td><span class="text-primary">$dateTime</span> as the object of DateTime class</td>
                  <td>The function to return the time of the given object of DateTime class as string value.</td>
                </tr>
                <tr>
                  <th>parseDateNowISO()</th>
                  <td></td>
                  <td>The function to return the time of present as string value ISO8601 format.</td>
                </tr>
                <tr>
                  <th>parseDateISO($dateTime)</th>
                  <td></td>
                  <td>The function to return the time of the given object of DateTime class as string value ISO8601 format.</td>
                </tr>
              </tbody>
            </table>
          </div> 
          <hr>
          <div class="container mt-4">
            <h3 id="item-8">Path</h3>
            <p></p>
            <h4>Class (static): Path</h4>
            <table class="table">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">Function</th>
                  <th scope="col">Parameter(s)</th>
                  <th scope="col">Description</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th>__construct($active, $label, $url)</th>
                  <td>
                    <p><span class="text-primary">$active</span> as the boolean value.</p>
                    <p><span class="text-primary">$label</span> as the string value.</p>
                    <p><span class="text-primary">$url</span> as the string value which indicates the URL</p>
                  </td>
                  <td>The class constructor which also receives and initializes values necessary.</td>
                </tr>
              </tbody>
            </table>
          </div> 
          <hr>
          <div class="container mt-4">
            <h3 id="item-9">Console</h3>
            <p></p>
            <h4>Class (static): Console</h4>
            <table class="table">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">Function</th>
                  <th scope="col">Parameter(s)</th>
                  <th scope="col">Description</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th>log($label, $objArr)</th>
                  <td>
                    <p><span class="text-primary">$label</span> as the value of string.</p>
                    <p><span class="text-primary">$objArr</span> as the value of object or array</p>
                  </td>
                  <td>
                    <p>The function to manipulate javascript to call the method <span class="text-info">console.log()</span> and also give parameter of label and object/array into it. It is generally used to display some result of the data on the console.</p>
                    <p class="text-danger">Note: However, the function can be disable and enable through out the entire app by changing the value of <span class="text-primary">$debuggingMode</span> from the class <a href="#item-1">App</a></p>
                  </td>
                </tr>
              </tbody>
            </table>
          </div> 
          <hr>
          <div class="container mt-4">
            <h3 id="item-10" class="mt-4">Next Step!</h3>
            <a href="<?php Nav::echoURL($dir, App::$pageDocsRoute) ?>" class="btn btn-primary">Next<i class="fas fa-arrow-right ml-2"></i></a>
          </div>
<?php
        }
    }