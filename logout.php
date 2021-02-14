<?php
  if($_SESSION['loggedin'] = TRUE){
    session_unset();
    session_destroy();
    header('Location: myaccount.php');
  }else{
    header('Location: myaccount.php');
  }
