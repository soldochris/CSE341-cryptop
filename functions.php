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

function addFavCoin($newFav, $coinName, $userId){
  require('db/connection.php');
  $sql = 'INSERT INTO coins (coin_id, coin_name, user_id)
          VALUES (:coin_id, :coin_name, :user_id)';
  $stmt = $db->prepare($sql);
  $stmt->bindValue(':coin_id', $newFav, PDO::PARAM_INT);
  $stmt->bindValue(':coin_name', $coinName, PDO::PARAM_STR);
  $stmt->bindValue(':user_id', $userId, PDO::PARAM_INT);
  $stmt->execute();
  $stmt->closeCursor();
}

function getFavCoins($userId){
  require('db/connection.php');
  $sql = 'SELECT fav_id, coin_id, coin_name
          FROM coins
          WHERE user_id = :userId';
  $stmt = $db->prepare($sql);
  $stmt->bindValue(':userId', $userId, PDO::PARAM_INT);
  $stmt->execute();
  $userCoins = $stmt->fetchAll(PDO::FETCH_ASSOC);
  $stmt->closeCursor();
  return $userCoins;
}

function delFavCoin($favId, $userId){
  require('db/connection.php');
  $sql = 'DELETE FROM coins 
          WHERE user_id = :userId AND fav_id = :favId';
  $stmt = $db->prepare($sql);
  $stmt->bindValue(':userId', $userId, PDO::PARAM_INT);
  $stmt->bindValue(':favId', $favId, PDO::PARAM_INT);
  $stmt->execute();
  $stmt->closeCursor();
}