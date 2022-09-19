<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="loginscript.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Forside</title>
</head>
<body>
  <nav>
    <div class="wrapper">
      <?php
        if (isset($_SESSION["username"])) {
          echo "<p class='log'>Du er nu logget ind som " . $_SESSION["username"] ."</p>";
        }
        else {
          echo "<p class='log'>Du er ikke logget ind</p>";
        }
      ?>
      <ul>
        <li><a href="index.php">Forside</a></li>
        <?php
          if (isset($_SESSION["username"])) {
            echo "<li><a href='profile.php'>Profil</a></li>";
            echo "<li><a href='includes/logout.inc.php'>Log ud</a></li>";
          } 
          else {    
            echo "<li><a href='signup.php'>Sign up</a></li>";
            echo "<li><a href='login.php'>Log in</a></li>";
          }
        ?>  
      </ul>
    </div>
  </nav>