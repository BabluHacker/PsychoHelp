<?php
/**
 * Created by PhpStorm.
 * User: mehedi
 * Date: 5/6/17
 * Time: 3:08 AM
 */


session_start();
//$state =  trim($_SESSION["state"]);
if(isset( $_SESSION["state"])){
    echo "<script>alert('aaaa')</script>";
    if($_SESSION["admin"] == 1){
        header("Location: /psychohelp/profile/access/user_profile_admin.php");
    }
    else{
        header("Location: /psychohelp/profile/access/user_profile.php");
    }


    exit();
    // echo "<script> window.location.replace('http://localhost:63342/psycho_help/index.html')</script>";

}

?>