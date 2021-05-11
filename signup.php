<!--http://www.webformfactory.com/-->
<?php
$PageTitle="New Page Title";
$HighlightMarginLeft="33.3%";
function customPageHeader(){?>
<!--h1>Sign Up0</h1-->
<?php }
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
            <input type="text" name="email" value="email">
          </div>
        </div>
        <div class="row">
          <div class="col">
            <label>Username:</label>
          </div>
          <div class="col">
            <input type="text" name="username" value="username">
          </div>
        </div>
        <div class="row">
          <div class="col">
            <div class="text-end">
              <label>Password:</label>
            </div>
          </div>
          <div class="col">
            <input type="password" name="pwd" value="pwd">
          </div>
        </div>
        <div class="row">
          <div class="col">
            <div class="float-end">
              <label>Repeat Password:</label>
            </div>
          </div>
          <div class="col">
            <input type="password" name="pwdRepeat" value="pwdRepeat">
          </div>
        </div>
        <br>
        <button type="submit" name="submit">Sign Up</button>
      </form>
<?php
  include_once('footer.php');
?>
