<?php

if (isset($_POST["submit"])){ //runs code if submitted from form
  $username = $_POST["uid"];
  $pwd = $_POST["pwd"];

  require_once 'dbh.inc.php';
  require_once 'functions.inc.php';

  if(emptyInputLogin($username,$pwd) !== false){
    header("location: ../login.php?error=emptyinput"); //redirects if any input it empty
    exit();

  }

  loginUser($conn,$username,$pwd);
}
else {
  header("location: ../login.php"); //redirects if not submited from form (anti-bot)
  exit();
}
