<?php
    $dir = "../../"; //current directory
    include_once $dir . 'includer/includer.php'; 
    Includer::include_proto($dir); 
    Includer::include_view($dir, 'docs/view_asset.php');


    Header::initHeader($dir, "Asset - Docs", TRUE, "Docs", FALSE);
    DocsAssetView::initView($dir); 
    Footer::initFooter($dir, TRUE); 
