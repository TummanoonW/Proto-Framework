<?php
    //Proto Framework
    //v5
    //Developed by Tummanoon Wacha-em

    $dir = "../../"; //current directory
    include_once $dir . '@proto/app.php';
    App::include_proto($dir);
    
    $paths = array(
        new Path(FALSE, "Home", Nav::getHome($dir)),
        new Path(FALSE, "Examples", ""),
        new Path(TRUE,  "Proto DB", "")
    );

    Header::initHeader($dir, "Proto DB", TRUE, 'Examples', TRUE); 
    ?>
        <div class="container padding-top">
            <?php Breadcrumb::initBreadcrumb($dir, $paths) ?>
            <h2><i class="fas fa-database mr-3"></i>To-Do App</h2>
            <h5 class="mt-4">Proto DB example (Offline Database with JS)</h5>
            <label class="text-black-50">Note: All the data you've inserted are stored on your web browser's cache data. It will not store online.</label>
            <div class="input-group mb-3 mt-4">
              <input id="input-text" type="text" class="form-control" placeholder="to-do (text)" aria-label="to-do (text)" aria-describedby="button-addon2">
              <input id="input-time" type="text" class="form-control" placeholder="time (o-clock)" aria-label="time (o-clock)" aria-describedby="button-addon2">
              <div class="input-group-append">
                <button onclick="add()" class="btn btn-outline-primary" type="button" id="button-addon2">
                    <i class="fas fa-plus"></i>&nbsp; to-do
                </button>
              </div>
            </div>
            <div id="list" class="list-group"></div>
            <div class="input-group mb-3 mt-5">
              <input id="input-time2" type="text" class="form-control" placeholder="search by time (o-clock)" aria-label="search by time (o-clock)" aria-describedby="button-addon2">
              <div class="input-group-append">
                <button onclick="search()" class="btn btn-outline-info" type="button" id="button-addon2">
                <i class="fas fa-search"></i> &nbsp; search
                </button>
              </div>
            </div>
            <div id="list2" class="list-group"></div>
        </div>
    <?php
    Script::customScript($dir, 'ex-off-db.js');
    Footer::initFooter($dir, TRUE); 


