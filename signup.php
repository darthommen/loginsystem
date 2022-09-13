<?php
  include_once 'header.php' ;
?>
  
     <section class="signupform">
        <h2>Sign Up</h2>
        <form action="signup.inc.php" method="post">
            <input type="text" name="uid" placeholder="Brugernavn...">
            <input type="password" name="pwd" placeholder="Password...">
            <input type="password" name="pwdrepeat" placeholder="Repeat password...">
            <button type="submit" name="submit">Sign Up</button>
        </form>
     </section>
  


  
<?php
  include_once 'footer.php' ;
?>
