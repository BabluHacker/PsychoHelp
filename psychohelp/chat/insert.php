<?php
/**
 * Created by PhpStorm.
 * User: mehedi
 * Date: 4/24/17
 * Time: 10:45 PM
 */
session_start();
$uname = $_SESSION['username'];
$msg = $_REQUEST['msg'];
$reci = $_SESSION['recipient'];
require_once('db_chatConnect.php');


mysqli_query($con,"INSERT INTO logs(username, msg, recipient) VALUES ('$uname', '$msg', '$reci') ");


if($uname != "Admin") {
    $result1 = mysqli_query($con, "SELECT * FROM logs WHERE username = '$uname' AND reipient = '$reci' ORDER by id DESC");
}
else{
    $result1 = mysqli_query($con, "SELECT * FROM logs ORDER by id DESC");
}

while($result1 && $extract = mysqli_fetch_array($result1)){
    if($extract['username'] == "Admin"){
        echo "<div class='speech-bubble'><span class ='uname' style='color: #2b542c'>" . $extract['username'] . "</span>: <span class='msg'> " . $extract['msg'] . "</span></div><br>";

    }
    else {
        echo "<div class='speech-bubble'><span class ='uname' style='color: #0d0d54'>" . $extract['username'] . "</span>: <span class='msg'> " . $extract['msg'] . "</span></div><br>";
    }
}


?>