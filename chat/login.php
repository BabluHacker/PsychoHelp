<?php
/**
 * Created by PhpStorm.
 * User: mehedi
 * Date: 4/25/17
 * Time: 12:26 AM
 */
session_start();
$username = $_POST['username'];
$password = $_POST['password'];
require_once('db_chatConnect.php');

$result = mysqli_query($con, "SELECT * FROM users WHERE username='$username' AND password='$password'");
//find active user numbers
$activeUser = mysqli_query($con, "SELECT * FROM users WHERE isActive = 1");



if(mysqli_num_rows($result)){
    $res = mysqli_fetch_array($result);


    if($res['username'] == "Admin"){
        $_SESSION['username'] = $res['username'];
        $_SESSION['recipient'] = "all";
    }
    else{
        $_SESSION['username'] = $res['username'];
        $_SESSION['recipient'] = "Admin";
    }



    //update user's activity -- isActive to 1
    mysqli_query($con, "UPDATE users SET isActive=1 WHERE username='$username'");
    //updated

    echo "<center>";
    echo "You are logged in, click <a href='index.php'>here</a> to go back to main chat window";
    echo "</center>";
}
else{
    echo "<center>";
    echo "No user found. Plese go <a href = 'index.php'>back</a> and enter correct login.<br>";
    echo "You can register a new account <a href = 'register.php'>here</a>";
    echo "</center>";
}



?>