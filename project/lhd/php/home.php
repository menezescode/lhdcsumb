<?php
session_start();
include_once 'dbconnect.php';

if (!isset($_SESSION['userSession'])) {
 header("Location: index.php");
}

$query = $DBcon->query("SELECT * FROM tbl_users WHERE tusers_id=".$_SESSION['userSession']);
$userRow=$query->fetch_array();

$DBcon->close();

?>

42