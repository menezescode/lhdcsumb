<?php
session_start();

if($_SESSION["action"] == "logout"){
  session_destroy();
}

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
                <a class="navbar-brand" href="#">study<i>m8</i></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <form class="navbar-form navbar-right" action="login.php" method="POST">
                    <div class="form-group" align="right">
                        <input type="text" class="form-control" placeholder="Username" name="username">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password" name="password">
                    </div>
                    <button type="submit" class="btn btn-default">Login</button>
                </form>

            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Jumbotron Header -->
        <header class="jumbotron hero-spacer">
            <h1>Your Study Buddy</h1>
            <p>Here are some recent uploaded rescources!</p>
        </header>

        <hr>

        <!-- Title -->
        <div class="row">
            <div class="col-lg-12">
                <h3>Latest Rescources</h3>
            </div>
        </div>
        <!-- /.row -->

        <!-- Page Features -->
        <div class="row text-center">

            <div class="col-md-3 col-sm-6 hero-feature" onclick="showTags()">
                <div class="thumbnail">
                    <img src='http://api.page2images.com/directlink?p2i_url=http://guides.github.com/activities/hello-world/&p2i_key=8b042444c3b0ae4a'>
                    <div class="caption">
                        <h3>How to use Git</h3>
                        <p class="description">gittutorial - A tutorial introduction to Git</p>
                        <p>
                            <a href="https://git-scm.com/docs/gittutorial" target="_blank" class="btn btn-primary">View</a> <a href="pageDocView.php" target="_blank" class="btn btn-default">Doc Info</a>

                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src='http://api.page2images.com/directlink?p2i_url=http://www.myfuture.com/careers/articles-advice/creating-your-resume&p2i_key=8b042444c3b0ae4a'>
                    <div class="caption">
                        <h3>Create Your Resume</h3>
                        <p class="description">How to create a great resume</p>
                        <p>
                            <a href="http://www.myfuture.com/careers/articles-advice/creating-your-resume" target="_blank" class="btn btn-primary">View</a> <a href="#" target="_blank" class="btn btn-default">Doc Info</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature height=12">
                <div class="thumbnail">
                    <img src='http://api.page2images.com/directlink?p2i_url=http://www.getbodysmart.com&p2i_key=8b042444c3b0ae4a'>
                    <div class="caption">
                        <h3>Memorize the Bones</h3>
                        <p class="description">Use a visual quiz to help your memory</p>
                        <p>
                            <a href="https://www.getbodysmart.com" target="_blank" class="btn btn-primary"> View</a> <a href="" target="_blank" class="btn btn-default">Doc Info</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">

                    <img src='http://api.page2images.com/directlink?p2i_url=http://www.calcchat.com&p2i_key=8b042444c3b0ae4a'>
                    <div class="caption">
                        <h3>Check Your Answers</h3>
                        <p class="description">Walk through problems and check your solutions </p>
                        <p>
                            <a href="http://www.calcchat.com" target="_blank" class="btn btn-primary">View</a> <a href="" target="_blank" class="btn btn-default">Doc Info</a>
                        </p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">

                    <img src='http://api.page2images.com/directlink?p2i_url=http://owl.english.purdue.edu/owl/resource/560/01/&p2i_key=8b042444c3b0ae4a'>
                    <div class="caption">
                        <h3>APA Format</h3>
                        <p class="description">A guide to using APA format</p>
                        <p>
                            <a href="https://owl.english.purdue.edu/owl/resource/560/01/" target="_blank" class="btn btn-primary">View</a> <a href="" target="_blank" class="btn btn-default">Doc Info</a>
                        </p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">

                    <img src='http://api.page2images.com/directlink?p2i_url=http://greatist.com/happiness/better-study-tips-test&p2i_key=8b042444c3b0ae4a'>
                    <div class="caption">
                        <h3>Study Tips</h3>
                        <p class="description">22 Study tips to ace your test</p>
                        <p>
                            <a href="http://greatist.com/happiness/better-study-tips-test" class="btn btn-primary" target="_blank">View</a> <a href="" target="_blank" class="btn btn-default">Doc Info</a>
                        </p>
                    </div>
                </div>
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
