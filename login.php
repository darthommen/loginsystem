<?php
  include_once 'header.php' ;
?>
  
     <section class="loginform">
        <h2>Log in</h2>
        <form action="login.inc.php" method="post">
            <input type="text" name="uid" placeholder="Brugernavn...">
            <input type="password" name="pwd" placeholder="Password...">
            <button type="submit" name="submit">Log In</button>
        </form>
     </section>
  


  
<?php
  include_once 'footer.php' ;
?>
