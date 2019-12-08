<?php
    //Proto Framework
    //v5
    //Developed by Tummanoon Wacha-em

    $dir = "./"; //current directory
    include_once $dir . '@proto/app.php'; //include Includer file to operate
    App::include_proto($dir); //include Proto Framework Architecture
    
    Header::initHeader($dir, App::$name, TRUE, 'Home', TRUE); //initialize HTML header elements with 'Home' as Title
    ?>
        <style>
            .size32{
                font-size: 32px;
            }
        </style>
        <div class="jumbotron bg-light padding-top">
            <h1 class="display-4"><?php echo App::$name ?></h1>
            <p class="lead">
                Build your responsive web app based on PHP7, HTML5, CSS and Javascript with integrated Offline Database library - combined with third-party like Bootstrap and jQuery today.
            </p>
            <a class="btn btn-outline-primary btn-lg" href="https://www.trialation.com/proto-framework-docs/" role="button"><i class="fas fa-code mr-2"></i>Get Start</a>
            &nbsp;
            <a class="btn btn-outline-success btn-lg" href="https://www.dropbox.com/s/zxdnoi2o2dt7mnx/proto-empty.zip?dl=1" role="button"><i class="fas fa-download mr-2"></i>Download the latest version</a>
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
              <a class="btn btn-outline-primary" href="https://www.trialation.com/proto-framework-docs/">Get Start</a>
            </div>
            <div class="col-12 col-md-4 p-3 p-md-5 bg-light border border-white">
              <i class="fas fa-server text-info size32 mb-2"></i>
              <h3>Back-End API</h3>
              <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi tristique imperdiet nisi, eu tincidunt nulla vestibulum efficitur. Cras eget tempus ante, id pharetra urna. Integer.
              </p>
              <hr class="half-rule">
              <a class="btn btn-outline-primary" href="https://www.trialation.com/proto-framework-docs/making-apis/">Explore the docs</a>
            </div>
            <div class="col-12 col-md-4 p-3 p-md-5 bg-light border border-white">
              <i class="fas fa-database text-info size32 mb-2"></i>                  
              <h3>Offline Database</h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi tristique imperdiet nisi, eu tincidunt nulla vestibulum efficitur. Cras eget tempus ante, id pharetra urna. Integer.
              </p>
              <hr class="half-rule">
              <a href="<?php Nav::echoURL($dir, "page/proto-db/") ?>" class="btn btn-outline-primary">Explore the docs</a>
            </div>
            <div class="col-12 col-md-4 p-3 p-md-5 bg-light border border-white">
              <i class="fas fa-code-branch text-info size32 mb-2"></i>                  
              <h3>Bootstrap & jQuery</h3>
              <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi tristique imperdiet nisi, eu tincidunt nulla vestibulum efficitur. Cras eget tempus ante, id pharetra urna. Integer.
              </p>
              <hr class="half-rule">
              <a class="btn btn-outline-primary" href="https://getbootstrap.com/docs/4.3/getting-started/introduction/" target="_blank">Explore the docs</a>
            </div>
            <div class="col-12 col-md-4 p-3 p-md-5 bg-light border border-white">
              <i class="fas fa-code text-info size32 mb-2"></i>                  
              <h3>Traceable Code</h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi tristique imperdiet nisi, eu tincidunt nulla vestibulum efficitur. Cras eget tempus ante, id pharetra urna. Integer.                  
              </p>
              <hr class="half-rule">
              <a href="<?php Nav::echoURL($dir, 'page/docs/introduction.php') ?>" class="btn btn-outline-primary">See the architecture</a>
            </div>
            <div class="col-12 col-md-4 p-3 p-md-5 bg-light border border-white">
              <i class="fas fa-graduation-cap text-info size32 mb-2"></i>                  
              <h3>Less to Learn</h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi tristique imperdiet nisi, eu tincidunt nulla vestibulum efficitur. Cras eget tempus ante, id pharetra urna. Integer.                  
              </p>
              <hr class="half-rule">
              <a href="#" class="btn btn-outline-primary">Explore tutorials</a>
            </div>
        </div>
    <?php
    Footer::initFooter($dir, TRUE); //initialize HTML footer elements


