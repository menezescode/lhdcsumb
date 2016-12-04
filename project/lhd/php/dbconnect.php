<?php
  $DBhost = "localhost";
  $DBuser = "mirandasaari";
  $DBpass = "";
  $DBname = "teamqueso";
  
  $DBcon = new MySQLi($DBhost,$DBuser,$DBpass,$DBname);
     if ($DBcon->connect_errno) {
         die("ERROR : -> ".$DBcon->connect_error);
     }
?>