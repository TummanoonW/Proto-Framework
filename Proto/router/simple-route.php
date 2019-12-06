<?php 
$dir = "../"; 
include_once $dir . '@proto/app.php'; 
App::include_proto($dir); 

$io = new IO();

switch($io->method){ 
    case "product": 
        $x = $io->query->x; 
        $y = $io->query->y; 
        $product = $x * $y; 
        InfoPage::initPage($dir, "The product of $x and $y is $product."); 
        break; 
    default: 
        Nav::gotoHome($dir); 
        break; 
}