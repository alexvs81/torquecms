<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 20-08-14
 * Time: 20:12
 */

//namespace app\classes;


class Hash {

    public static function make( $string, $salt = '' ){
        return hash( 'sha256', $string . $salt );
    }

    public static function salt( $length ){
        if(function_exists("mcrypt_encrypt")) {
            return mcrypt_create_iv( $length, MCRYPT_RAND );
        } else {
            $alpha_numeric = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
            return substr(str_shuffle($alpha_numeric), 0, $length);
        }
    }

    public static function unique(){
        return self::make( uniqid() );
    }
} 