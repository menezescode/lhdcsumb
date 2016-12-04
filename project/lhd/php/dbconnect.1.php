<?php

function getDatabaseConnection(){
  $DBhost = "localhost";
  $DBuser = "mirandasaari";
  $DBpass = "";
  $DBname = "teamqueso";
  
  $DBcon = new PDO("mysql:host=$DBhost;dbname=$DBname", $DBuser, $DBpass);
   
   // Setting Errorhandling to Exception
   $DBcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
   return $DBcon;
     
}
    
?>