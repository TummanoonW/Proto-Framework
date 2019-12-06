<?php
    //automatically encode UTF8 when Includer is loaded
    header('Content-Type: text/html; charset=utf-8');

    class App{
        /* --- (DO NOT DELETE) Framework Configuration --*/
        public static $name = "Proto-Framework";
        public static $framework = "Proto-Framework";
        public static $version = "5.0";
        public static $lastUpdate = "2019/11/21 23:00:00";
        public static $platform = ["PHP", "HTML", "JS", "CSS", "Front-End"]; 
        
        //database configuration
        public static $CONFIG = array(
            'host'      => 'localhost',
            'username'  => 'cp255290_proto',
            'password'  => 'trialation27',
            'db'        => 'cp255290_proto'
        );
        
        public static $debuggingMode = TRUE;
        
        public static $iconURL = "asset/images/logo/primary.svg";
        public static $icon_path = "asset/images/icons/";
        public static $thumb_path = "asset/images/thumbs/";
        public static $image_path = "asset/images/";
        public static $icon_def = "asset/images/icons/def.svg";
        public static $thumb_def = "asset/images/thumbs/def.png";
        public static $image_def = "asset/images/def.png";
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
        
        public static $pageDocs = "page/docs/";
        public static $pageDocsIntroduction = "page/docs/introduction.php";
        public static $pageDocsIncluder = "page/docs/includer.php";
        public static $pageDocsComponent = "page/docs/component.php";
        public static $pageDocsPages = "page/docs/pages.php";
        public static $pageDocsConfig = "page/docs/config.php";
        public static $pageDocsRoute = "page/docs/route.php";
        public static $pageDocsFunction = "page/docs/function.php";
        public static $pageDocsAsset = "page/docs/asset.php";
        
        
        public static $pageExAPI = "page/examples/ex-api.php";
        public static $pageExOffDB = "page/examples/ex-off-db.php";
        public static $pageProtoAPI = "page/proto-api/";
        public static $pageProtoDB = "page/proto-db/";
        /* --- Web Page file names --- */
        
        
        /* --- Web Route file names --- */
        public static $routeAuth = "router/auth.php";
        public static $routeProfile = "router/profile.php";
        public static $routeLogOut = "router/logout.php";
        public static $routeExample = "router/example.php";
        public static $routeFeedback = "router/feedback.php";
        /* --- Web Route file names --- */
        
        
        /* --- API file names --- */
        public static $apiURL = "https://www.trialation.com/proto-api/"; //base URL to call API
        public static $apiAuth = "index.php";
        public static $apiProfile = "profile.php";
        public static $apiExample = "example.php";
        public static $apiFeedback = "feedback.php";
        /* --- API file names --- */


        //Include all files within 'library' directory
        public static function include_library($dir){
            foreach (glob($dir . "@proto/library/*.php") as $filename){
                include_once $filename;
            }
        }

        //Include all files within 'structure' directory
        //Structure is obsolete and was never used
        public static function include_structure($dir){
            foreach (glob($dir . "@proto/structure/*.php") as $filename){
                include_once $filename;
            }
        }

        //Include all files within 'layout' directory
        public static function include_layout($dir){
            foreach (glob($dir . "@proto/layout/*.php") as $filename){
                include_once $filename;
            }
        }

        //Include Proto-Framework Infastructure
        public static function include_proto_api($dir){
            if(!isset($dir)){
                $dir = "./";
            }

            self::include_library($dir);
            self::include_structure($dir);
        }

        //Include Proto-Framework Infastructure
        public static function include_proto($dir){
            if(!isset($dir)){
                $dir = "./";
            }
            
            self::include_library($dir);
            self::include_structure($dir);
            self::include_layout($dir);
        }

        //Include specific component view given by file name
        public static function include_view($dir, $file){
            if(!isset($dir)){
                $dir = "./";
            }
            
            $arr = explode(".", $file);
            $lenght = count($arr);
            if($lenght == 1) $file = $file . ".php";

            include_once $dir . '@proto/view/' . $file;
        }

        public static function include_fun($dir, $file){
            if(!isset($dir)){
                $dir = "./";
            }

            $arr = explode(".", $file);
            $lenght = count($arr);
            if($lenght == 1) $file = $file . ".php";

            include_once $dir . '@proto/function/' . $file;
        }

    }