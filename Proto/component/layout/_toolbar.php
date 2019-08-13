<?php
    class Toolbar{ ////common toolbar HTML elements loader

        public static function initToolbar($dir, $active, $sticky){
          $auth = Session::getAuth();

?>
          <nav class="navbar navbar-expand-md navbar-dark bg-dark <?php if($sticky)echo 'sticky-top'; ?>">
            <a class="navbar-brand" href="<?php Nav::echoHome($dir); ?>">
              <img src="<?php Asset::embedIcon($dir, 'primary.svg'); ?>" width="30" height="30" class="d-inline-block align-top" alt="">
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item <?php self::printActive($active, 'Home'); ?>">
                  <a class="nav-link" href="<?php Nav::echoHome($dir); ?>">Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item <?php self::printActive($active, 'Docs'); ?>">
                  <a class="nav-link" href="<?php Nav::echoURL($dir, App::$pageDocs); ?>">Docs</a>
                </li>
                <li class="nav-item dropdown <?php self::printActive($active, 'Examples'); ?>">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Samples
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="<?php Nav::echoURL($dir, App::$pageExAPI) ?>">Proto API Project</a>
                    <a class="dropdown-item" href="<?php Nav::echoURL($dir, App::$pageExOffDB) ?>">Proto DB Project</a>
                  </div>
                </li>
                <li class="nav-item dropdown <?php self::printActive($active, 'More'); ?>">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    More
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="<?php Nav::echoURL($dir, App::$pageProtoAPI); ?>">Proto API Docs</a>
                    <a class="dropdown-item" href="<?php Nav::echoURL($dir, App::$pageProtoDB); ?>">Proto DB Docs</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" target="_blank" href="https://github.com/TummanoonW/Proto-Framework">GitHub</a>
                    <a class="dropdown-item" href="<?php Nav::echoURL($dir, App::$pageFeedback); ?>">Send a feedback</a>
                    <a class="dropdown-item" href="<?php Nav::echoURL($dir, App::$pageAbout); ?>">About</a>
                  </div>
                </li>
              </ul>

              <!-- Right Side Bar -->
              <div class="inline">
                <ul class="navbar-nav mr-auto">
                  <?php if(Session::checkUserExisted()){ ?>
                    <li class="nav-item <?php self::printActive($active, 'Profile'); ?>">
                      <a class="nav-link" href="<?php Nav::echoURL($dir, App::$pageProfile); ?>">
                        <i class="far fa-user"></i>
                        <?php echo $auth->username ?> 
                      </a>
                    </li>
                  <?php }else{ ?>
                    <li class="nav-item">
                      <a class="nav-link" href="<?php Nav::echoURL($dir, App::$pageRegister); ?>">
                        Register
                      </a>
                    </li>  
                    <li class="nav-item">
                      <a class="nav-link" href="<?php Nav::echoURL($dir, App::$pageLogin); ?>">
                        Log In
                      </a>     
                    </li>            
                  <?php } ?>
                </ul>
              </div>
            </div>
          </nav>
<?
            }

            public static function printActive($active, $title){
              if($active == $title){
                echo 'active';
              }
            }
        }                                              
    
?>