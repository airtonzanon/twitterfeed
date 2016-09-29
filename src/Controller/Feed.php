<?php

namespace Feeder\Controller;

use Feeder\Model\SearchModel,
    Feeder\Service\AuthTwitter,
    Feeder\Model\ConsumerModel,
    Feeder\Helper\ObjectToArray,
    Twig_Loader_Filesystem,
    Twig_Environment;

class Feed
{

    public function generateFeed($q)
    {
        $consumer = new ConsumerModel('CONSUMER_KEY', 'CONSUMER_SECRET');
        $search = new SearchModel();

        $search->setQuery($q);
        $search->setCount(10);
        $search->setLang('pt');

        $conn = AuthTwitter::conn(ObjectToArray::getArray('Feeder\Model\ConsumerModel', $consumer));
        $response = $conn->get('search/tweets', $search->getParamsArray());

        $loader = new Twig_Loader_Filesystem(__DIR__ . '/../View');
        $twig = new Twig_Environment($loader);

        return $twig->render('feed.xml', array('search' => $search->getQuery(), 'response' => $response));
    }

}