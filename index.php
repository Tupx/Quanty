<?php session_start();?>

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

        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Home</li>
          </ol>
        </nav>

        <div class="banner">
          <img src="img/banner.png" width="512px">
          <p class="lead">Choose problem set category:</p>

          <div class="cat-card">
            <div style="width: auto; margin: auto; overflow: hidden">
              <div class="card" style="width: 13rem;">
                <img src="img/Statistics.png" class="card-img-top" alt="Statistics">
                <div class="card-body">
                  <h5 class="card-title">Statistics</h5>
                </div>
              </div>
              <div class="card" style="width: 13rem;">
                <img src="img/People.png" class="card-img-top" alt="People">
                <div class="card-body">
                  <h5 class="card-title">People</h5>
                </div>
              </div>
              <div class="card" style="width: 13rem;">
                <img src="img/Health.png" class="card-img-top" alt="People">
                <div class="card-body">
                  <h5 class="card-title">Health</h5>
                </div>
              </div>
              <div class="card" style="width: 13rem;">
                <img src="img/Location.png" class="card-img-top" alt="Location">
                <div class="card-body">
                  <h5 class="card-title">Location</h5>
                </div>
              </div>
              <div class="card" style="width: 13rem;">
                <img src="img/Telecommunications.png" class="card-img-top" alt="Telecommunications">
                <div class="card-body">
                  <h5 class="card-title">Telecom</h5>
                </div>
              </div>
              <div class="card-etc" style="width: 13rem;">
                <img src="img/More.png" class="card-img-top" alt="More">
                <div class="card-body">
                  <h5 class="card-title">More...</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
        <br>
        <br>
        <br>
        <div style="text-align: center">
            <h5 class="display-4">QUANTY<i style="color: #fff; font-style: normal; background-color: #cc0000; padding: 0rem 1rem; margin: 0rem 1rem">BRIDGES</i></h5>
            <br>
            <p class="lead" style="margin-bottom: 0rem">Quanty allows you to engage in quantum computing by acting as a bridge between you and quantum computing company.</p>
            <p class="lead">This allows for development in technological industry and helps find real-world solutions.</p>
        </div>
        <br>
        <br>
        <br>
        <div style="text-align: center; background-color: rgb(220, 220, 220); padding: 2rem 0rem">
            <h5 class="display-4">QUANTY<i style="color: #fff; font-style: normal; background-color: #cc0000; padding: 0rem 1rem; margin: 0rem 1rem">GROWS</i></h5>
            <br>
            <p class="lead" style="margin-bottom: 0rem">Quanty is managed by people who truly care.</p>
            <p class="lead">For them, the work never stops until mankind has reached its full potential and beyond.</p>
        </div>
    </body>
</html>
