<?php
  session_start();
  if(isset($_SESSION['loggedin'])){
    require('functions.php');

    $newFav = $_GET['coin'];
    $coinName = $_GET['name'];
    $userId = $_SESSION['userData']['user_id'];
    

    addFavCoin($newFav, $coinName, $userId);
    header('Location: myaccount.php');
  }else{
    header('Location: signin.php');
  }

?>