<?php
  session_start();
  if(isset($_GET['coin'])){
    require('functions.php');

    $newFav = $_GET['coin'];
    $userId = $_SESSION['userData']['user_id'];;
    addFavCoin($newFav, $userId);
    header('Location: myaccount.php');
  }

?>