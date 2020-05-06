<?php
session_start();
include_once 'functions.php';
$id = $_SESSION['id'];
$sql = "SELECT * FROM users WHERE user_id = '$id' ";
$result = mysqli_fetch_row(mysqli_query($DB_CON, $sql));

if (isset($_POST['pass']) || isset($_POST['info'])) {

  if(isset($_POST['info'])){

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];

    if ($result[3] != $email) {
        if(isEmailExist($email)) {
          header("Location: ../account.php?errorEmailTaken");
          exit();
        }
    }

    $sql = "UPDATE users SET firstname = '$firstname', lastname = '$lastname',
    email = '$email' WHERE user_id = '$id' ";
    mysqli_query($DB_CON, $sql);
    header("Location: ../account.php?successInformation");


  } else if (isset($_POST['pass'])){

    $old = $_POST['old'];
    $new = $_POST['new'];
    $retype = $_POST['re'];

    if ($old == $result[2]) {
      if($new == $retype) {
        $sql = "UPDATE users SET password = '$new' WHERE user_id = '$id' ";
        mysqli_query($DB_CON, $sql);
        header("Location: ../account.php?successPass");

      } else {
        header("Location: ../account.php?errorRetypePassword");
      }

    } else {
        header("Location: ../account.php?errorOldPass");
    }

  }

} else {
  header("Location: ../error404.html");
}
