<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 20-08-14
 * Time: 20:13
 */

//namespace app\classes;


class Redirect {

    public static function to( $location = null ){

        if( $location ){

            if( is_numeric( $location ) ){
                switch( $location ){
                    case 404:
                        header('HTTP/1.0 404 Not found');
                        include_once( 'app/includes/errors/404.php' );
                        exit;
                        break;
                }
            }

            header( "Location: {$location}" );
            exit;
        }
    }
} 