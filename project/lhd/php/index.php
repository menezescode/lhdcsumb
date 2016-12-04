<?php

session_start();

require_once 'dbconnect.php';

if (isset($_SESSION['userSession'])!="") {
  header("Location: home.php");
  exit;
}

if (isset($_POST['btn-login'])) {
  $username = strip_tags($_POST['username']);
  $password = strip_tags($_POST['password']);

  $username = $DBcon->real_escape_string($username);
  $password = $DBcon->real_escape_string($password);

  $query = $DBcon->query("SELECT * FROM tbl_users WHERE username='$username'");
  $row=$query->fetch_array();

  $count = $query->num_rows; // Se a combinação email/pass for correta então o retorno tem q ser 1 linha

  $tempPass=$row['password'];

  if (($password == $row['password']) && $count==1) {
    $_SESSION['userSession'] = $row['tusers_id'];
    header("Location: home.php");
  } else {
    $msg = "<div class='alert alert-danger'>
              <span class='glyphicon glyphicon-info-sign'></span> &nbsp; Username or Password Invalid!
            </div>";
  }
  
  $DBcon->close();
}
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
                    "glyphicon glyphicon-log-in"></span> &nbsp; Sign in</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>