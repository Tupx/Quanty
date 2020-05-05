<?php

include_once 'functions.php';
$id = $_SESSION['id'];
$sql = "SELECT * FROM users WHERE user_id != '$id' ";
$query = mysqli_query($DB_CON,$sql);
while($result = mysqli_fetch_assoc($query)){
  echo '<a href="?friend='.$result['username'].'"><li class="list-group-item" style="cursor:pointer">'.$result['username'].'</li></a>';
}
?>
