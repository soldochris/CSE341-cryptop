<?php
  session_start();
  if(isset($_GET['coin'])){
    $coinId = $_GET['coin'];
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
  <?php
    if(isset($coinId)){
      $url = 'https://api.coinlore.net/api/ticker/?id=' . $coinId;
      echo $url . '<br>';
      $coinInfo = json_decode( file_get_contents($url), true );
      var_dump($coinInfo);
    }
  ?>
  </main>

  <?php require_once('modules/footer.php'); ?>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>
</html>