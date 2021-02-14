<?php session_start(); ?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Crypto - Top 100</title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <?php require_once('modules/navbar.php') ?>
  <main class="container container-fluid mt-4">
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h3 class="display-4 text-center">Cooming Soon</h3>
        <p>We are working to display the top 100 cryptocurrencies here.</p>
        <hr class="my-4">
        <p>Please create an account.</p>
        <a class="btn btn-primary btn-lg" href="signin.php" role="button">Sign In</a>
      </div>
    </div>
    <h1 class="display-5 text-center font-weight-bold mb-4">Top 100 cryptocurrencies</h1>
    </main>
  <?php require_once('modules/footer.php') ?>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>