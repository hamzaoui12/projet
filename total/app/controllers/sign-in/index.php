  }<?php
  include 'C:\xampp\htdocs\total\app\models\auth-user.php';

  if ($results->num_rows) {
    session_start();

    $_SESSION['isConnected'] = true;
    $_SESSION['user'] = $user;

    header('location: http://localhost/total/index.php');
  } else {
    header('location: http://localhost/total/compte.php');
  }
  