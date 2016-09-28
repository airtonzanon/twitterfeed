<?php

namespace Feeder\Controller;

use Feeder\Model\SearchModel,
    Feeder\Service\AuthTwitter,
    Feeder\Model\ConsumerModel;

class Feed
{

    public function generateFeed($q)
    {
        $consumer = new ConsumerModel('s1utiEdlGwdv23HalLOJR3npg', 'iYROCvBH5qCuwWTJ8g9wcpkGBAb97oxBBR2lh8Lu9zRHxR42KO');

        $search = new SearchModel();

        $search->setQuery($q);
        $search->setCount(10);
        $search->setLang('pt');

        $auth = new AuthTwitter();
        return $this->response = $auth->conn($consumer)->get('search/tweets', $search->getParamsArray());
    }

}