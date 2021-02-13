<?php
require('db/connection.php');

function checkEmail($userEmail){
  $valEmail = filter_var($userEmail, FILTER_VALIDATE_EMAIL);
  return $valEmail;
}

function getuser($userEmail){
  $sql = 'SELECT user_id, user_name, user_email, user_pass 
          FROM users
          WHERE user_email = :userEmail';
  $stmt = $db->prepare($sql);
  $stmt->bindValue(':userEmail', $userEmail, PDO::PARAM_STR);
  $stmt->execute();
  $userData = $stmt->fetch(PDO::FETCH_ASSOC);
  $stmt->closeCursor();
  return $userData;
}