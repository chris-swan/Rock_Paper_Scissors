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
        $outcome = $results->rpsGame($_GET['player_one'], $_GET['player_two']);
        $player_one = $_GET['player_one'];
        $player_two = $_GET['player_two'];
        return $app['twig']->render('results.html.twig', array('result' => $outcome, 'player_one' => $player_one, 'player_two' => $player_two));

    });

    return $app;




?>
