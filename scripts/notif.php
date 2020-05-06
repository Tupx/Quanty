<?php
session_start();
$id = $_SESSION['id'];
include_once 'functions.php';

if ($_POST['notif'] == 'sendPackage') {

  if(!empty($_POST['code'])) {
    $title = $_POST['title'];
    $code = $_POST['code'];
    echo $msg = "Your package ".$title." has been sent. Your file ID is ".$code.". Expect the result within 10-20 working days.
 Note: This is a prototype. Following functionalities are still in development process.";
    $sql = "INSERT INTO notifications(user_id, content) VALUES('$id','$msg')";
    mysqli_query($DB_CON, $sql);
  }
    header("Location: ../construct.php?code=$code");
}
 ?>
