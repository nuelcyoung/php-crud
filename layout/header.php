<?php
ob_start();
session_start();
if(isset($_SESSION['user'])){
		
}else{
  $_SESSION["error"]='No access';
  header("Location: index.php");
}

require_once("connection.php");
?>
<!DOCTYPE html>
<html>
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
<div class="container-fluid">
<nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Nuel Zuri Task</a>
      <!--<input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">-->
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="#">Sign out</a>
        </li>
      </ul>
    </nav>
</div>