<!--http://www.webformfactory.com/-->
<?php
$PageTitle="New Page Title";
$HighlightMarginLeft="50%";
function customPageHeader(){?>
<!--h1>Sign Up0</h1-->
<?php }
include_once('header.php');
?>
      <h1>Sign Up</h1>
      <br><br>
      <div class="errorBox">
        <?php
        if(isset($_GET["error"])){
          if($_GET["error"] == "emptyinput"){
            echo "<p>Fill in all empty fields</p>";
          }
          else if($_GET["error"] == "invaliduid"){
            echo "<p>Username contains invalid characters</p>";
          }
          else if($_GET["error"] == "invalidemail"){
            echo "<p>Email doesn't exist</p>";
          }
          else if($_GET["error"] == "passwordsdontmatch"){
            echo "<p>Fill in all empty fields</p>";
          }
          else if($_GET["error"] == "stmtfailed1"){
            echo "<p>001 Something went wrong, please try again</p>";
          }
          else if($_GET["error"] == "stmtfailed2"){
            echo "<p>002 Something went wrong, please try again</p>";
          }
          else if($_GET["error"] == "usernametaken"){
            echo "<p>That username is taken</p>";
          }
          else if($_GET["error"] == "none"){
            echo "<p>Thank you! You have been signed up :)</p>";
          }
        }
        ?>
      </div>
      <form action="includes/signup.inc.php" method="post">
        <div class="row">
          <div class="col">
            <label>Email:</label>
          </div>
          <div class="col">
            <input type="text" name="email" placeholder="email">
          </div>
        </div>
        <div class="row">
          <div class="col">
            <label>Username:</label>
          </div>
          <div class="col">
            <input type="text" name="uid" placeholder="username">
          </div>
        </div>
        <div class="row">
          <div class="col">
            <div class="text-end">
              <label>Password:</label>
            </div>
          </div>
          <div class="col">
            <input type="password" name="pwd" placeholder="password">
          </div>
        </div>
        <div class="row">
          <div class="col">
            <div class="float-end">
              <label>Repeat Password:</label>
            </div>
          </div>
          <div class="col">
            <input type="password" name="pwdrepeat" placeholder="repeat password">
          </div>
        </div>
        <br>
        <button type="submit" name="submit">Sign Up</button>
      </form>
<?php
  include_once('footer.php');
?>
