<?php
    $dir = "./"; //current directory
    include_once $dir . '@proto/app.php';
    App::include_proto($dir);
    App::include_view($dir, 'view_feedback.php');

    $paths = array(
        new Path(FALSE, "Home",     Nav::getHome($dir)),
        new Path(TRUE,  "Feedback",  '')
    );

    $io = new IO();
    $err = $io->get->err;

    Header::initHeader($dir, 'Feedback', TRUE, 'More', TRUE); 
    FeedbackView::initView($dir, $paths, $err); 
    Footer::initFooter($dir, TRUE);
