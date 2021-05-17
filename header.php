<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title><?= isset($PageTitle) ? $PageTitle : "Default Title"?></title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ewert&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ewert&display=swap" rel="stylesheet">
    <link href="style.css" rel="stylesheet" href="index.css?v=<?php echo time(); ?>">
    <script src="jQuery.js"></script>
    <?php if (function_exists('customPageHeader')){
      customPageHeader();
    }?>
  </head>
  <body>
    <div id="navbar">
      <a id="nav1" href="index.php">Home</a>
      <a id="nav2" href="signup.php">Sign Up</a>
      <a id="nav3" href="login.php">Login</a>
      <div class="highlight" style="margin-left:<?= isset($HighlightMarginLeft) ? $HighlightMarginLeft : '0px'?>"></div>
      <div class="highlightB" style="margin-left:<?= isset($HighlightMarginLeft) ? $HighlightMarginLeft : '0px'?>"></div>
    </div>
    <script>
      //when mouseleaves navbar
      $(document).ready(function(){
        $('#navbar').mouseleave(function(){
          $(".highlight").attr("style","margin-left:<?= isset($HighlightMarginLeft) ? $HighlightMarginLeft : '0px'?>");
          $(".highlightB").attr("style","margin-left:<?= isset($HighlightMarginLeft) ? $HighlightMarginLeft : '0px'?>");
        })
      })
    </script>
    <div class="content">
