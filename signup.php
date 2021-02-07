<?php
  require('db/connection.php');

  $userName = filter_input(INPUT_POST, 'userName', FILTER_SANITIZE_STRING);
  $userEmail = filter_input(INPUT_POST, 'userEmail', FILTER_SANITIZE_EMAIL);
  $userPass = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

  $hashedPass = password_hash($userPass, PASSWORD_DEFAULT);

  $sql = 'INSERT INTO users (user_name, user_email, user_pass) VALUES (:user_name, :user_email, :user_pass)';

  $stmt = $db->prepare($sql);
  $stmt->bindValue(':user_name', $userName, PDO::PARAM_STR);
  $stmt->bindValue(':user_email', $userEmail, PDO::PARAM_STR);
  $stmt->bindValue(':user_pass', $userPass, PDO::PARAM_STR);

  $stmt->execute();

  $stmt->closeCursor();

  header('Location: ./signup.php');

?>