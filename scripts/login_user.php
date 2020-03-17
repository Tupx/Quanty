<?php
  session_start();
  if (!isset($_SESSION['id'])) {
      include_once 'functions.php';

      $username = $_POST['username'];
      $password = $_POST['password'];

      if(isUsernameExist($username)) {

        $sql = "SELECT * FROM users WHERE username = '$username' ";
        $query = mysqli_query($GLOBALS['DB_CON'], $sql);
        $result = mysqli_fetch_assoc($query);

        if($password == $result['password']) {
            $_SESSION['id'] = $result['user_id'];
            $_SESSION['username'] = $username;
            $_SESSION['firstname'] = $result['firstname'];
            $_SESSION['lastname'] = $result['lastname'];
            header('Location: ../index.php?success');

        } else {
          header('Location: ../login.php?error');
        }

      } else {
        header('Location: ../login.php?error');
      }

  } else {
    header('Location ../?welcomeBack');
  }
