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
    header("location: ../signup.php?error=emptyinput"); //redirects to form if not submited from form
    exit();

  }
  if(invalidUid($username) !== false){
    header("location: ../signup.php?error=invaliduid"); //redirects to form if not submited from form
    exit();

  }
  if(invalidEmail($email) !== false){
    header("location: ../signup.php?error=invalidemail"); //redirects to form if not submited from form
    exit();
  }
  if(pwdMatch($pwd,$pwdRepeat) !== false){
    header("location: ../signup.php?error=passwordsdontmatch"); //redirects to form if not submited from form
    exit();
  }
  if(uidExists($conn,$username,$email) !== false){
    header("location: ../signup.php?error=usernametaken"); //redirects to form if not submited from form
    exit();
  }

  createUser($conn,$email,$username,$pwd);
}
else {
  header("location: ../signup.php"); //redirects to form if not submited from form
  exit();
}
