<?php
    class HomeView{
        public static function initView($dir){
?>
            <div class="jumbotron bg-light padding-top">
                <h1 class="display-4"><?php echo App::$name ?></h1>
                <p class="lead">Build your Front-End Website based on PHP7, HTML5, CSS and Javascript with integrated Offline Database library - combined with third-party like Bootstrap and jQuery today.</p>
                <a class="btn btn-outline-primary btn-lg" href="<?php Nav::echoURL($dir, App::$pageGetStart); ?>" role="button">Get Start</a>
                &nbsp;
                <a class="btn btn-outline-success btn-lg" target="_blank" href="https://www.trialation.com/products/proto-framework" role="button">See Back-End version</a>
                <hr class="my-4">
                <small>Currently v<?php echo App::$version ?></small>
            </div>
            <div class="masthead-followup row m-0 border border-white">
                <div class="col-12 col-md-4 p-3 p-md-5 bg-light border border-white">
                  <!-- Icon by Bytesize https://github.com/danklammer/bytesize-icons -->
                  <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="text-primary mb-2" viewBox="0 0 32 32" focusable="false"><title>Import</title><path d="M28 22v8H4v-8M16 4v20m-8-8l8 8 8-8"></path></svg>
                  <h3>Non - MVC</h3>
                  <p>Include Bootstrap’s source Sass and JavaScript files via npm, Composer or Meteor. Package managed installs don’t include documentation, but do include our build system and readme.</p>
                  <hr class="half-rule">
                  <a class="btn btn-outline-primary" href="/docs/4.3/getting-started/download/">Read installation docs</a>
                </div>
                <div class="col-12 col-md-4 p-3 p-md-5 bg-light border border-white">
                  <!-- Icon by Bytesize https://github.com/danklammer/bytesize-icons -->
                  <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="text-primary mb-2" viewBox="0 0 32 32" focusable="false"><title>Download</title><path d="M9 22c-9 1-8-10 0-9C6 2 23 2 22 10c10-3 10 13 1 12m-12 4l5 4 5-4m-5-10v14"></path></svg>
                  <h3>Back-End APIs</h3>
                  <p>When you only need to include Bootstrap’s compiled CSS or JS, you can use <a href="https://www.bootstrapcdn.com/">BootstrapCDN</a>.</p>
                  <hr class="half-rule">
                  <a class="btn btn-outline-primary" href="/docs/4.3/layout/overview/">Explore the docs</a>
                </div>
                <div class="col-12 col-md-4 p-3 p-md-5 bg-light border border-white">
                  <!-- Icon by Bytesize https://github.com/danklammer/bytesize-icons -->
                  <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="text-primary mb-2" viewBox="0 0 32 32" focusable="false"><title>Lightning</title><path d="M18 13l8-11L8 13l6 6-8 11 18-11z"></path></svg>
                  <h3>Offline Database</h3>
                  <p>
                    Take Bootstrap 4 to the next level with official premium themes—toolkits built on Bootstrap with new components and plugins, docs, and build tools.
                  </p>
                  <hr class="half-rule">
                  <a href="https://themes.getbootstrap.com/" class="btn btn-outline-primary">Browse themes</a>
                </div>
                <div class="col-12 col-md-4 p-3 p-md-5 bg-light border border-white">
                  <!-- Icon by Bytesize https://github.com/danklammer/bytesize-icons -->
                  <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="text-primary mb-2" viewBox="0 0 32 32" focusable="false"><title>Download</title><path d="M9 22c-9 1-8-10 0-9C6 2 23 2 22 10c10-3 10 13 1 12m-12 4l5 4 5-4m-5-10v14"></path></svg>
                  <h3>Bootstrap & jQuery</h3>
                  <p>When you only need to include Bootstrap’s compiled CSS or JS, you can use <a href="https://www.bootstrapcdn.com/">BootstrapCDN</a>.</p>
                  <hr class="half-rule">
                  <a class="btn btn-outline-primary" href="/docs/4.3/layout/overview/">Explore the docs</a>
                </div>
                <div class="col-12 col-md-4 p-3 p-md-5 bg-light border border-white">
                  <!-- Icon by Bytesize https://github.com/danklammer/bytesize-icons -->
                  <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="text-primary mb-2" viewBox="0 0 32 32" focusable="false"><title>Lightning</title><path d="M18 13l8-11L8 13l6 6-8 11 18-11z"></path></svg>
                  <h3>Traceable Code</h3>
                  <p>
                    Take Bootstrap 4 to the next level with official premium themes—toolkits built on Bootstrap with new components and plugins, docs, and build tools.
                  </p>
                  <hr class="half-rule">
                  <a href="https://themes.getbootstrap.com/" class="btn btn-outline-primary">Browse themes</a>
                </div>
                <div class="col-12 col-md-4 p-3 p-md-5 bg-light border border-white">
                  <!-- Icon by Bytesize https://github.com/danklammer/bytesize-icons -->
                  <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="text-primary mb-2" viewBox="0 0 32 32" focusable="false"><title>Lightning</title><path d="M18 13l8-11L8 13l6 6-8 11 18-11z"></path></svg>
                  <h3>Less to Learn</h3>
                  <p>
                    Take Bootstrap 4 to the next level with official premium themes—toolkits built on Bootstrap with new components and plugins, docs, and build tools.
                  </p>
                  <hr class="half-rule">
                  <a href="https://themes.getbootstrap.com/" class="btn btn-outline-primary">Browse themes</a>
                </div>
            </div>
<?php
        }
    }