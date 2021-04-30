<?php
$user_name = $_POST['user_name'];
$password = htmlspecialchar($_POST['password']);

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--<link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">-->

    <title>ZURI TASK PHP CRUD</title>
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template 
    <link href="starter-template.css" rel="stylesheet">
    -->
  </head>


  <body>
  <div class="navbar navbar-default navbar-static-top navbar-dark bg-dark" role="navigation">
    <div class="container-fluid">
 
        <div class="navbar-header">
            <!-- to enable navigation dropdown when viewed in mobile device -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
 
            <!-- Change "Your Site" to your site name -->
            <a class="navbar-brand" href="index.php">Ekenny Zuri Task</a>
        </div>
 
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <!-- link to the "Cart" page, highlight if current page is cart.php -->
                <li >
                    <a href="index.php">Home</a>
                </li>
            </ul>
 
                <ul class="nav navbar-nav navbar-right">
        <li class='active'>
            <a href="login.php">
                <span class="glyphicon glyphicon-log-in"></span> Log In
            </a>
        </li>
     
        <li >
            <a href="register.php">
                <span class="glyphicon glyphicon-check"></span> Register
            </a>
        </li>
      
    </ul>
                 
        </div><!--/.nav-collapse -->
 
    </div>
</div>
<div class="container">
    <!--<main role="main" class="container">-->
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="user_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>

    <!--</main> /.container -->
</div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
  </body>
</html>