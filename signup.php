<!--http://www.webformfactory.com/-->

<?php
  $ php -S localhost:8000
  $PageTitle="Sign In";
  include_once('header.php');
?>
      <h1>Sign Up</h1>
      <br><br>
      <form action="includes/signup.inc.php" method="post">
        <div class="row">
          <div class="col">
            <label>Email:</label>
          </div>
          <div class="col">
            <input type="text" name="email" value="email" placeholder="email">
          </div>
        </div>
        <div class="row">
          <div class="col">
            <label>Username:</label>
          </div>
          <div class="col">
            <input type="text" name="username" value="username" placeholder="username">
          </div>
        </div>
        <div class="row">
          <div class="col">
            <label>Password:</label>
          </div>
          <div class="col">
            <input type="password" name="pwd" value="pwd" placeholder="password">
          </div>
        </div>
        <div class="row">
          <div class="col">
            <label>Repeat Password:</label>
          </div>
          <div class="col">
            <input type="password" name="pwdrepeat" value="pwdrepeat" placeholder="repeat password">
          </div>
        </div>
        <button type="submit" name="submit">Sign Up</button>
      </form>
<?php
  include_once('footer.php');
?>
