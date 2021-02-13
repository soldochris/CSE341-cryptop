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

function addFavCoin($newFav,$userId){
  require('db/connection.php');
  $sql = 'INSERT INTO coins (coin_id, user_id)
          VALUES (:coin_id, :user_id)';
  $stmt = $db->prepare($sql);
  $stmt->bindValue(':coin_id', $newFav, PDO::PARAM_INT);
  $stmt->bindValue(':user_id', $userId, PDO::PARAM_INT);
  $stmt->execute();
  $stmt->closeCursor();
}

function getFavCoins($userId){
  require('db/connection.php');
  $sql = 'SELECT fav_id, coin_id
          FROM coins
          WHERE user_id = :userId';
  $stmt = $db->prepare($sql);
  $stmt->bindValue(':userId', $userId, PDO::PARAM_INT);
  $stmt->execute();
  $userCoins = $stmt->fetch(PDO::FETCH_OBJ);
  $stmt->closeCursor();
  return $userCoins;
}