<?php
/*
 * Charlie Tang
 * 4/11/2023
 * 328/hello/index.php
 * Controller for hello project
 */

// Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once('vendor/autoload.php');

// create an F3 (Fat-Free Framework) object
$F3 = Base::instance();

// Define a default route
$F3->route('GET /', function () {
    //echo "<h1>Hello, World!</h1>";

    // Display a view page
    $view = new Template();
    echo $view->render('views/home.html');
});

// Run Fat-Free
$F3->run();
?>