
<?php
session_start(); //MUST be included whenever $_SESSION is used

$username = $_POST['username'];
$password = $_POST['password'];  //hash("sha1", $_POST['password'])

    if($username == ""){
        echo "Wrong username or password";
        echo "<a href='main.php'>Try Again </a>";
    }
    else{
        
        $_SESSION['username'] = $username;
        header('Location: profile.php'); //redircts to another page
    }
?>