
<?php
session_start();


    unset($_SESSION['state']);
session_destroy();


echo "<script> window.location.replace('/psycho_help/index.html')</script>";



?>

