<?php
  session_start();
  if(isset($_GET['coin'])){
    require('functions.php');

    $newFav = $_GET['coin'];
    echo $newFav;
    echo $_SESSION['userData']['user_id'];;
  }

?>