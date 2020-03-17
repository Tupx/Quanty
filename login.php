<?php session_start(); if(isset($_SESSION['id'])){header('Location: ../Quanty/');}?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <meta name="viewport" content="widt=device-width, initial-scale=1 shrink-to-fit=no">
    <link rel="icon" href="img/favicon2.png">
    <link rel="stylesheet" type="text/css" href="bootstrap-4.4.1-dist/css/bootstrap.css">
    <script type="text/javascript" src="bootstrap-4.4.1-dist/js/jquery-3.4.1.slim.min.js"></script>
    <script type="text/javascript" src="bootstrap-4.4.1-dist/js/popper.min.js"></script>
    <script type="text/javascript" src="bootstrap-4.4.1-dist/js/bootstrap.bundle.min.js"></script>
    <!-- <link href="font/fontawesome/css/all.css" rel="stylesheet"> -->
    <link href="font/futura.zip" rel="stylesheet">
    <link rel="stylesheet" href="font/fontawesome/css/all.css">
    <script type="text/javascript" src="font/fontawesome/js/all.js"></script>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">
        <img src="img/icon.png" width="30" height="30" class="d-inline-block align-top" alt="">
        Quanty
      </a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Forum
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Statistics</a>
              <a class="dropdown-item" href="#">People</a>
              <a class="dropdown-item" href="#">Health</a>
              <a class="dropdown-item" href="#">Location</a>
              <a class="dropdown-item" href="#">Telecommunications</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Show all...</a>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">Download</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Tutorial</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">About</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Search</a>
          </li>
        </ul>
      </div>
    </nav>

    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page">Login</li>
      </ol>
    </nav>

    <div class="container">
      <div class="row justify-content-center align-items-center" style="height:50vh">
        <div class="col-5 ">
          <a href="../Quanty/"><img src="img/banner.png" class="mb-5" style="width:90%"></a>
          <form method="POST" action="scripts/login_user.php">
            <div class="form-group">
              <label>Username</label>
              <input type="text" class="form-control" name="username">
            </div>
            <div class="form-group">
              <label>Password</label>
              <input type="password" class="form-control" name="password">
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
            <a href="register.php"><small class="form-text text-muted">Dont have an account? Create Account now</small></a>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
