<?php
    class GetStartView{
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
              <p>Before starting a new project, make sure you have installed these required programs as follow.</p>

              <div class="container">
                <h6 class="mt-2">Manually Downloads</h6>
                <a href="https://drive.google.com/file/d/1PPDTOBsgHSQtYxw7kfgGFtQcvJhf7z-2/view?usp=sharing" target="_blank" class="btn btn-outline-primary mr-2">
                  <i class="fas fa-download mr-2"></i>Empty Project
                </a>
                <a href="#" target="_blank" class="btn btn-outline-success mr-2">
                  <i class="fas fa-download mr-2"></i>with Examples and Docs
                </a>
                <a href="https://github.com/TummanoonW/Proto-Framework" target="_blank" class="btn btn-outline-info mr-2">
                  <i class="fas fa-cloud-download-alt mr-2"></i>Github
                </a>

              </div>
            </div>

          </div>

<?php
        }
    }