<?php
    $dir = "./"; //current directory
    include_once $dir . 'includer/includer.php';
    Includer::include_proto($dir);
    Includer::include_view($dir, 'view_feedback.php');

    $paths = array(
        new Path(FALSE, "Home",     Nav::getHome($dir)),
        new Path(TRUE,  "Feedback",  '')
    );

    Header::initHeader($dir, 'Feedback', TRUE, 'More', TRUE); 
    FeedbackView::initView($dir, $paths); 
    Footer::initFooter($dir, TRUE);
