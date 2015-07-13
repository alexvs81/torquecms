<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 13-07-2015
 * Time: 20:40
 */

function sanitize($string) {
    return htmlentities($string, ENT_QUOTES, 'UTF-8');
}
