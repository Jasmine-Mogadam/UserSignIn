<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Ewert&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Ewert&display=swap" rel="stylesheet">
<link href="style.css" rel="stylesheet">
    <title>Sign In</title>
  </head>
  <body>
    <div class="nav">
      <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="signup.html">Sign Up</a></li>
        <li><a href="login.html">Login</a></li>
    </div>
    <div class="content">
      <h1>Sign Up</h1>
      <form action="includes/signup.inc.php" method="post">
        <label>Email:</label>
        <input type="text" name="email" value="email" placeholder="email">
        <label>Username:</label>
        <input type="text" name="username" value="username" placeholder="username">
        <label>Password:</label>
        <input type="password" name="pwd" value="pwd" placeholder="password">
        <label>Repeat Password:</label>
        <input type="password" name="pwdrepeat" value="pwdrepeat" placeholder="repeat password">
        <button type="submit" name="submit">Sign Up</button>
      </form>


  </body>
</html>
