<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 20-08-14
 * Time: 20:12
 */

//namespace app\classes;


class Input {

    public static function exists( $type = 'post' ){
        switch( $type ){
            case 'post':
                return ( !empty($_POST) ) ? true : false;
            break;
            case 'get':
                return ( !empty($_POST) ) ? true : false;
            break;
            default:
                return false;
            break;
        }
    }

    public static function get( $item ){
        if( isset( $_POST[$item] ) ){
            return $_POST[$item];
        } else if( isset( $_GET[$item] ) ){
            return $_GET[$item];
        }
        return '';
    }
} 