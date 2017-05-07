<?php
/**
 * Created by PhpStorm.
 * User: mehedi
 * Date: 5/7/17
 * Time: 2:32 PM
 */


$name   = "Patient Name: ". $_POST["name"]."\n";
$email  =  $_POST["mail"];
$age    = "\nage         : ". $_POST["age"]."\n";
$phone  = "Phone No    : ". $_POST["phone"]."\n";
$mental = "Mental State: ". $_POST["mental1"]."\n";
$option = "Division    : ". $_POST["option1"]."\n";
$sub    = $_POST["subject"]."\n";
$des    = "Description : ".$_POST["description"]."\n";

$msg = $name.$email.$age.$phone.$mental.$option."\nSubject : ".$sub."\n\n".$des;

$msg = wordwrap($msg,70);

$mail = "psychohelp.cnps@gmail.com";



//echo $email;
require_once 'profile/access/swiftmailer/lib/swift_required.php';

$subject = 'PsychoHelp | Appointment Request'; // Give the email a subject
//$address = "http://csedu.cf/psychohelp/profile/access/verify.php?email=".$email;
$body = $msg;

$transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, "ssl")
    ->setUsername('psychohelp.cnps@gmail.com')
    ->setPassword('psychohelp')
    ->setEncryption('ssl');

$mailer = Swift_Mailer::newInstance($transport);

$message = Swift_Message::newInstance($subject)
    ->setFrom(array($mail => 'psychohelp'))
    ->setTo(array($email.','.$mail))
    ->setBody($body);

$result = $mailer->send($message);
if ($result)
    echo "<script>alert('SUCCESS')</script>";
else
    echo "<script>alert('FAILED')</script>";

header("Location: /psychohelp");

?>

