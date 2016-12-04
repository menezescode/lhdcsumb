<?php 
session_start(); 
if(!isset($_SESSION['username'])){
    header('location: main.php'); //Sends to login screen if haven't logged in
}

 $username = $_SESSION['username'];
function getUsername(){
    global $username;
    return $username;
}

function getID(){
    global $username;
    include'../php/dbconnect.1.php';
    $conn=getDatabaseConnection();
    $sql="SELECT tusers_id AS userid FROM tbl_users WHERE username= '" . $_SESSION['username'] . "'";
    $statement = $conn->prepare($sql);
    $statement->execute();
    $result= $statement->fetch(); 
    //print_r($result);
    return $result[0];
}
?>

 
<html lang="en">

<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.1.1.min.js"   integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="   crossorigin="anonymous"></script>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title> study<i>m8</i></title>

  <!-- Bootstrap Core CSS -->
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <link href="../css/bootstrap.css" rel="stylesheet">
  
  

  <!-- Custom CSS -->
  <link href="../css/heroic-features.css" rel="stylesheet">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="bg">
  <script>$(document).on('click', '.panel-heading span.clickable', function (e) {
    var $this = $(this);
    if (!$this.hasClass('panel-collapsed')) {
        $this.parents('.panel').find('.panel-body').slideUp();
        $this.addClass('panel-collapsed');
        $this.find('i').removeClass('glyphicon-minus').addClass('glyphicon-plus');
    } else {
        $this.parents('.panel').find('.panel-body').slideDown();
        $this.removeClass('panel-collapsed');
        $this.find('i').removeClass('glyphicon-plus').addClass('glyphicon-minus');
    }
});
$(document).on('click', '.panel div.clickable', function (e) {
    var $this = $(this);
    if (!$this.hasClass('panel-collapsed')) {
        $this.parents('.panel').find('.panel-body').slideUp();
        $this.addClass('panel-collapsed');
        $this.find('i').removeClass('glyphicon-minus').addClass('glyphicon-plus');
    } else {
        $this.parents('.panel').find('.panel-body').slideDown();
        $this.removeClass('panel-collapsed');
        $this.find('i').removeClass('glyphicon-plus').addClass('glyphicon-minus');
    }
});
$(document).ready(function () {
    $('.panel-heading span.clickable').click();
    $('.panel div.clickable').click();
});</script>
      <!-- Navigation -->
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
          <div class="container">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                  </button>
                    <a class="navbar-brand" href="main.php">study<i>m8</i></a>
              </div>
               <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav">
                       <li>
                          <a href="select/examples/search.html">Search</a>
                      </li>
                      <li>
                          <a href="logout.php">Logout</a>
                      </li>
                      <li>
                        
                      </li>
                  </ul>

              </div>
              <!-- /.navbar-collapse -->
          </div>
          <!-- /.container -->
      </nav>
<div class="container">
  <div class="row">
      <div class="col-sm-6" id="leftmain" >
        <div id="profilePicture">
          <img style="padding-left: 30px;width:304px;height:228px;" src="http://s3.amazonaws.com/37assets/svn/765-default-avatar.png"/>
        </div>
        <div class="panel panel-primary panel-transparent">
          <div class="panel-body">
            California State University of Monetery Bay
          </div>
        
       </div>
       <div class="panel-user-info">
        <div class="panel-user">
                  <?=getUsername()?>
            </div>
            <div class="panel-id">
                  ID: <?=getID()?>
            </div>
        </div>
    
        <div id="extraInfo">
          
        </div>
      </div>
      
      <div class="col-sm-6" id="rightmain">
        <div class="heading">
        <h2>Enrolled Courses:</h2>
    </div>
        <div class="panel panel-info"> 
                <div class="panel-heading clickable">
                    <h3 class="panel-title">
                        CST 238</h3>
                    <span class="pull-right "><i class="glyphicon glyphicon-minus"></i></span>
                </div>
                <div class="panel-body">
                   references
                        
                </div>
            </div>
       <div class="panel panel-success">
                <div class="panel-heading clickable">
                    <h3 class="panel-title">
                        CST 338 </h3>
                    <span class="pull-right "><i class="glyphicon glyphicon-minus"></i></span>
                </div>
                <div class="panel-body">
                    references
                </div>
            </div>
         <div class="panel panel-warning">
                <div class="panel-heading clickable">
                    <h3 class="panel-title">
                        CST 336 </h3>
                    <span class="pull-right "><i class="glyphicon glyphicon-minus"></i></span>
                </div>
                <div class="panel-body">
                    references
                </div>
            </div>
         <div class="panel panel-primary">
                <div class="panel-heading clickable">
                    <h3 class="panel-title">
                        CST 205 </h3>
                    <span class="pull-right "><i class="glyphicon glyphicon-minus"></i></span>
                </div>
                <div class="panel-body">
                    references
                </div>
            </div>
</div>
</div>

<div class="row panel-container">
    <div class="col-sm-4 panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Study Tips</h3>
  </div>
  <div class="panel-body">
    <ul>
    <li>Keep your phone out of reach</li>
    <li>Drink water</li>
    <li>Set a goal</li>
    <li>Get good rest</li>
    <li>Take regular breaks</li>
    <li>Quiz yourself</li>
    </ul>
  </div>
</div>
<div class="col-sm-4 panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">To Do</h3>
  </div>
  <div class="panel-body">
    <button>add task</button>
  </div>
</div>
<div class="col-sm-4 panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Quote Me</h3>
  </div>
  <div class="panel-body">
    “The way to get started is to quit talking and begin doing.” -Walt Disney
    <br><br>
    “Don’t let yesterday take up too much of today.” -Will Rogers
  </div>
</div>
</div>

</body>
</html>


