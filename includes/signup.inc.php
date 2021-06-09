<?php

//prevents users from botting accounts (as easily)
if (isset($_POST["submit"])){ //runs code if submitted from form
  $email = $_POST["email"];
  $username = $_POST["uid"];
  $pwd = $_POST["pwd"];
  $pwdRepeat = $_POST["pwdrepeat"];

  require_once 'dbh.inc.php';
  require_once 'functions.inc.php';

  if(emptyInputSignup($email,$username,$pwd,$pwdRepeat) !== false){
    header("location: ../signup.php?error=emptyinput"); //redirects if any input it empty
    exit();

  }
  if(invalidUid($username) !== false){
    header("location: ../signup.php?error=invaliduid"); //redirects if uid has unwanted characters
    exit();

  }
  if(invalidEmail($email) !== false){
    header("location: ../signup.php?error=invalidemail"); //redirects if email format is incorrect
    exit();
  }
  if(pwdMatch($pwd,$pwdRepeat) !== false){
    header("location: ../signup.php?error=passwordsdontmatch"); //redirects if passwords dont match
    exit();
  }
  if(uidExists($conn,$username,$email) !== false){
    header("location: ../signup.php?error=usernametaken"); //redirects if username is already in use
    exit();
  }

  createUser($conn,$email,$username,$pwd);
}
else {
  header("location: ../signup.php"); //redirects if not submited from form (anti-bot)
  exit();
}
