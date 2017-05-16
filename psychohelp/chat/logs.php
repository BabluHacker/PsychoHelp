<?php
/**
 * Created by PhpStorm.
 * User: mehedi
 * Date: 4/24/17
 * Time: 10:45 PM
 */

session_start();
$uname = $_SESSION['username'];

$reci = $_SESSION['recipient'];

require_once('db_chatConnect.php');



if($uname != 'Admin') {
    $result1 = mysqli_query($con, "SELECT * FROM logs WHERE (username = '$uname' AND recipient = '$reci') OR (username = '$reci' AND recipient = '$uname')  ORDER by id DESC");

}
else{ //admin
    if($reci == "all"){//no user selected
        $result1 = mysqli_query($con, "SELECT * FROM logs ORDER by id DESC");
    }
    else{
        $result1 = mysqli_query($con, "SELECT * FROM logs WHERE (username = '$uname' AND recipient = '$reci') OR (username = '$reci' AND recipient = '$uname')  ORDER by id DESC");
    }

}

while($result1 && $extract = mysqli_fetch_array($result1)){
    if($extract['username'] == "Admin"){
        echo "<span class ='uname' style='color: rgba(186,9,20,0.95)'>" . $extract['username'] . "</span>: <span class='msg'> " . $extract['msg'] . "</span><br>";

    }
    else {
        echo "<span class ='uname' style='color: #087806'>" . $extract['username'] . "</span>: <span class='msg'> " . $extract['msg'] . "</span><br>";
    }
}




?>