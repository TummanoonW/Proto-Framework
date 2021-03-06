<?php
    //Proto Framework
    //v5
    //Developed by Tummanoon Wacha-em

    $dir = "./"; //current directory
    include_once $dir . '@proto/app.php';
    App::include_proto($dir);

    Header::initHeader($dir, "Reset Password", FALSE, '', FALSE);
    ?>
        <div class="container padding-top">
          <div class="text-center">
              <img src="<?php Asset::embedIcon($dir, 'primary.svg'); ?>" class="logo">
              <br><br>
              <h4><?php echo App::$name; ?></h4>
          </div>
          <form class="padding-top" action="<?php Nav::echoRouter($dir, "auth.php", "reset"); ?>" method="POST">
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
              <small id="emailHelp" class="form-text text-muted">Make sure this email is the one you already registered.</small>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">New password</label>
              <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="padding-top">
              <button type="submit" class="btn btn-primary btn-block">Reset</button>
            </div>
          </form>                    
        </div>
    <?php
    Footer::initFooter($dir, FALSE);


