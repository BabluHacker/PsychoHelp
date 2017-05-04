<?php

$var = $_GET["var"];

require_once('../mysqli_connect.php');
$success;



if($var=="login")
{
    $email = $_GET["email"] ;
    $password = $_GET["pass"] ;

    $sucess="Succesfully logged in";
    $fail = "invalid email id or password";

  //  require_once('../mysqli_connect.php');
    $query = "SELECT fname,lname,email,password FROM user_info";
    $response = @mysqli_query($dbc, $query);
    $flag = 0;
    while($row=mysqli_fetch_array($response))
    {

        if($row["email"]==$email && $row["password"]==$password)
        {
            $flag=1;


            $arr=array('flag'=>1,'fname' =>$row["fname"],'lname'=>$row["lname"] );
            $json = json_encode($arr);
            echo $json;
            //echo $sucess;
            break;
        }

    }
    if($flag==0)
    {
        $arr=array('flag'=>0,'msg'=> "invalid email or password" );
        $json = json_encode($arr);
        echo $json;
    }


}



else if($var=="quizsubmit") {
    $data = json_decode($_GET["data"]);
    $dbname = $_GET["dbname"];
    $query = "INSERT INTO $dbname (q1,q2,q3,q4) VALUES (?,?,?,?)";


    $stmt = mysqli_prepare($dbc, $query);

    mysqli_stmt_bind_param($stmt, "ssss", $data[0], $data[1], $data[2], $data[3]);
   	
   
    mysqli_stmt_execute($stmt);

    $affected_rows = mysqli_stmt_affected_rows($stmt);


    if($affected_rows)
		 $success =  "Thank you for your response";
        
    else {$success = " Error in submission. Please check if you've answered all question";}
	       
	 $json = json_encode($success);
	echo $json;
}

else if($var=="register")
{
    $data = json_decode($_GET["data"]);
    $dbname = $_GET["dbname"];
    $query = "INSERT INTO $dbname (fname,lname,email,password,gender) VALUES (?,?,?,?,?)";


    $stmt = mysqli_prepare($dbc, $query);

    mysqli_stmt_bind_param($stmt, "sssss", $data[1],$data[2],$data[3],$data[0],$data[4]);

    

    mysqli_stmt_execute($stmt);

    $affected_rows = mysqli_stmt_affected_rows($stmt);


    if($affected_rows)
		 $success =  "successful registration";
        
    else {$success = "registration failed. register with new email id";}
	 $json = json_encode($success);
	echo $json;
}





?>

