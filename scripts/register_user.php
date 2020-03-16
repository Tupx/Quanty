<?php

include_once 'functions.php';

// Remove this if UI is done
// $email = $_POST['email'];
// $username = $_POST['username'];
// $password = $_POST['password'];
// $firstname = $_POST['firstname'];
// $lastname = $_POST['lastname'];

// For Testing
// $email = 'tupz0799@gmail.com';
// $username = 'Tupx';
// $password = 'Password123';
// $firstname = 'Christopher';
// $lastname = 'Bermudez';

if(isEmailExist($email)) {
  // Error msg
  echo 'Email has been already registered, login now!';

} else {
  if(isUsernameExist($username)){
    // Error msg
    echo 'Username has already been taken';

  } else {

    $id = generate_id();
    echo $query = "INSERT INTO users(user_id,username,password,email,firstname,lastname)
    VALUES('$id','$username','$password','$email','$firstname','$lastname')";
    $result = mysqli_query($GLOBALS['DB_CON'], $query);
  }

}
