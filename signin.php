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

    <form action="signup.php" class="form-group" method="POST">
      <label for="userName">User Name:</label>
      <input type="text" class="form-control" id="userName" name="userName" placeholder="Your name" required>
      <label for="email">Email address:</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" required>
      <label for="password">Password: </label>
      <input type="password" class="form-control" id="password" name="password" required>
      <input type="submit" value="Create Account" class="btn btn-primary mb-2">
    </form>

    <div class="alert alert-dismissible alert-warning">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <h4 class="alert-heading">Warning!</h4>
      <p class="mb-0">Temporarily you will be able to see the list of users  just to test the database.</p>
    </div>
    <?php
      require('db/connection.php');
      if(isset($db)){
        foreach ($db->query('SELECT *  FROM users') as $row)
        {
          echo 'User: ' . $row['user_name'];
          echo ' E-mail: ' . $row['user_email'];
          echo '<br/>';
        }
      }
      
    ?>
  </main>

  <?php require_once('modules/footer.php'); ?>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>