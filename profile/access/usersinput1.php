<?php

$var = $_GET["var"];

require_once('../mysqli_connect.php');
$sucess; $fail;



    $data = json_decode($_GET["data"]);
    $dbname = $_GET["dbname"];
    $query = "INSERT INTO $dbname (fname,lname,email,password,gender) VALUES (?,?,?,?,?)";


    $stmt = mysqli_prepare($dbc, $query);

    mysqli_stmt_bind_param($stmt, "sssss", $data[1],$data[2],$data[3],$data[0],$data[4]);

    $success =  1;
    

    mysqli_stmt_execute($stmt);

    $affected_rows = mysqli_stmt_affected_rows($stmt);


    if($affected_rows)
         $success = "success";
else $success ="fail";
echo $success;






?>

