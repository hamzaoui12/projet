<?php
  include 'C:\xampp\htdocs\total\app\models\index.php';

  $queryCheckUser = 'SELECT * FROM user WHERE email = "'.$_POST['email'].'"';

  $resultsCheckUser = $mysqli->query($queryCheckUser);