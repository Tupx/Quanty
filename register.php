<?php session_start();
if(isset($_SESSION['id'])){header('Location: ./');}
include('header.html');
if(isset($_GET['emptyFields'])){echo "<script>alert('All fields are required, Please fill in all forms :) ') </script>";}
else if (isset($_GET['usernameTaken'])) echo "<script> alert('Username is already taken, please choose another one ;) ') </script>";?>

    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page">Register</li>
      </ol>
    </nav>

    <div class="container">
      <div class="row justify-content-center align-items-center" style="height:50vh">
        <div class="col-lg-6 col-sm-12">
          <form method="POST" action="scripts/register_user.php">
            <div class="form-group">
              <label>First name</label>
              <input type="text" class="form-control" name="firstname">
              <label>Last name</label>
              <input type="text" class="form-control" name="lastname">
              <label>Email</label>
              <input type="email" class="form-control" name="email">
              <label>Username</label>
              <input type="text" class="form-control" name="username">
              <label>Password</label>
              <input type="password" class="form-control" name="password">
            </div>

            <button type="submit" class="btn btn-primary">CREATE ACCOUNT</button>
            <p><small class="form-text text-muted">Already have an account? <a href="login.php" style="color: red;">Login now.</a></small></p>
          </form>
        </div>
      </div>
    </div>

  </body>
</html>
