
<?php
session_start();


    unset($_SESSION['state']);
session_destroy();

header("Location: /psychohelp/profile");




?>

