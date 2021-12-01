<?php
  session_start();

  include 'C:\xampp\htdocs\total\app\models\update-user.php';

  $mysqli->close();

  header('location: http://localhost/total/profile.php');