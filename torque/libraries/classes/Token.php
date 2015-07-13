<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 20-08-14
 * Time: 20:13
 */

//namespace app\classes;


class Token {

    public static function generate($tokenName = null){
		if( !$tokenName ){
			$tokenName = Config::get( 'session/token_name' );
		}
        return Session::put( $tokenName, md5( uniqid() ) );
    }

    public static function check( $token ){
        $tokenName = Config::get( 'session/token_name' );

        if( Session::exists( $tokenName ) && $token === Session::get( $tokenName ) ){
            Session::delete( $tokenName );
            return true;
        }
        return false;
    }
} 