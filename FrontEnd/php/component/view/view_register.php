<?php
    class RegisterView{
        public static function initView($dir){
?>
            <body>
                <div class="container padding-top">
                    <div class="text-center">
                        <img src="<?php Asset::embedIcon($dir, 'primary.svg'); ?>" class="logo">
                        <br><br>
                        <h4><?php echo App::$name; ?></h4>
                    </div>

                    <form class="padding-top" action="<?php Nav::printURL($dir, App::$routeAuth . "?m=register"); ?>" method="POST">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Username</label>
                        <input name="username" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter username">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                      </div>

                      <div class="padding-top">
                        <button type="submit" class="btn btn-primary btn-block">Register</button>
                      </div>
                    </form>
                </div>               
<?php
        }
    }