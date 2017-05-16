<?php


DEFINE ('DB_USER', 'sql12174464');
DEFINE ('DB_PASSWORD', 'RpsD87teFJ');
DEFINE ('DB_HOST', 'sql12.freemysqlhosting.net');
DEFINE ('DB_NAME', 'sql12174464');

/*
DEFINE ('DB_USER', 'psychohelp');
DEFINE ('DB_PASSWORD', 'psychohelp');
DEFINE ('DB_HOST', 'csedu.cf/phpmyadmin');
DEFINE ('DB_NAME', 'psychohelp');
*/
$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
OR die('Could not connect to MySQL: ' .
    mysqli_connect_error());

/*DEFINE ('DB_USER', 'studentweb');
DEFINE ('DB_PASSWORD', 'bismillah');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'psycho_help');

$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
OR die('Could not connect to MySQL: ' .
    mysqli_connect_error());*/

?>
