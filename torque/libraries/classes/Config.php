<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 20-08-14
 * Time: 20:11
 */

//namespace app\classes;


class Config {

    public static function get( $path = null ){

        if( $path ){
            $config = $GLOBALS['config'];
            $path = explode( '/', $path );

            foreach( $path as $bit ){
                if( isset( $config[$bit] ) ){
                    $config = $config[$bit];
                }
            }

            return $config;
        }

        return false;
    }
} 