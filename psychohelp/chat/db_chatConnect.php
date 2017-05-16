<?php
/**
 * Created by PhpStorm.
 * User: mehedi
 * Date: 5/6/17
 * Time: 9:37 PM
 */

DEFINE ('DB_USER', 'psychohelp');
DEFINE ('DB_PASSWORD', 'psychohelp');
DEFINE ('DB_HOST', 'http://csedu.cf/');
DEFINE ('DB_NAME', 'psychohelp');

$con = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
OR die('Could not connect to MySQL: ' .
    mysqli_connect_error());

?>
