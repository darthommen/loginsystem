<?php
  include_once 'header.php' ;
?>
  
     <section class="loginform">
        <div class="wrapper">
          <h2>Log in</h2>
          <form action="includes/login.inc.php" method="post">
            <input type="text" name="uid" placeholder="Brugernavn..."><br>
            <input type="password" name="pwd" placeholder="Password..."><br>
            <button type="submit" name="submit">Log In</button><br>
          </form>
        </div>
        <?php
          if (isset($_GET["error"])) {
            if($_GET["error"] == "emptyinput") {
              echo "<p>Udfyld alle felter!</p>";
            }
            
            else if($_GET["error"] == "wronglogin") {
              echo "<p>Forkert brugernavn eller password!</p>";
            }
            else if($_GET["error"] == "wronglogin2") {
              echo "<p>Forkert brugernavn eller password!</p>";
            }
            else if($_GET["error"] == "none") {
              echo "<p>Du har signed up!</p>";
            }
          
          }      
        
        ?>
     </section>
  


  
<?php
  include_once 'footer.php' ;
?>
