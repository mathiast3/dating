<?php
/**
 * Created by PhpStorm.
 * User: Mathias
 * Date: 1/18/2018
 * Time: 7:24 PM
 */
    require_once ('vendor/autoload.php');

    $f3 = Base::instance();

    //turn on error reporting
    $f3->set('DEBUG',3);

    $f3->route('GET /', function() {
        $view = new View;
        echo $view->render('pages/home.html');
    });

    $f3->route('GET|POST /pages/personal', function() {
        $view = new View;
        echo $view->render('pages/PersonalInfo.php');
    });

    $f3->route('GET|POST /pages/profile', function() {
        $view = new View;
        echo $view->render('pages/Profile.php');
    });

    $f3->route('GET|POST /pages/interests', function() {
        $view = new View;
        echo $view->render('pages/Interests.php');
    });

    $f3->route('GET|POST /pages/summary', function() {
        $view = new View;
        echo $view->render('pages/summary.php');
    });

    $f3->route('GET|POST /pages/admin', function() {
        $view = new View;
        echo $view->render('pages/admin.php');
    });

    $f3->run();
