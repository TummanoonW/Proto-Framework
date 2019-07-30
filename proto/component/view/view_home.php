<?php
    class HomeView{
        public static function initView($dir){
?>
            <style>
                .size32{
                    font-size: 32px;
                }
            </style>
            <div class="jumbotron bg-light padding-top">
                <h1 class="display-4"><?php echo App::$name ?></h1>
                <p class="lead">
                    Build your Front-End Website based on PHP7, HTML5, CSS and Javascript with integrated Offline Database library - combined with third-party like Bootstrap and jQuery today.
                </p>
                <a class="btn btn-outline-primary btn-lg" href="<?php Nav::echoURL($dir, App::$pageGetStart); ?>" role="button">Get Start</a>
                &nbsp;
                <a class="btn btn-outline-success btn-lg" target="_blank" href="https://www.trialation.com/products/proto-framework" role="button">See Back-End version</a>
                <hr class="my-4">
                <small>Currently v<?php echo App::$version ?></small>
            </div>
            <div class="masthead-followup row m-0 border border-white">
            <div class="col-12 col-md-4 p-3 p-md-5 bg-light border border-white">
                  <i class="fas fa-dove text-info size32 mb-2"></i>
                  <h3>Non - MVC</h3>
                  <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi tristique imperdiet nisi, eu tincidunt nulla vestibulum efficitur. Cras eget tempus ante, id pharetra urna. Integer.
                  </p>
                  <hr class="half-rule">
                  <a class="btn btn-outline-primary" href="/docs/4.3/getting-started/download/">Get Start</a>
                </div>
                <div class="col-12 col-md-4 p-3 p-md-5 bg-light border border-white">
                  <i class="fas fa-server text-info size32 mb-2"></i>
                  <h3>Back-End API</h3>
                  <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi tristique imperdiet nisi, eu tincidunt nulla vestibulum efficitur. Cras eget tempus ante, id pharetra urna. Integer.
                  </p>
                  <hr class="half-rule">
                  <a class="btn btn-outline-primary" href="/docs/4.3/layout/overview/">Explore the docs</a>
                </div>
                <div class="col-12 col-md-4 p-3 p-md-5 bg-light border border-white">
                  <i class="fas fa-database text-info size32 mb-2"></i>                  
                  <h3>Offline Database</h3>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi tristique imperdiet nisi, eu tincidunt nulla vestibulum efficitur. Cras eget tempus ante, id pharetra urna. Integer.
                  </p>
                  <hr class="half-rule">
                  <a href="https://themes.getbootstrap.com/" class="btn btn-outline-primary">Explore the docs</a>
                </div>
                <div class="col-12 col-md-4 p-3 p-md-5 bg-light border border-white">
                  <i class="fas fa-code-branch text-info size32 mb-2"></i>                  
                  <h3>Bootstrap & jQuery</h3>
                  <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi tristique imperdiet nisi, eu tincidunt nulla vestibulum efficitur. Cras eget tempus ante, id pharetra urna. Integer.
                  </p>
                  <hr class="half-rule">
                  <a class="btn btn-outline-primary" href="/docs/4.3/layout/overview/">Explore the docs</a>
                </div>
                <div class="col-12 col-md-4 p-3 p-md-5 bg-light border border-white">
                  <i class="fas fa-code text-info size32 mb-2"></i>                  
                  <h3>Traceable Code</h3>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi tristique imperdiet nisi, eu tincidunt nulla vestibulum efficitur. Cras eget tempus ante, id pharetra urna. Integer.                  
                  </p>
                  <hr class="half-rule">
                  <a href="https://themes.getbootstrap.com/" class="btn btn-outline-primary">See the architecture</a>
                </div>
                <div class="col-12 col-md-4 p-3 p-md-5 bg-light border border-white">
                  <i class="fas fa-graduation-cap text-info size32 mb-2"></i>                  
                  <h3>Less to Learn</h3>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi tristique imperdiet nisi, eu tincidunt nulla vestibulum efficitur. Cras eget tempus ante, id pharetra urna. Integer.                  
                  </p>
                  <hr class="half-rule">
                  <a href="https://themes.getbootstrap.com/" class="btn btn-outline-primary">Explore tutorials</a>
                </div>
            </div>
<?php
        }
    }