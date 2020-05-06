<?php session_start(); if(isset($_SESSION['id'])){header('Location: ./');}
include('header.html')?>

  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item active" aria-current="page">Login</li>
    </ol>
  </nav>

  <div class="container">
    <div class="row justify-content-center align-items-center" style="height:50vh">
      <div class="col-lg-5 col-sm-10">
        <a href="./"><img src="img/banner.png" class="mb-5" style="width:90%"></a>
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
          <p><small class="form-text text-muted">Dont have an account? <a href="register.php" style="color: red;">Create account now.</a> </small></p>
        </form>
      </div>
    </div>
  </div>

  <?php if(isset($_GET['error'])) {echo '<script>alert("Your username or password is incorrect. Please try again. ")</script>';}
  else if(isset($_GET['RegisterSuccess'])) {echo '<script>alert("Registration successful! ")</script>';}?>

</body>
</html>
