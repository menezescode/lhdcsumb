<?php

session_start();

require_once 'dbconnect.php';

   $users_id_fk = $_POST['users_id_fk'];
   $url = $_POST['url'];
   $comment = $_POST['comment'];

  
   $sql = "INSERT INTO tbl_links (`tusers_id_fk`,`url`,`comment`) VALUES (?, ?, ?);"; 
            
    $statement = $DBcon->prepare($sql);
    
    $statement->bind_param("iss", $users_id_fk, $url, $comment);


    $statement->execute(); 

    
  $DBcon->close();

?>

<!DOCTYPE html>
<html>
<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">

    <title>Team Queso - Login</title>
    <link crossorigin="anonymous" href=
    "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
    integrity=
    "sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
    rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div class="signin-form">
        <div class="container">
            <form class="form-signin" id="login-form" method="post" name=
            "login-form">
                <h2 class="form-signin-heading">Team Queso</h2>

                <hr>
                <?php
                  if(isset($msg)){
                    echo $msg;
                  }
                ?>

                <div class="form-group">
                    <input class="form-control" name="username" placeholder=
                    "Type username" required="" type="username">
                    <span id="check-e"></span>
                </div>

                <div class="form-group">
                    <input class="form-control" name="password" placeholder=
                    "Type password" required="" type="password">
                </div>

                <hr>

                <div class="form-group">
                    <button class="btn btn-default" id="btn-login" name=
                    "btn-login" type="submit"><span class=
                    "glyphicon glyphicon-log-in"></span> &nbsp; Sign In</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>