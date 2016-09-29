<?php
/**
 * Created by PhpStorm.
 * User: zanon
 * Date: 9/28/16
 * Time: 4:12 PM
 */

namespace Feeder\Model;


class ConsumerModel
{

    private $consumer_key;
    private $consumer_secret;

    /**
     * ConsumerModel constructor.
     * @param $consumer_key
     * @param $consumer_secret
     */
    public function __construct($consumer_key = null, $consumer_secret = null)
    {
        $this->consumer_key = $consumer_key;
        $this->consumer_secret = $consumer_secret;
    }

    /**
     * @return mixed
     */
    public function getConsumerKey()
    {
        return $this->consumer_key;
    }

    /**
     * @return mixed
     */
    public function getConsumerSecret()
    {
        return $this->consumer_secret;
    }

    public function toArray()
    {
        return get_object_vars($this);
    }


}