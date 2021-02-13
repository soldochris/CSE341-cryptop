<?php
  session_start();

  require('functions.php');

  $userEmail = filter_input(INPUT_POST, 'userEmail', FILTER_SANITIZE_EMAIL);
  $userEmail = checkEmail($userEmail);
  $userPass = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

  $userData = getUser($userEmail);

  $hashCheck = password_verify($userPass, $userData['user_pass']);

  if($hashCheck == FALSE){
    $message = "<p>worng password</p>";
    echo $message;
    exit;
  }

  $_SESSION['loggedin'] = TRUE;

  array_pop($userData);

  $_SESSION['userData'] = $userData;

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Crypto - My Account</title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <?php require_once('modules/navbar.php'); ?>

  <main class="container container-fluid mt-4">
    <h2>Welcome <?php echo $_SESSION['userData']['user_name']; ?></h2>
    <?php var_dump($_SESSION['userData']); ?>
  </main>

  <?php require_once('modules/footer.php'); ?>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>