<?php

include 'dbconnect.1.php';
$DBcon = getDatabaseConnection();

function writeMsg() {
    echo "Hello world!";
}

function displayById($id) {
    
    global $DBcon;
    
    $sql = "SELECT * FROM tbl_users INNER JOIN tbl_links ON tbl_users.tusers_id = tbl_links.tusers_id_fk 
    INNER JOIN tbl_tags ON tbl_links.tlinks_id = tbl_tags.tlinks_id_fk WHERE tusers_id = $id";
            
    $statement = $DBcon->prepare($sql);
    $statement->execute();
    $record = $statement->fetchALL(PDO::FETCH_ASSOC); 
    
    echo json_encode($record);
}

function displayBySingleTag($tag){

    echo $tag;
    global $DBcon;
    
    $sql = "SELECT url FROM tbl_links INNER JOIN tbl_tags ON tbl_links.tlinks_id = tbl_tags.tlinks_id_fk WHERE tag = '$tag'";
            
    $statement = $DBcon->prepare($sql);
    $statement->execute();
    $record = $statement->fetchALL(PDO::FETCH_ASSOC); 
    echo json_encode($record);
}

function displayByArrayTag($tag){
    
    $myArray = explode(',', $tag);
    
    foreach ($myArray as $value) {
        displayBySingleTag($value);
    }
}
    
// writeMsg(); // call the function
// displayBySingleTag('search');
displayByArrayTag('search, separate this');
?>