<?php
/**
 * Created by PhpStorm.
 * User: mehedi
 * Date: 5/7/17
 * Time: 2:32 PM
 */

    $name   = "Patient Name: ". $_POST["name"]."\n";
    $email  = "email       : ". $_POST["mail"]."\n";
    $age    = "age         : ". $_POST["age"]."\n";
    $phone  = "Phone No    : ". $_POST["phone"]."\n";
    $mental = "Mental State: ". $_POST["mental1"]."\n";
    $option = "Division    : ". $_POST["option1"]."\n";
    $sub    = $_POST["subject"];
    $des    = $_POST["description"];

    $msg = $name.$email.$age.$phone.$mental.$option;

    $msg = wordwrap($msg,70);

    $mail = "psychohelp.cnps@gmail.com";




    $headers = 'From: '.$email . "\r\n";
    $headers .= 'Cc: mehedi1055@gmail.com' . "\r\n";
    $return = mail($mail, $sub, $msg, $headers);


    if(!$return){
        echo "<script>alert('Something Occurred Wrong. Please Retry')</script>";
    }
    else{
        echo "<script>alert('Appointment Request has been sent')</script>";
    }


?>