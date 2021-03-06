<?php
    //Proto Framework
    //v5
    //Developed by Tummanoon Wacha-em

    $dir = "./"; //current directory
    include_once $dir . '@proto/app.php'; //include Includer file to operate
    App::include_proto($dir); //include Proto Framework Architecture

    Header::initHeader($dir, "Login", FALSE, '', FALSE); //initialize HTML header elements with 'Register' as Title
    ?>
        <div class="container padding-top">
          <div class="text-center">
              <img src="<?php Asset::embedIcon($dir, 'primary.svg'); ?>" class="logo">
              <br><br>
              <h4><?php echo App::$name; ?></h4>
          </div>
          <form class="padding-top" action="<?php Nav::echoRouter($dir, "auth.php", "register"); ?>" method="POST">
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password (max 12 letters)</label>
              <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" maxlength="12">
            </div>
            <div class="form-group">
              <label for="exampleInputUsername">Username (max 20 letters)</label>
              <input name="username" type="text" class="form-control" id="exampleInputUsername" placeholder="Enter username" maxlength="20">
            </div>
            <div class="padding-top">
              <button type="submit" class="btn btn-primary btn-block">Register</button>
            </div>
          </form>
        </div>
    <?php
    Footer::initFooter($dir, FALSE); //initialize HTML footer elements


