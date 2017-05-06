<?php


    $name =$_GET["name"];
    $email=  $_GET["email"];
    echo $email." ".$name;
//echo $email;
require_once '/psychohelp/profile/access/swiftmailer/lib/swift_required.php';

    $subject = 'Psychohelp Signup | Verification'; // Give the email a subject
    $address = "http://csedu.cf/psychohelp/profile/access/verify.php?email=".$email;
    $body = '

    Thanks for signing up!
    Your account has been created, you can login with the following credentials after you have activated your account by pressing the url below.

    ------------------------
       var Username: ' . $name . '
    ------------------------

        Please click this link to activate your account:.
    ' . $address;

    $transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, "ssl")
            ->setUsername('duaudibook@gmail.com')
            ->setPassword('123isDangerous#')
            ->setEncryption('ssl');

    $mailer = Swift_Mailer::newInstance($transport);

    $message = Swift_Message::newInstance($subject)
        ->setFrom(array('noreply@psychohelp.com' => 'psychohelp'))
        ->setTo(array($email))
        ->setBody($body);

    $result = $mailer->send($message);
        if ($result)
            echo "SUCCESS";
        else
            echo "ERROR";

?>
