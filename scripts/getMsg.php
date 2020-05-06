<?php
  session_start();
  $id = $_SESSION['id'];
  include_once('functions.php');
  if(empty($_POST['user'])) {exit();} else {
  $friend = get_id($_POST['user']);
  $sql = "SELECT users.username, messages.message, messages.timestamp
  FROM messages INNER JOIN users ON messages.sender_id=users.user_id
  WHERE sender_id = '$friend' AND reciever_id = '$id' OR sender_id = '$id'
  ORDER BY messages.timestamp";
  $query = mysqli_query($DB_CON, $sql);
  while($result = mysqli_fetch_assoc($query)) {
    echo "<p>".$result['username'].": " .$result['message']."</p>";
  }
  $sql = "UPDATE messages SET status = 0 WHERE reciever_id = '$id' ";
  mysqli_query($DB_CON, $sql);
  };
?>
