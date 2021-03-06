<?php session_start(); ?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cryptop - Top 100</title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <?php require_once('modules/navbar.php') ?>
  <main class="container container-fluid mt-4">
    <h1 class="display-5 text-center font-weight-bold mb-4">Top 100 cryptocurrencies</h1>
    <div class="table-responsive">
      <table class="table table-striped table-hover table-sm border border-primary">
        <thead class="thead-light">
          <tr>
            <th scope="col">#</th>
            <th scope="col"></th>
            <th scope="col">Coin</th>
            <th scope="col">Price</th>
            <th scope="col">Market Cap</th>
            <th scope="col">1h</th>
            <th scope="col">24h</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody id="tbody">
        </tbody>
        <div id="modals"></div>
      </table>
    </div>
    </main>
  <?php require_once('modules/footer.php') ?>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  <script src="js/top100.js"></script>
</body>
</html>