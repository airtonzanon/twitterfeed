<?php

require_once('vendor/autoload.php');
use Feeder\Controller\FeedController,
    Respect\Rest\Router;

$app = new Router();

$app->get("/feed/*/*/*", function ($q, $count, $lang) {

    echo FeedController::generateFeed($q, $count, $lang);

});

$app->run();
