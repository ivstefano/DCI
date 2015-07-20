<?php
/**
 * Created by Ivo Stefanov
 * Date: 5/1/15
 * Time: 2:33 AM
 */

namespace DCI\Behaviors;

use DCI\Common\Utility;

trait CastableBehavior
{
    public static function getFromContext($obj)
    {
        $casted = new static;
        foreach (Utility::objToArray($obj) as $key => $value) {
            $casted->$key = $value;
        }

        return $casted;
    }
}