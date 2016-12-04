<?php
if($_SESSION["action"] == "logout"){
  session_destroy();
}
session_start();
?>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Team Queso Temp</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/heroic-features.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

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
                  <a class="navbar-brand" href="search.html">study<i>m8</i>p</a>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav">
                      <li>
                          <a href="profile.php">Profile</a>
                      </li>
                      <li>
                          <a href="select/examples/search.html">Search</a>
                      </li>
                      <li>
                        
                      </li>
                  </ul>

              </div>
              <!-- /.navbar-collapse -->
          </div>
          <!-- /.container -->
      </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Jumbotron Header -->
        <header class="jumbotron hero-spacer">
                <h1>How to use Git</h1>
                <p>gittutorial - A tutorial introduction to Git</p>
        </header>

        <hr>

        <!-- Title -->
        
            
                    <div class="row">
                        <div class="col-lg-12">
                            <h3>tags</h3>
                        </div>
                    </div>
        <!-- /.row -->

        <!-- Page Features -->
                    <div class="row text-center">
                        <div class="col-md-3 col-sm-6 hero-feature" onclick="showTags()">
                            <div class="thumbnail">
                                <p>programming</p>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 hero-feature">
                            <div class="thumbnail">
                                <p>java</p>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 hero-feature height=12">
                            <div class="thumbnail">
                                <p>version</p>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 hero-feature">
                            <div class="thumbnail">
                                <p>control</p>
                            </div>
                        </div>
                        
                        <div class="col-md-3 col-sm-6 hero-feature">
                            <div class="thumbnail">
                                <p>command</p>
                            </div>
                        </div>
                        
                        <div class="col-md-3 col-sm-6 hero-feature">
                            <div class="thumbnail">
                                <p>line</p>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-lg-12">
                            <h3>comments</h3>
                        </div>
                    </div>
                <div class="thumbnail">
                    <p>Wow! Great rescource!</p>
                </div>
                <div class="thumbnail">
                    <p>This is great for beginners...</p>
                </div>
                
            </div>
            
                    
    
        
        
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <!--<footer>-->
        <!--    <div class="row">-->
        <!--        <div class="col-lg-12">-->
        <!--            <p>Copyright &copy; Team Queso 2016</p>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</footer>-->

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/generatePreview.js"></script>
    
    <script type="text/javascript">
    $(".description").append("...");
    </script>
</body>

</html>
