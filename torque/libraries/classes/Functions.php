<?php

/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 13-07-2015
 * Time: 20:44
 */
class Functions
{
    public static function __callStatic($m, $args)
    {
        if (function_exists($m) !== true)
        {
            if (is_file(TORQUE.DS.'libraries'.DS.'functions'.DS. $m . '.php') !== true)
            {
                return false;
            }

            require(TORQUE.DS.'libraries'.DS.'functions'.DS. $m . '.php');
        }

        return call_user_func_array($m, $args);
    }
}