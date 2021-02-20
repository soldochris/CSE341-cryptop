<?php
  session_start();
  require('functions.php');

  if(isset($_POST['loggin'])){
  
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
  <title>Cryptop - My Account</title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <?php require_once('modules/navbar.php'); ?>

  <main class="container container-fluid mt-4">
    <h2>Welcome <?php echo $_SESSION['userData']['user_name']; ?></h2>
    <p>Your favorite coins are:</p>
    <?php 
      $userCoins = getFavCoins($_SESSION['userData']['user_id']);
      if($userCoins){
        //var_dump($userCoins);
        echo "<ul>";
        for($i = 0;$i < sizeOf($userCoins); $i++){
          echo "<li class='mb-3'><a class='mr-2' href='coinInfo.php?coin={$userCoins[$i]['fav_id']}'>{$userCoins[$i]['coin_name']}</a><a href='delFav.php?fav={$userCoins[$i]['fav_id']}' class='btn btn-danger btn-sm'>Delete</a></li>";
        }
        echo "</ul>";
      }else{
        //var_dump($userCoins);
        echo "<p class='text-danger'>You still don't have favorite coins. Please select coins from the following list.</p>";
      }
      
    ?>
    <p>Add a coin to your favorites:</p>
    <?php
      $coins = json_decode( file_get_contents('https://api.coinlore.net/api/tickers/'), true );
      echo "<ul>";
      for($i = 0; $i < count($coins['data']); $i++){
        echo "<li class='mt-3'><span class='mr-2'>". $coins['data'][$i]['name'] ."</span> <a href='addFav.php?coin={$coins['data'][$i]['id']}&name={$coins['data'][$i]['name']}' class='btn btn-info btn-sm'>Add to favorites</a></li>";
      }
      echo "</ul>";
    ?>
  </main>

  <?php require_once('modules/footer.php'); ?>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>
</html>