<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="index.php">Cryptop</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="top100.php">Top 100</a>
        </li>
        <?php
          if($_SESSION['loggedin']){
            echo "<li class='nav-item'><a href='myaccount.php' class='nav-link'>My Account</a></li>";
          }
        ?>
      </ul>
      <?php
          if(!$_SESSION['loggedin']){
            echo "<a href='signin.php' class='btn btn-outline-success my-2 my-sm-0'>Sign Up</a>";
          }else{
            echo "<a href='logout.php' class='btn btn-outline-danger my-2 my-sm-0'>Log out</a>";
          }
        ?>
    </div>
  </nav>