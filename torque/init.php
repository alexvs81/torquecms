<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 13-07-2015
 * Time: 19:42
 */
if(!file_exists(TROOT.DS.'configuration.php')){
    // Run installation.
}

require_once( TROOT.DS.'configuration.php' );

spl_autoload_register( function( $class ){
    require_once( TORQUE.DS.'libraries'.DS.'classes'.DS.$class.'.php' );
} );

if(Config::get('setting/debugging'))
{
    ini_set('display_errors', 1);
    error_reporting(E_ALL ^ E_NOTICE);
}

// Bootstrap
$url = ( empty( Input::get( 'url' ) ) ) ? 'index': Input::get( 'url' );
$url = rtrim( $url, '/' );
$url = explode( '/', $url );

var_dump($url);
