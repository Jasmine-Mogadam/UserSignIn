<?php
$PageTitle="Forum";
$HighlightMarginLeft="50%";
function customPageHeader(){?>
<?php }
include_once('header.php');
?>
      <h1>Your Profile</h1>
      <?php
      echo "<p>Hi " . $_SESSION["useruid"] .". I hope you're having a good day.</p><br>";
      ?>
<?php
  include_once('footer.php');
?>
