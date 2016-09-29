<?php
/**
 * Created by PhpStorm.
 * User: zanon
 * Date: 9/28/16
 * Time: 5:15 PM
 */

namespace Feeder\Model;

class SearchModel
{

    private $q;
    private $lang;
    private $count;

    /**
     * SearchModel constructor.
     * @param String $q
     * @param $lang
     * @param $count
     */
    public function __construct($q = null, $count = null, $lang = null)
    {
        $this->q = $q;
        $this->lang = $lang;
        $this->count = $count;
    }

    /**
     * @return null
     */
    public function getQ()
    {
        return $this->q;
    }

    /**
     * @return null
     */
    public function getLang()
    {
        return $this->lang;
    }

    /**
     * @return null
     */
    public function getCount()
    {
        return $this->count;
    }

    public function toArray()
    {
        return array_filter(get_object_vars($this), function ($value) {
            return !is_null($value);
        });
    }

}