<?php
  include 'C:\xampp\htdocs\total\app\models\index.php';

  $queryUpdateUser = '
    UPDATE user
    SET 
    email="'.$_POST['email'].'",
    password="'.$_POST['password'].'",
    username="'.$_POST['username'].'"
    WHERE id = '.$_SESSION['user']['id'];

 
  $_SESSION['user']['email'] = $_POST['email'];
  $_SESSION['user']['password'] = $_POST['password'];
  $_SESSION['user']['username'] = $_POST['username'];


  $resultsUpdateUser = $mysqli->query($queryUpdateUser);