<?php
session_start();

//Connect to database and log in

//Set _SESSION
$_SESSION["action"] = "show profile";
$_SESSION["username"] = $username;
$_SESSION["password"] = $password;

//Redirect to the profile
header("profile.php");
exit();
?>
