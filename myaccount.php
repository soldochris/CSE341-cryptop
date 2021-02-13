<?php
  session_start();

  require('functions.php');

  $userEmail = filter_input(INPUT_POST, 'userEmail', FILTER_SANITIZE_EMAIL);
  $userEmail = checkEmail($userEmail);
  $userPass = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

  $userData = getUser($userEmail);

  $hashCheck = password_verify($userPass, $userData['user_pass']);

  if($hashCheck == FALSE){
    $message = "<p>worng password</p>";
    echo $message;
    exit;
  }

  $_SESSION['loggedin'] = TRUE;

  array_pop($userData);

  $_SESSION['userData'] = $userData;
  var_dump($_SESSION['userData']);
?>