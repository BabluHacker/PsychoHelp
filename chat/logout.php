<?php
/**
 * Created by PhpStorm.
 * User: mehedi
 * Date: 4/25/17
 * Time: 1:32 AM
 */

session_start();
require_once('db_chatConnect.php');

//update user's isActive to 0
$username = $_SESSION['username'];
mysqli_query($con, "UPDATE users SET isActive=0 WHERE username='$username'");

session_destroy();

echo "<center>";
echo "You have logged out. click <a href='index.php'>here</a> to login again";

echo "</center>";

?>