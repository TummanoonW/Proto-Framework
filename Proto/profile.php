<?php
    //Proto Framework
    //v5
    //Developed by Tummanoon Wacha-em

    $dir = "./"; //current directory
    include_once $dir . '@proto/app.php'; //include Includer file to operate
    App::include_proto($dir); //include Proto Framework Architecture

    $auth = Session::getAuth(); //get Logged In user

    if(Session::checkUserExisted()){
        $paths = array(
            new Path(FALSE, "Home",     Nav::getHome($dir)),
            new Path(TRUE,  "Profile",  Nav::getURL($dir, 'profile.php'))
        );

        Header::initHeader($dir, "$auth->username - Profile", TRUE, 'Profile', TRUE); //initialize HTML header elements with 'Profile' as Title
        ?>
            <div class="container padding-top">
              <?php Breadcrumb::initBreadcrumb($dir, $paths); ?>    
              <div class="card">
                <form class="card-body" action="<?php Nav::echoURL($dir, "router/profile.php" . '?m=edit&id=' . $auth->ID ) ?>" method="POST">
                  <h5 class="card-title"><?php echo $auth->username ?>'s Profile</h5>
                  <div class="form-group">
                    <label for="exampleInputID">User ID</label>
                    <input value="<?php echo $auth->ID ?>" type="number" name="ID" class="form-control" id="exampleInputID" placeholder="Enter ID" disabled>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail">Email address</label>
                    <input value="<?php echo $auth->email ?>" type="email" name="email" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter email" disabled>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputUsername">New Username (Optional) (max 20 letters)</label>
                    <input value="<?php echo $auth->username ?>" type="text" name="username" class="form-control" id="exampleInputUsername" placeholder="Enter new username" maxlength="20">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword">New Password (Optional) (max 12 letters)</label>
                    <input value="" type="password" name="password" class="form-control" id="exampleInputPassword" placeholder="Enter new password" maxlength="12">
                  </div>
                  
                  <button type="submit" class="btn btn-success">Update Profile</button>
                  <a href="<?php Nav::echoURL($dir, "router/logout.php"); ?>" class="btn btn-outline-danger">
                      <i class="fas fa-sign-out-alt"></i>
                      Log Out
                  </a>
                  </form>
              </div>
              <br>
            </div>
        <?php
        Footer::initFooter($dir, FALSE); //initialize HTML footer elements
    }else{
        Nav::gotoHome($dir); //if user did not log in, automatically return to home page
    }



