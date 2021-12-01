<?php
  include './app/models/index.php';

  $queryInsertUser = 'INSERT INTO user (email, password) VALUES("'.$_POST['email'].'","'.$_POST['password'].'")';

  $resultsInsertUser = $mysqli->query($queryInsertUser);