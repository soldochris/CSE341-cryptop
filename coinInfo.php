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
    <div class="card text-center" >
    <?php
      if(isset($coinId)){
        $url = 'https://api.coinlore.net/api/ticker/?id=' . $coinId;
        $coinInfo = json_decode( file_get_contents($url), true );
        //var_dump($coinInfo);
        echo "
        <img class='card-img-top' src='https://www.coinlore.com/img/{$coinInfo[0]['nameid']}.png' alt='Card image cap' style='width:10em;'>
        <div class='card-body'>
          <h5 class='card-title'>{$coinInfo[0]['name']}</h5>
          <p class='card-text'>Symbol: <span class='text-info'>{$coinInfo[0]['symbol']}</span></p>
          <p class='card-text'>Ranking: <span class='text-info'>{$coinInfo[0]['rank']}</span></p>
          <p class='card-text'>Price: $<span class='text-info'>{$coinInfo[0]['price_usd']}</span></p>
          <p class='card-text'>24H: <span class='text-info'>{$coinInfo[0]['percent_change_24h']}%</span></p>
          <p class='card-text'>1H: <span class='text-info'>{$coinInfo[0]['percent_change_1h']}%</span></p>
          <p class='card-text'>7D: <span class='text-info'>{$coinInfo[0]['percent_change_7d']}%</span></p>
          <p class='card-text'>Market Cap: $<span class='text-info'>{$coinInfo[0]['market_cap_usd']}</span></p>
          <p class='card-text'>Volume 24H: $<span class='text-info'>{$coinInfo[0]['volume24']}</span></p>
          <p class='card-text'>Circulating Supply: <span class='text-info'>{$coinInfo[0]['csupply']}</span></p>
          <p class='card-text'>Price BTC: <span class='text-info'>{$coinInfo[0]['price_btc']}btc</span></p>
          <p class='card-text'>Total Supply: <span class='text-info'>{$coinInfo[0]['tsupply']}</span></p>
          <p class='card-text'>Max Supply: <span class='text-info'>{$coinInfo[0]['msupply']}</span></p>
        </div>
        

        ";
      }
    ?>
    </div>

  </main>

  <?php require_once('modules/footer.php'); ?>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>
</html>