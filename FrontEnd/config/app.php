<?php
    class App{
        public static $name = "Proto-Framework Plus";
        public static $framework = "Proto-Framework Plus";
        public static $version = "4.1";
        public static $lastUpdate = "2019/07/27 23:00:00";
        public static $platform = ["PHP", "HTML5", "Front-End"]; 


        /* --- Paging and Routing file names --- */
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

        public static $routeAuth = "route/auth.php";
        public static $routeProfile = "route/profile.php";
        public static $routeLogOut = "route/logout.php";
        /* --- Paging and Routing file names --- */

        /* --- API file names --- */
        public static $apiURL = "https://www.trialation.com/proto-api/"; //base URL to call API
        public static $apiAuth = "index.php";
        public static $apiProfile = "profile.php";
        /* --- API file names --- */

    }
?>