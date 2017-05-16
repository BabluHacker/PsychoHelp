<?php

session_start();
require_once('../mysqli_connect.php');



        $email = $_SESSION["email"];
        $fname = $_SESSION["fname"];
        $data =$_GET["data"];
        $feed1 =$_GET["feed1"];
        $feed2= $_GET["feed2"];

        $sucess = "Thank you " . $fname . ", for your response";

        $fail = " Error in submission " ;



        $query = "UPDATE user_result SET feedback='$data', ret1='$feed1',ret2='$feed2' WHERE email = '$email' ";
        $response = @mysqli_query($dbc, $query);

        if ($response) {
            echo $sucess;
        } else echo $fail.mysqli_error($dbc);




?>