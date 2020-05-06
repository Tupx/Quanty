<?php
session_start();
if(!isset($_SESSION['id'])) { header("Location: login.php");};
include 'header2.php';?>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page">Notifications</li>
  </ol>
</nav>

<?php
  include_once 'scripts/functions.php';
  $id = $_SESSION['id'];
  $sql = "SELECT * FROM notifications WHERE user_id = '$id' AND status = 1 ";
  $query = mysqli_query($DB_CON, $sql);
  while ($data =  mysqli_fetch_assoc($query)) {
    echo "<pre> ".$data['content']."
  ~ ".$data['timestamp']."</pre><br/>";
  }
  $sql = "UPDATE notifications SET status = 0 WHERE user_id = '$id' ";
  mysqli_query($DB_CON, $sql);
?>
