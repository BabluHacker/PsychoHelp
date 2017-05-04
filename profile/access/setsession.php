<?php
session_start();

    $_SESSION["state"] = "ok";
    $_SESSION["fname"] = $_GET['fname'];
    $_SESSION["lname"] = $_GET['lname'];
    $_SESSION["email"] = $_GET['email'];



?>
