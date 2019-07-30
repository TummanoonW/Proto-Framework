<?php
    class App{
        public static $name = "Proto-Framework";
        public static $framework = "Proto-Framework";
        public static $version = "4.2";
        public static $lastUpdate = "2019/07/28 23:00:00";
        public static $platform = ["PHP", "HTML", "JS", "CSS", "Front-End"]; 


        /* --- Web Page file names --- */
        public static $pageAbout = "about.php";
        public static $pageLogin = "login.php";
        public static $pageRegister = "register.php";
        public static $pageProfile = "profile.php";
        public static $pageFeedback = "feedback.php";
        public static $pageRegisterSuccess = "register-success.php";
        public static $pageResetPassword = "reset-password.php";  
        public static $pageResetSuccess = "reset-success.php";
        public static $pageGetStart = "pages/get-start/";
        public static $pageExAPI = "pages/examples/ex-api.php";
        public static $pageExOffDB = "pages/examples/ex-off-db.php";
        /* --- Web Page file names --- */


        /* --- Web Route file names --- */
        public static $routeAuth = "route/auth.php";
        public static $routeProfile = "route/profile.php";
        public static $routeLogOut = "route/logout.php";
        public static $routeExample = "route/example.php";
        /* --- Web Route file names --- */


        /* --- API file names --- */
        public static $apiURL = "https://www.trialation.com/proto-api/"; //base URL to call API
        public static $apiAuth = "index.php";
        public static $apiProfile = "profile.php";
        public static $apiExample = "example.php";
        /* --- API file names --- */

    }
?>