<?php

$var = $_GET["var"];

require_once('../mysqli_connect.php');
$sucess; $fail;



if($var=="login")
{
    $email = $_GET["email"] ;
    $password = $_GET["pass"] ;


    $sucess="Succesfully logged in";
    $fail = "invalid email id or password";


  //  require_once('../mysqli_connect.php');
    $query = "SELECT fname,lname,email,password,admin,verified FROM user_info";
    $response = @mysqli_query($dbc, $query);
    $flag = 0;
    $verify = 2;
    while($row=mysqli_fetch_array($response))
    {

        if($row["email"]==$email && $row["password"]==$password)
        {
            if($row["verified"]==1) {
                $flag = 1;


                $arr = array('flag' => 1, 'fname' => $row["fname"], 'lname' => $row["lname"], 'admin' => $row["admin"],'msg' =>$sucess);
                $json = json_encode($arr);
                echo $json;
                //echo $sucess;
                break;
            }
            else{ //not verified
                $verify = $row["verified"]; // 0

            }
        }

    }
    if($flag==0)
    {
        if($verify == 2 ){ //doesn't exist
            $arr = array('flag' => 0, 'msg' => "invalid email or password");

        }
        else if($verify == 0 ) {
            $arr=array('flag'=>0,'msg'=> "Please verify your e-mail");
        }
        $json = json_encode($arr);
        echo $json;
    }


}



if($var=="quizsubmit") {

    session_start();
   // $data = json_decode($_GET["data"]);
    $data = $_GET["data"];
    $dbname = $_GET["dbname"];
    $res = $_GET["result"];


    if(isset( $_SESSION["state"]) &&  $_SESSION["email"] ) {
        $_email = $_SESSION["email"];
        $fname = $_SESSION["fname"];

        $sucess = "Thank you " . $fname . ", for your response";

        $fail = " Error in submission " ;


        $db = "user_result";
        $query = "INSERT INTO $db (email,result) VALUES (?,?)";


        $stmt = mysqli_prepare($dbc, $query);

        mysqli_stmt_bind_param($stmt, "ss", $_email, $res);
        mysqli_stmt_execute($stmt);
        $affected_rows = mysqli_stmt_affected_rows($stmt);
        if ($affected_rows) {


            echo $sucess;
        } else echo $fail.mysqli_error($dbc);
    }
    else {

        $query = "INSERT INTO $dbname (q1,q2,q3,q4,result) VALUES (?,?,?,?,?)";


        $stmt = mysqli_prepare($dbc, $query);

        mysqli_stmt_bind_param($stmt, "sssss", $data[0], $data[1], $data[2], $data[3], $res);
        $sucess = "Thank you for your response";
        $fail = " Error in submission. Please check if you've answered all question";
        mysqli_stmt_execute($stmt);

        $affected_rows = mysqli_stmt_affected_rows($stmt);


        if ($affected_rows)
            echo $sucess;
        else echo $fail;
    }

}

if($var=="register")
{
    $data = json_decode($_GET["data"]);
    $dbname = $_GET["dbname"];

    $ad = 0;
    $vf = 0;

     $affected_rows= mysqli_query($dbc,"INSERT INTO $dbname(fname,lname,email,password,gender,admin,verified) VALUES ('$data[1]','$data[2]','$data[3]','$data[0]','$data[4]','$ad','$vf')");

    $flag=0;
    if($affected_rows) {

        $success = "Thank you for your interest.A verification mail is sent to your mail account. Please verify it to login to your account";
        $flag=1;
       // header("Location: /psychohelp/profile/access/verify.php?email=".$data[3]);

    }

    else {
        $flag=0;
        $success = "registration failed. register with new email id";
    }



    $arr=array('flag'=>$flag,'msg'=> $success );
    $json = json_encode($arr);
    echo $json;



}





?>

