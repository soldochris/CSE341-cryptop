<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cryptop - Home</title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <?php require_once('modules/navbar.php') ?>
  <main class="container container-fluid mt-4">
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h3 class="display-4 text-center">Market Overview</h3>
        <ul class="list-group list-overview">
          <li class="list-group-item d-flex justify-content-between align-items-center">
            Cryptocurrencies
            <span id="cryptos" class="badge badge-light"></span>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center">
            Active Markets
            <span id="activeMarkets" class="badge badge-light"></span>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center">
            Market Cap
            <span id="marketCap" class="badge badge-light"></span>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center">
            Market Cap Change
            <span id="marketCapChange" class="badge"></span>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center">
            BTC Dominance
            <div id="btcDominance" class="progress" style="width: 20em; height: 2em;"></div>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center">
            ETH Dominance
            <div id="ethDominance" class="progress" style="width: 20em; height: 2em;"></div>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center">
            Average Price Change
            <span id="avgPriceChange" class="badge"></span>
          </li>
        </ul>
      </div>
    </div>
    <h1 class="display-5 text-center font-weight-bold mb-4">Top 10 cryptocurrencies</h1>
    <div id="topCoins" class="container-sm d-flex flex-wrap justify-content-around"></div>
    <div class="container container-fluid mx-auto" style="width: 300px;">
      <a href="top100.php" class="btn btn-secondary btn-lg btn-block">Show Top 100 Coins >></a>
    </div>
    </main>
  <?php require_once('modules/footer.php') ?>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  <script src="js/main.js" type="module"></script>
</body>
</html>