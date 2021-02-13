<?php

function checkEmail($userEmail){
  $valEmail = filter_var($userEmail, FILTER_VALIDATE_EMAIL);
  return $valEmail;
}

function getuser($userEmail){
  require('db/connection.php');
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

function addFavCoin($newFav,$nuserId){
  require('db/connection.php');
  $sql = 'INSERT INTO coins (coin, user_id)
          VALUES (:coin, :user_id)';
  $stmt = $db->prepare($sql);
  $stmt->bindValue(':coin', $newFav, PDO::PARAM_INT);
  $stmt->bindValue(':user_id', $nuserId, PDO::PARAM_INT);
  $stmt->execute();
  $stmt->closeCursor();
}