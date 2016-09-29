<?php
/**
 * Created by PhpStorm.
 * User: zanon
 * Date: 9/29/16
 * Time: 10:00 AM
 */

namespace Feeder\Service;

use Feeder\Model\SearchModel,
    Feeder\Service\AuthTwitterService,
    Feeder\Model\ConsumerModel;

class SearchService
{
    /**
     * @param String $q
     * @param Integer $count
     * @param String $lang
     */
    public function search($q, $count, $lang)
    {
        $consumer = new ConsumerModel('CONSUMER_KEY', 'CONSUMER_SECRET');
        $search = new SearchModel($q, $count, $lang);

        $conn = AuthTwitterService::conn($consumer->toArray());
        return $conn->get('search/tweets', $search->toArray());
    }

}