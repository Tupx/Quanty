<?php

include_once 'functions.php';


$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];

if (empty($email) || empty($username) || empty($password) || empty($firstname) || empty($lastname)) {
  // Error msg and redirect to registration page
  header('Location:../register.php?emptyFields');

} else {

  if(isEmailExist($email)) {
    // Error msg and redirect to login page
    header('Location:../login.php?emailTaken');

  } else {

    if(isUsernameExist($username)){
      // Error msg and redirect to registration page
      header('Location:../register.php?usernameTaken');

    } else {

      $id = generate_id();
      $query = "INSERT INTO users(user_id,username,password,email,firstname,lastname)
      VALUES('$id','$username','$password','$email','$firstname','$lastname')";
      $result = mysqli_query($GLOBALS['DB_CON'], $query);

    }

  }

}
