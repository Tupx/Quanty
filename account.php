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
        <li class="list-group-item">First item</li>
      </ul>
    </div>

    <div class="col-lg-6 col-sm-12 mt-sm-5">

      <h2 class="row ml-lg-2">Account Details</h2>
      <div class="row">
        <p class="col-lg-2">Firstname:</p>
        <input type="text" class="form-control col-lg-9">
      </div>
      <div class="row mt-lg-3">
        <p class="col-lg-2">Lastname:</p>
        <input type="text" class="form-control col-lg-9">
      </div>
      <div class="row mt-lg-3">
        <p class="col-lg-2">Email:</p>
        <input type="text" class="form-control col-lg-9">
      </div>
      <div class="mt-lg-3">
          <button type="submit" class="btn btn-primary">Update Account</button>
      </div>

      <h2 class="row ml-2 mt-5">Change Password</h2>
      <div class="row">
        <p class="col-lg-3">Old Password:</p>
        <input type="text" class="form-control col-lg-7">
      </div>
      <div class="row mt-3">
        <p class="col-lg-3">New Password:</p>
        <input type="text" class="form-control col-lg-7">
      </div>
      <div class="row mt-3">
        <p class="col-lg-3">Retype Password:</p>
        <input type="text" class="form-control col-lg-7">
      </div>
      <div class="mt-3">
          <button type="submit" class="btn btn-primary">Update Password</button>
      </div>

    </div>

  </div>
</div>
