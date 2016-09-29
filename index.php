<?php

require_once('vendor/autoload.php');
use Feeder\Controller\Feed,
    Respect\Rest\Router;

$app = new Router();

$app->get("/feed/*/*/*", function ($q, $count, $lang) {

    echo Feed::generateFeed($q, $count, $lang);

});

$app->run();
