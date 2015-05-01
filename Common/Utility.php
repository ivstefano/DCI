<?php
namespace Common;
/**
 * Created by Ivo Stefanov
 * Date: 5/1/15
 * Time: 2:26 AM
 */

class Utility
{
    public static function objToArray($instance)
    {
        $clone = (array)$instance;
        $rtn = array();
        $rtn['__KEYS'] = $clone;

        while (list($key, $value) = each($clone)) {
            $aux = explode("\0", $key);
            $newkey = $aux[count($aux) - 1];
            $rtn[$newkey] = $rtn['__KEYS'][$key];
        }
        unset($rtn['__KEYS']);
        return $rtn;
    }
}

