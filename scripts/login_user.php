<?php
  session_start();
  if (!isset($_SESSION['id'])) {
      include_once 'functions.php';

      // Remove Comment if UI is done
      // $username = $_POST['username'];
      // $password = $_POST['password'];

      // For Testing
      $username = 'Demo';
      $password = 'Password123';

      if(isUsernameExist($username)) {

        $sql = "SELECT * FROM users WHERE username = '$username' ";
        $query = mysqli_query($GLOBALS['DB_CON'], $sql);
        $result = mysqli_fetch_assoc($query);

        if($password == $result['password']) {
            // Success Msg and Redirect to dashboard
            echo 'Success';
            header('Location: ../index.php?success');

            // Creates a session
            $_SESSION['id'] = $result['user_id'];
            $_SESSION['username'] = $username;
            $_SESSION['firstname'] = $result['firstname'];
            $_SESSION['lastname'] = $result['lastname'];

        } else {
          // Error Msg and Redirect to login page
          echo 'Username or Password is incorrect';
        }

      } else {
        // Error Msg and Redirect to login Page
        echo 'Username or Password is incorrect';
      }

  } else {
    // Welcome back message and Redirect to dashboard
    echo 'welcome back '.$_SESSION['firstname'];
  }
