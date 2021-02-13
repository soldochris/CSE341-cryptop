<?php
  session_start();

  if(isset($_POST['loggin'])){
  
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

  }

  

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
    <p>Your favorite coins are:</p>
    <ul>
      <?php 
        require('functions.php');
        $userCoins = getFavCoins($_SESSION['userData']['user_id']);
        echo '<br>';
        var_dump($userCoins);
      ?>
    </ul>
    <p>Add a coin to your favorites:</p>
    <?php
      $coins = json_decode( file_get_contents('https://api.coinlore.net/api/tickers/'), true );
      //var_dump($coins['data'][0]['name']);
      for($i = 0; $i < count($coins['data']); $i++){
        echo "<span class='mt-4'>". $coins['data'][$i]['name'] ."</span> <a href='addFav.php?coin={$coins['data'][$i]['id']}' class='btn btn-info btn-sm'>Add to favorites</a> <br>";
      }

    ?>

    <?php //var_dump($_SESSION['userData']); ?>
  </main>

  <?php require_once('modules/footer.php'); ?>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>