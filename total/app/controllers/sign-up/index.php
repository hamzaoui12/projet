<?php

if (!empty($_POST['password']) ||  !empty($_POST['confirmPassword']) || !empty($_POST['email'])) {
  include 'C:\xampp\htdocs\total\app\models\check-user.php';

  if (!$resultsCheckUser->num_rows) {
    include 'C:\xampp\htdocs\total\app\models\create-user.php';
    include 'C:\xampp\htdocs\total\app\controllers\sign-in\index.php';
  } else {
    header('location: http://localhost/total/compte.php');
  }
} else {
  header('location: http://localhost/total/sign-up.php');
}