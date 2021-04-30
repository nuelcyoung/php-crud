<?php
require_once("process.php");
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

    <!-- Custom styles for this template -->
    <link href="assets/css/custom.css" rel="stylesheet">
  </head>

<body>
<div class="navbar navbar-expand-md navbar-dark bg-dark fixed-top" role="navigation">
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
            <a class="navbar-brand" href="index.php">Nuel Zuri Task</a>
        </div>
 
        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php">Login</a>
          </li>
        </ul>
      </div>

    </div>
</div>
<div class="col-sm-6 col-md-4 col-md-offset-4 text-center">
<?php echo display_error();?>
<h1>Register</h1>
    <form class='form-signin' action='' method='post'>
      <img class="mb-4" src="" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address">
      <label for="inputFullname" class="sr-only">Full name</label>
      <input type="text" name="fullname" id="inputFullname" class="form-control" placeholder="Full name">
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password">
      <input type="submit" name="register" value="Register" class="btn btn-lg btn-primary btn-block" />
    </form>
    </div>
  </body>
</html>