<?php

session_start();

require_once 'dbconnect.php';

   $users_id_fk = $_POST['users_id_fk'];
   $url = $_POST['url'];
   $comment = $_POST['comment'];
   $tag = $_POST['tag'];
   
   echo "url=$url saved!";

   $sql = "INSERT INTO tbl_links (`tusers_id_fk`,`url`,`comment`) VALUES (?, ?, ?);"; 
            
    $statement = $DBcon->prepare($sql);
    $statement->bind_param("iss", $users_id_fk, $url, $comment);
    $statement->execute();
    
    $last_id = $DBcon->insert_id;
    
    $sql = "INSERT INTO tbl_tags (`tlinks_id_fk`,`tag`) VALUES (?, ?);"; 

    $statement = $DBcon->prepare($sql);
    $statement->bind_param("is", $last_id , $tag);
    $statement->execute();
    
  $DBcon->close();

?>