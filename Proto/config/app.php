<?php
    class App{
        /* --- (DO NOT DELETE) Framework Configuration --*/
        public static $name = "Proto-Framework";
        public static $framework = "Proto-Framework";
        public static $version = "4.5";
        public static $lastUpdate = "2019/08/13 23:00:00";
        public static $platform = ["PHP", "HTML", "JS", "CSS", "Front-End"]; 

        public static $debuggingMode = TRUE;
        /* ---------------------------------------------*/


        /* --- Web Page file names --- */
        public static $pageAbout = "about.php";
        public static $pageLogin = "login.php";
        public static $pageRegister = "register.php";
        public static $pageProfile = "profile.php";
        public static $pageFeedback = "feedback.php";
        public static $pageRegisterSuccess = "register-success.php";
        public static $pageResetPassword = "reset-password.php";  
        public static $pageResetSuccess = "reset-success.php";

        public static $pageDocs = "pages/docs/";
        public static $pageDocsIntroduction = "pages/docs/introduction.php";
        public static $pageDocsIncluder = "pages/docs/includer.php";
        public static $pageDocsComponent = "pages/docs/component.php";
        public static $pageDocsPages = "pages/docs/pages.php";
        public static $pageDocsConfig = "pages/docs/config.php";
        public static $pageDocsRoute = "pages/docs/route.php";
        public static $pageDocsFunction = "pages/docs/function.php";
        public static $pageDocsAsset = "pages/docs/asset.php";


        public static $pageExAPI = "pages/examples/ex-api.php";
        public static $pageExOffDB = "pages/examples/ex-off-db.php";
        public static $pageProtoAPI = "pages/proto-api/";
        public static $pageProtoDB = "pages/proto-db/";
        /* --- Web Page file names --- */


        /* --- Web Route file names --- */
        public static $routeAuth = "route/auth.php";
        public static $routeProfile = "route/profile.php";
        public static $routeLogOut = "route/logout.php";
        public static $routeExample = "route/example.php";
        public static $routeFeedback = "route/feedback.php";
        /* --- Web Route file names --- */


        /* --- API file names --- */
        public static $apiURL = "https://www.trialation.com/proto-api/"; //base URL to call API
        public static $apiAuth = "index.php";
        public static $apiProfile = "profile.php";
        public static $apiExample = "example.php";
        public static $apiFeedback = "feedback.php";
        /* --- API file names --- */

    }
?>