<?php

namespace Feeder\Controller;

use Twig_Loader_Filesystem,
    Twig_Environment,
    Feeder\Service\SearchService;

class FeedController
{

    public function generateFeed($q, $count, $lang)
    {
        $search = SearchService::search($q, $count, $lang);

        $loader = new Twig_Loader_Filesystem(__DIR__ . '/../View');
        $twig = new Twig_Environment($loader);

        return $twig->render('feed.xml', array('search' => $q, 'response' => $search));
    }

}
