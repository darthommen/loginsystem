<?php
  include_once 'header.php' ;
?>
  
     <section class="signupform">
        <div class="wrapper">
          <h2>Sign Up</h2>
          <form action="includes/signup.inc.php" method="post">
            <input type="text" name="uid" placeholder="Brugernavn..."><br>
            <input type="password" name="pwd" placeholder="Password..."><br>
            <input type="password" name="pwdrepeat" placeholder="Repeat password..."><br>
            <button type="submit" name="submit">Sign Up</button><br>
          </form>
        </div>
        <?php
          if (isset($_GET["error"])) {
            if($_GET["error"] == "emptyinput") {
              echo "<p>Udfyld alle felter!</p>";
            }
            
            else if($_GET["error"] == "invaliduid") {
              echo "<p>Ugyldigt brugernavn!</p>";
            }
            else if($_GET["error"] == "passwordsdontmatch") {
              echo "<p>Passwords matcher ikke!</p>";
            }
            else if($_GET["error"] == "usernametaken") {
              echo "<p>Brugernavn optaget, vælg et andet!</p>";
            }
            else if($_GET["error"] == "stmtfailed") {
              echo "<p>Noget gik galt, prøv igen!</p>";
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
