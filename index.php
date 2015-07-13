<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 13-07-2015
 * Time: 19:35
 */
if (version_compare(PHP_VERSION, '5.3.10', '<'))
{
    die('You are running a PHP Version lower than 5.3.10. For security reasons, please update you PHP!');
}
define('TBASE', __DIR__);
require_once( 'torque/includes/defines.php' );

require_once( TORQUE.DS.'init.php' );

$db = DB::getInstance()->get('torque_test');

echo '<pre>';
var_dump($db->results());
