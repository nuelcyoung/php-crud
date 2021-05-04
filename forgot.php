<?php
require_once("layout/header.php");
require_once("process.php");
?>
<!DOCTYPE html>
<html>
<head>
<title>Reset Password</title>
</head>
<body>
<div class="col-sm-6 col-md-4 col-md-offset-4 text-center">
<?php echo display_error();?>
<h1>Register</h1>
    <form class='form-signin' action='' method='post'>
      <img class="mb-4" src="" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Forgot Password</h1>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address">
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password">
      <input type="submit" name="forgot" value="Reset" class="btn btn-lg btn-primary btn-block" />
    </form>
    </div>
</body>
</html>