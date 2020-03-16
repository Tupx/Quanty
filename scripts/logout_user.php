<?php

  session_start();
  session_unset();
  session_destroy();

  // Redirect now to login page
