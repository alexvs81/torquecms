<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 13-07-2015
 * Time: 19:53
 */

// Global definitions
$parts = explode(DIRECTORY_SEPARATOR, TBASE);

// Defines
define('DS', DIRECTORY_SEPARATOR);
define('TROOT', implode(DS, $parts));
define('TSITE', TROOT);
define('TORQUE', TROOT.'/torque');
define('TADMIN', TROOT.'/administrator');