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

    private $query;
    private $lang;
    private $count;
    private $paramsArray;

    /**
     * SearchModel constructor.
     * @param String $query
     * @param $lang
     * @param $count
     */
    public function __construct($query = null, $lang = null, $count = null)
    {
        $this->query = $query;
        $this->lang = $lang;
        $this->count = $count;
    }

    /**
     * @return null
     */
    public function getQuery()
    {
        return $this->query;
    }

    /**
     * @param null $query
     */
    public function setQuery($query)
    {
        $this->query = $query;
        $this->setParamsArray('q', $query);
    }

    /**
     * @return null
     */
    public function getLang()
    {
        return $this->lang;
    }

    /**
     * @param null $lang
     */
    public function setLang($lang)
    {
        $this->lang = $lang;
        $this->setParamsArray('lang', $lang);
    }

    /**
     * @return null
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * @param null $count
     */
    public function setCount($count)
    {
        $this->count = $count;
        $this->setParamsArray('count', $count);
    }

    public function getParamsArray()
    {
        return $this->paramsArray;
    }

    private function setParamsArray($key, $content)
    {
        if (!empty($content) || !is_null($content)) {
            $this->paramsArray[$key] = $content;
        }
    }

}