<?php
    $dir = "../../"; //current directory
    include_once $dir . '@proto/app.php'; 
    App::include_proto($dir); 
    App::include_view($dir, 'docs/view_asset.php');


    Header::initHeader($dir, "Asset - Docs", TRUE, "Docs", FALSE);
    DocsAssetView::initView($dir); 
    Footer::initFooter($dir, TRUE); 
