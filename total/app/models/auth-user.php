<?php
  include 'C:\xampp\htdocs\total\app\models\index.php';

  $query = 'SELECT * FROM user WHERE email = "'.$_POST['email'].'" AND password ="'.$_POST['password'].'"';

  $results = $mysqli->query($query);
  $user = $results->fetch_array();