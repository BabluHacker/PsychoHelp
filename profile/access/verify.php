<?php

if(isset($_GET["email"])) {
    $email = $_GET["email"];


    require_once('../mysqli_connect.php');
    $sucess;
    $fail;

    $sucess = "Succesfully logged in";
    $fail = "invalid email id or password";

    //  require_once('../mysqli_connect.php');
    $query = "SELECT email FROM user_info";
    $response = @mysqli_query($dbc, $query);
    $flag = 0;
    while ($row = mysqli_fetch_array($response)) {

        if ($row["email"] == $email) {
            $flag = 1;
            $query1 = "UPDATE user_info SET verified = 1 WHERE email = '$email'";
            $response1 = @mysqli_query($dbc, $query1);
            echo "successfully registered.Please login";
            echo '<a href="/psychohelp/profile/index.html">Click here</a>';


            break;
        }

    }
    if ($flag == 0) {
        echo "not updated";
    }


}


?>