<?php
  if($_SESSION['loggedin']){
    session_unset();
    session_destroy();
    header('Location: myaccount.php');
  }
