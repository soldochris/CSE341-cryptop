<?php
  session_start();
  if(isset($_GET['fav'])){
    require('functions.php');

    $favId = $_GET['fav'];
    $userId = $_SESSION['userData']['user_id'];
    

    delFavCoin($favId, $userId);
    header('Location: myaccount.php');
  }

?>