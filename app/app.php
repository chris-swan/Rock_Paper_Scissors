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
        // $player_one_input = $new_player_one_input->rpsGame($_GET['player_one']);
        return $app['twig']->render('results.html.twig', array('result' => $outcome));
        // return $app['twig']->render('results.html.twig', array('player_one_input' => $player_one_input));

    });

    return $app;




?>
