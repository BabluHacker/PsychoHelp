<?php
/**
 * Created by PhpStorm.
 * User: mehedi
 * Date: 4/26/17
 * Time: 2:17 PM
 */



session_start();
$uname = $_SESSION['username'];

$reci = $_SESSION['recipient'];

require_once('db_chatConnect.php');


////user list printing

if($uname == "Admin") {

    $user = mysqli_query($con, "SELECT * FROM users WHERE isActive = 1");
    echo "<a href='addReci.php?&reci=" . "all" . "'><span class='singleuser' >" . "all" . "</span></a><br>";
    while ($user && $extract = mysqli_fetch_array($user)) {
        echo "<a href='addReci.php?&reci=" . $extract['username'] . "'><span class='singleuser' >" . $extract['username'] . "</span></a><br>";
    }
}
else{
    echo "<span class='singleuser' >Active User List will be shown to ADMINS only</span><br>";
}

?>