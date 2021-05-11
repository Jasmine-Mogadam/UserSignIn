<?php
$PageTitle="New Page Title";
$HighlightMarginLeft="66.6%";
function customPageHeader(){?>
<!--h1>Sign Up0</h1-->
<?php }
include_once('header.php');
?>
      <h1>Login</h1>
      <br><br>
      <form action="includes/login.inc.php" method="post">
        <div class="row">
          <div class="col">
            <label>Username/Email:</label>
          </div>
          <div class="col">
            <input type="text" name="username" value="username">
          </div>
        </div>
        <div class="row">
          <div class="col">
            <label>Password:</label>
          </div>
          <div class="col">
            <input type="password" name="pwd" value="pwd">
          </div>
        </div>
        <br>
        <button type="submit" name="submit">Login</button>
      </form>
<?php
  include_once('footer.php');
?>
