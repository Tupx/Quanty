<?php
session_start();
if(!isset($_SESSION['id'])) { header("Location: login.php");};
include 'header2.php';?>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page">My Account</li>
  </ol>
</nav>

<div class="container-fluid">
  <div class="row justify-content-center ">

    <div class="col-lg-3 col-sm-12 mt-lg-5">
      <input type="text" class="form-control" name="friendSearch" placeholder="Search Friends">
      <ul class="list-group mt-2 h-25">
        <li class="list-group-item">First item</li>
      </ul>
      <h2 class="row ml-2">Your Friends</h2>
      <ul class="list-group mt-2 h-25">
        <?php include 'scripts/getFriends.php';
        include_once 'scripts/functions.php';
        $id = $_SESSION['id'];
        $sql = "SELECT * FROM users WHERE user_id = '$id' ";
        $result = mysqli_fetch_row(mysqli_query($DB_CON, $sql));
        ?>
      </ul>
    </div>

    <div class="col-lg-6 col-sm-12 mt-sm-5">
      <p>Note: Please logout after updating your account to affect changes </p>
      <form action="scripts/updateAccount.php" method="post">
      <h2 class="row ml-lg-2">Account Details</h2>
      <div class="row">
        <p class="col-lg-2">Firstname:</p>
        <input name="firstname" type="text" class="form-control col-lg-9" value="<?php echo $_SESSION['firstname']?>">
      </div>
      <div class="row mt-lg-3">
        <p class="col-lg-2">Lastname:</p>
        <input name="lastname" type="text" class="form-control col-lg-9" value="<?php echo $_SESSION['lastname']?>">
      </div>
      <div class="row mt-lg-3">
        <p class="col-lg-2">Email:</p>
        <input name="email" type="text" class="form-control col-lg-9" value="<?php echo $result[3]?>">
      </div>
      <div class="mt-lg-3">
          <button name="info" type="submit" class="btn btn-primary">Update Account</button>
      </div>
      </form>

      <form action="scripts/updateAccount.php" method="post">
      <h2 class="row ml-2 mt-5">Change Password</h2>
      <div class="row">
        <p class="col-lg-3">Old Password:</p>
        <input name="old" type="text" class="form-control col-lg-7">
      </div>
      <div class="row mt-3">
        <p class="col-lg-3">New Password:</p>
        <input name="new" type="text" class="form-control col-lg-7">
      </div>
      <div class="row mt-3">
        <p class="col-lg-3">Retype Password:</p>
        <input name="re" type="text" class="form-control col-lg-7">
      </div>
      <div class="mt-3">
          <button type="submit" name="pass" class="btn btn-primary">Update Password</button>
      </div>
      </form>

    </div>

  </div>
</div>
