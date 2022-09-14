<?php
  include_once 'header.php' ;
?>
  
     <section class="signupform">
        <div class="wrapper">
          <h2>Sign Up</h2>
          <form action="signup.inc.php" method="post">
            <input type="text" name="uid" placeholder="Brugernavn..."><br>
            <input type="password" name="pwd" placeholder="Password..."><br>
            <input type="password" name="pwdrepeat" placeholder="Repeat password..."><br>
            <button type="submit" name="submit">Sign Up</button><br>
          </form>
        </div>
     </section>
  


  
<?php
  include_once 'footer.php' ;
?>
