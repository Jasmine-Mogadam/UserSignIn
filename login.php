<?php
$PageTitle="New Page Title";
$HighlightMarginLeft="75%";
function customPageHeader(){?>
<!--h1>Sign Up0</h1-->
<?php }
include_once('header.php');
?>
      <h1>Login</h1>
      <br><br>
      <div class="errorBox">
        <?php
        if(isset($_GET["error"])){
          if($_GET["error"] == "emptyinput"){
            echo "<p>Fill in all empty fields</p>";
          }
          else if($_GET["error"] == "wronglogin"){
            echo "<p>Username and/or password are incorrect</p>";
          }
        }
        ?>
      </div>
      <form action="includes/login.inc.php" method="post">
        <div class="row">
          <div class="col">
            <label>Username/Email:</label>
          </div>
          <div class="col">
            <input type="text" name="uid" placeholder="username">
          </div>
        </div>
        <div class="row">
          <div class="col">
            <label>Password:</label>
          </div>
          <div class="col">
            <input type="password" name="pwd" placeholder="password">
          </div>
        </div>
        <br>
        <button type="submit" name="submit">Login</button>
      </form>
<?php
  include_once('footer.php');
?>
