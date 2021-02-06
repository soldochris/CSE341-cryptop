<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Crypto - Top 100</title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <?php require_once('modules/navbar.php'); ?>

  <main class="container container-fluid mt-4">
    <h1 class="display-5 text-center font-weight-bold mb-4">Create an Account</h1>

    <?php
      echo "hello";
      try {
        $dbUrl = getenv('DATABASE_URL');
        $dbOpts = parse_url($dbUrl);
        $dbHost = $dbOpts["host"];
        $dbPort = $dbOpts["port"];
        $dbUser = $dbOpts["user"];
        $dbPassword = $dbOpts["pass"];
        $dbName = ltrim($dbOpts["path"],'/');
      
        $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
      
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      } catch (PDOException $ex) {
        echo 'Error!: ' . $ex->getMessage();
        die();
      }
      
      foreach ($db->query('SELECT *  FROM users') as $row)
      {
        echo 'user: ' . $row['user_name'];
        echo ' password: ' . $row['password'];
        echo '<br/>';
      }

    ?>
  </main>

  <?php require_once('modules/footer.php'); ?>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>