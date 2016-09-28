<?php

require_once('vendor/autoload.php');
use Feeder\Controller\Feed,
    Respect\Rest\Router;

$app = new Router();

$app->get("/feed/*", function($q){

    $feed = new Feed();
    var_dump($feed->generateFeed($q));

});

$app->run();
