<?php
  include_once 'header.php' ;
?>
  
     <section class="loginform">
        <div class="wrapper">
          <h2>Log in</h2>
          <form action="login.inc.php" method="post">
            <input type="text" name="uid" placeholder="Brugernavn..."><br>
            <input type="password" name="pwd" placeholder="Password..."><br>
            <button type="submit" name="submit">Log In</button><br>
          </form>
        </div>
     </section>
  


  
<?php
  include_once 'footer.php' ;
?>
