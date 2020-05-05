<?php

session_start();
include_once 'functions.php';
$packageID = generate_package_id($_SESSION['firstname'],$_SESSION['lastname']);
$id = $_SESSION['id'];
$title = $_POST['title'];
$algo = $_POST['content'];
echo $sql = "INSERT INTO statpackage(package_id,user_id,title,algorithm)
VALUES('$packageID', '$id','$title','$algo')";
mysqli_query($DB_CON, $sql);
header("Location: ../construct.php?code=$packageID");
?>
