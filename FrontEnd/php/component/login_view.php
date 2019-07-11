<?php
    class LoginView{

        public static function initView(){
?>

                <body class="login">


            <div class="d-flex align-items-center" style="min-height: 100vh">
                <div class="col-sm-8 col-md-6 col-lg-4 mx-auto" style="min-width: 300px;">
                    <div class="text-center mt-5 mb-1">
                        <div class="avatar avatar-lg">
                            <img src="<?php echo App::$iconURL ?>" class="avatar-img rounded-circle" alt="LearnPlus" />
                        </div>
                    </div>
                    <div class="d-flex justify-content-center mb-5 navbar-light">
                        <a href="student-dashboard.html" class="navbar-brand m-0"><?php echo App::$name ?></a>
                    </div>
                    <div class="card navbar-shadow">
                        <div class="card-header text-center">
                            <h4 class="card-title">Login</h4>
                            <p class="card-subtitle">Access your account</p>
                        </div>
                        <div class="card-body">

                            <a href="student-dashboard.html" class="btn btn-light btn-block">
                                <span class="fab fa-google mr-2"></span>
                                Continue with Google
                            </a>

                            <div class="page-separator">
                                <div class="page-separator__text">or</div>
                            </div>

                            <form method="POST" action="./route/login.php">
                                <div class="form-group">
                                    <label class="form-label" for="email">Your email address:</label>
                                    <div class="input-group input-group-merge">
                                        <input name="email" id="email" type="email" required="" class="form-control form-control-prepended" placeholder="Your email address">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <span class="far fa-envelope"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="password">Your password:</label>
                                    <div class="input-group input-group-merge">
                                        <input name="password" id="password" type="password" required="" class="form-control form-control-prepended" placeholder="Your password">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <span class="far fa-key"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <button type="submit" class="btn btn-primary btn-block">Login</button>
                                </div>
                                <div class="text-center">
                                    <a href="guest-forgot-password.html" class="text-black-70" style="text-decoration: underline;">Forgot Password?</a>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer text-center text-black-50">
                            Not yet a student? <a href="guest-signup.html">Sign Up</a>
                        </div>
                    </div>
                </div>
            </div>
<?php
        }

    }