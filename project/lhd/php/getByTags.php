<?php

include 'dbconnect.1.php';
$DBcon = getDatabaseConnection();

    function displayBySingleTag($tag){
    
        global $DBcon;
        
        $sql = "SELECT url,comment FROM tbl_links INNER JOIN tbl_tags ON tbl_links.tlinks_id = tbl_tags.tlinks_id_fk WHERE tag = '$tag'";
                
        $statement = $DBcon->prepare($sql);
        $statement->execute();
        $record = $statement->fetchALL(PDO::FETCH_ASSOC); 
        return $record;
        
    }
    
    $tags = $_POST['tags'];
    $myArray = explode(',', $tags);
    $arr = [];
    foreach ($myArray as $value) {
        $arr=array_merge($arr,displayBySingleTag($value));
        
    }
    echo json_encode($arr);
?>