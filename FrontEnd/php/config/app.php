<?php
    class App{
        public static $name = "Proto-Framework Plus";
        public static $framework = "Proto-Framework Plus";
        public static $version = "4";
        public static $platform = ["PHP", "HTML5", "Front-End"]; 

        public static $rootURL = "http://localhost:8080/proto/";

        public static $pageAbout = "about.php";
        public static $pageLogin = "login.php";
        public static $pageRegister = "register.php";
        public static $pageProfile = "profile.php";
        public static $pageFeedback = "feedback.php";
        public static $pageRegisterSuccess = "register-success.php";

        public static $pageGetStart = "get-start/index.php";


        public static $routeAuth = "route/auth.php";
        public static $routeProfile = "route/profile.php";
        public static $routeLogOut = "route/logout.php";

        public static $apiURL = "https://www.trialation.com/proto-api/"; //base URL to call API
        public static $apiAuth = "index.php";
        public static $apiProfile = "profile.php";

    }
?>