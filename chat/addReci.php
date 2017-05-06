<?php
/**
 * Created by PhpStorm.
 * User: mehedi
 * Date: 4/26/17
 * Time: 2:26 PM
 */
session_start();
require_once('db_chatConnect.php');


$user = $_SESSION['username'];
$reci = $_REQUEST['reci'];
$_SESSION['recipient'] = $reci;


header('Location: index.php');
exit;


?>