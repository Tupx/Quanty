<?php
include_once 'functions.php';
session_start();
$sender = $_SESSION['id'];
$reciever = get_id($_POST['reciever']);
$msg = $_POST['msg'];
$sql = "INSERT INTO messages(reciever_id, sender_id, message)
VALUES('$reciever','$sender','$msg')";
mysqli_query($DB_CON, $sql);
?>
