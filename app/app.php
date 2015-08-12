<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Rps.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('rps.html.twig');
    });

    $app->get("/results", function() use ($app){
        $results = new Rps;
        $ = $results->rpsGame($_GET['player_one'], $GET['player_two'])
        /// not complete amd finish here^^^^^^^^  ->

        });

    return $app;




?>
