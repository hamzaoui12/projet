<?php
  session_start();

  if ($_SESSION['user']) {
    session_destroy();

    header('location: http://localhost/total/compte.php');
  }