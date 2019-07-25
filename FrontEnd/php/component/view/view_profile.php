<?php
    class ProfileView{ ////profile HTML elements loader

        public static function initView($dir, $auth){
?>
            <body>
                <?php Toolbar::initToolbar($dir, 'Profile'); ?>
                
                <div class="container padding-top">
                    <div class="card">
                      <form class="card-body" action="<?php Nav::printURL($dir, App::$routeProfile . '?m=edit&id=' . $auth->ID ) ?>" method="POST">
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
                          <label for="exampleInputUsername">New Username (Optional)</label>
                          <input value="<?php echo $auth->username ?>" type="text" name="username" class="form-control" id="exampleInputUsername" placeholder="Enter new username">
                        </div>

                        <div class="form-group">
                          <label for="exampleInputPassword">New Password (Optional)</label>
                          <input value="" type="password" name="password" class="form-control" id="exampleInputPassword" placeholder="Enter new password">
                        </div>
                        
                        <button type="submit" class="btn btn-success">Update Profile</button>
                        <a href="<?php Nav::printURL($dir, App::$routeLogOut); ?>" class="btn btn-outline-danger">
                            <i class="fas fa-sign-out-alt"></i>
                            Log Out
                        </a>
                        </form>
                    </div>
                    <br>

                </div>

                <?php Script::initScript($dir); ?>
<?php
        }

    }