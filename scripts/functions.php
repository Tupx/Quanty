<?php

$DB_CON = mysqli_connect('localhost','root','','quanty');

function isEmailExist ($email){
  $query = "SELECT * FROM users WHERE email = '$email' ";
  $result = mysqli_query($GLOBALS['DB_CON'], $query);
  if ($result -> num_rows < 1) {
    return false;
  } else {
    return true;
  }
}

function isUsernameExist($username) {
  $query = "SELECT * FROM users WHERE username = '$username' ";
  $result = mysqli_query($GLOBALS['DB_CON'], $query);
  if ($result -> num_rows < 1) {
    return false;
  } else {
    return true;
  }
}

function isIDExist($id){
  $query = "SELECT * FROM users WHERE user_id = '$id' ";
  $result = mysqli_query($GLOBALS['DB_CON'], $query);
  if ($result -> num_rows < 1) {
    return false;
  } else {
    return true;
  }
}

function generate_id() {
  $len = 0;
  while($len < 8){
    $id = rand();
    $len = strlen($id);
  }
  $id = substr($id,0,8).substr(date('Y'),2,4);
  if(isIDExist($id)){
    generate_id();
  }
  return $id;
}

function generate_package_id($fname,$lname) {
  $name = $fname.$lname;
  $alphabets = substr(str_shuffle(strtoupper($name)),0,5);
  $id  = substr(str_shuffle($alphabets.rand()), 0, 10);
  $len = strlen($id);
  return $id;
}

function get_id($username){
  $sql = "SELECT * FROM users WHERE username = '$username' ";
  $query = mysqli_query($GLOBALS['DB_CON'], $sql);
  $result = mysqli_fetch_row($query);
  return $result[0];
}
