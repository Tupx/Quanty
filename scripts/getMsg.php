<?php
  session_start();
  $id = $_SESSION['id'];
  include_once('functions.php');
  $sql = "SELECT users.username, messages.message, messages.timestamp
  FROM messages INNER JOIN users ON messages.sender_id=users.user_id
  ORDER BY messages.timestamp";
  $query = mysqli_query($DB_CON, $sql);
  while($result = mysqli_fetch_assoc($query)) {
    echo "<p>".$result['username'].": " .$result['message']."</p>";
  }
?>
