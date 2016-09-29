<?php
/**
 * Created by PhpStorm.
 * User: zanon
 * Date: 9/29/16
 * Time: 12:12 AM
 */

namespace Feeder\Helper;

use GeneratedHydrator\Configuration;

class ObjectToArray
{

    /**
     * @param String $className
     * @param Object $object
     * @return Array
     */
    public function getArray($className, $object)
    {
        $configHydrator = new Configuration($className);
        $hydratorClass = $configHydrator->createFactory()->getHydratorClass();
        $hydrator = new $hydratorClass();

        return $hydrator->extract($object);
    }

}