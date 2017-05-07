<?php
DEFINE ('DB_USER', 'psychohelp');
DEFINE ('DB_PASSWORD', 'psychohelp');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'psychohelp');

$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
OR die('Could not connect to MySQL: ' .
    mysqli_connect_error());

?>