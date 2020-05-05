<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="widt=device-width, initial-scale=1 shrink-to-fit=no">

        <title>Quanty</title>
        <link rel="icon" href="img/favicon2.png">
        <link rel="stylesheet" type="text/css" href="bootstrap-4.4.1-dist/css/bootstrap.css">
        <script type="text/javascript" src="bootstrap-4.4.1-dist/js/jquery-3.4.1.slim.min.js"></script>
        <script type="text/javascript" src="bootstrap-4.4.1-dist/js/popper.min.js"></script>
        <script type="text/javascript" src="bootstrap-4.4.1-dist/js/bootstrap.bundle.min.js"></script>
        <script type="text/javascript" src="ajax/jquery.js"></script>
        <script type="text/javascript" src="ajax/liveLoadBadge.js"></script>
        <link href="font/fontawesome/css/all.css" rel="stylesheet">
        <link href="font/futura.zip" rel="stylesheet">
        <link rel="stylesheet" href="font/fontawesome/css/all.css">
        <script type="text/javascript" src="font/fontawesome/js/all.js"></script>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand" href="./">
            <img src="img/icon.png" width="30" height="30" class="d-inline-block align-top" alt="">
            Quanty
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="./">Home<span class="sr-only">(current)</span></a>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Forum
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="statistics.php">Statistics</a>
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

            <form class="form-inline my-2 my-lg-0" style="vertical-align: middle">
            <?php if(isset($_SESSION['id'])) {
              echo '<form class="form-inline my-2 my-lg-0" style="vertical-align: middle">
                <a href="messages.php"><button type="button" class="btn btn-outline-primary" style="margin: 0rem 0.25rem">
                  <i class="far fa-envelope" style="color: #cc0000"></i>
                  Messsages
                  <span id="MessagesBadge" class="badge badge-dark"></span>
                  <span class="sr-only">unread messages</span>
                </button></a>
                <a href="notifications.php"><button type="button" class="btn btn-outline-primary" style="margin: 0rem 0.25rem">
                  <i class="far fa-bell" style="color: #cc0000"></i>
                  Notifications
                  <span id="NotificationBadge" class="badge badge-dark"></span>
                  <span class="sr-only">unread messages</span>
                </button></a>
                <a href="account.php"><buttontype="button" class="btn btn-primary" style="margin: 0rem 0.25rem">
                  <i class="far fa-user" style="color: #fff; margin: 0rem 0.25rem 0rem 0rem"></i>
                  '.$_SESSION['firstname'].' '.$_SESSION['lastname'].'
                </button></a>
                <a href="scripts/logout_user.php"><buttontype="button" class="btn btn-primary" style="margin: 0rem 0.25rem">
                  Logout
                </button></a>';
              }else{
                echo'<a href="login.php"><button type="button" class="btn btn-primary" style="margin: 0rem 0.25rem">
                  <i class="far fa-user" style="color: #fff; margin: 0rem 0.25rem 0rem 0rem"></i>
                  Login
                </button></a>';
            }?>
            </form>
          </div>
        </nav>
