<?php
  session_start();

  if (!isset($_SESSION['isConnected'])) {
    header('location: http://localhost/total/compte.php');
  }