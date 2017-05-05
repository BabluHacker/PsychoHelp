
<?php
session_start();


    unset($_SESSION['state']);
session_destroy();


echo "<script> window.location.replace('../index.html')</script>";



?>

