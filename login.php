<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Crypto - Login</title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <?php require_once('modules/navbar.php'); ?>

  <main class="container container-fluid mt-4">
    <h1 class="display-5 text-center font-weight-bold mb-4">Create an Account</h1>

    <form action="myaccount.php" class="form-group" method="POST">
      <label for="userEmail">Email address:</label>
      <input type="email" class="form-control" id="userEmail" name="userEmail" placeholder="name@example.com" required>
      <label for="password">Password: </label>
      <input type="password" class="form-control" id="password" name="password" required>
      <input type="submit" value="Log in" class="btn btn-primary mb-2 mt-2">
    </form>
  </main>

  <?php require_once('modules/footer.php'); ?>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>