<?php

//Turn on error reporting
error_reporting(E_ALL);
ini_set('display_errors', TRUE);

//Require the autoload file
require_once('vendor/autoload.php');

//Create an instance of the Base class
$f3 = Base::instance();
$f3->set('DEBUG', 3);

//Define a default route (home page)
$f3->route('GET /', function () {
    //echo "Hello world";
    $view = new Template();
    echo $view->render('views/home.html');
});

//Run fat free
$f3->run();