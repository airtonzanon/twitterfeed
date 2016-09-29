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
        $consumer = new ConsumerModel('PwRo3VchZ9826Fan2KZukCMfK', 'hwXTV9JfbjCllK4lKCnba0xxFykNS9vTxhmPXWA8XfAvcy7Pz0');
        $search = new SearchModel($q, $count, $lang);

        $conn = AuthTwitterService::conn($consumer->toArray());
        return $conn->get('search/tweets', $search->toArray());
    }

}