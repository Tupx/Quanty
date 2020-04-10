<?php
session_start();
if(!isset($_SESSION['id'])) { header("Location: login.php");};
include 'header2.php';?>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page">Notifications</li>
  </ol>
</nav>
