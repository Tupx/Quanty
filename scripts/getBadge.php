<?php

  session_start();
  include_once 'functions.php';

  $id = $_SESSION['id'];

  if($_POST['b'] == 'msg') {

    $sql = "SELECT * FROM messages WHERE reciever_id = '$id' AND status = 1";
    $query = mysqli_query($DB_CON, $sql);

    $res = mysqli_num_rows($query);
    if ($res >= 1) {
      echo $res;
    }

  } else if ($_POST['b'] == 'notif'){

    $sql = "SELECT * FROM notifications WHERE user_id = '$id' AND status = 1";
    $query = mysqli_query($DB_CON, $sql);

    $res = mysqli_num_rows($query);
    if ($res >= 1) {
      echo $res;
    }

  }
