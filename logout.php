<?php
  session_start();
  if(isset($_SESSION['loggedin'])){
    session_unset();
    session_destroy();
    header('Location: signin.php');
  }else{
    header('Location: signin.php');
  }
