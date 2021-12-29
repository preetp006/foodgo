<?php include('server.php'); ?>
<!doctype=<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Login user</title>
    <link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body background="images/coffee.jpg">
  <div class="header">
      <h2> Login </h2> 
  </div>

  <form method="POST" action="login.php">
      <?php include ('errors.php'); ?>
      <div class="input-group">
          <label>Username</label>
          <input type=text name="username">
      </div>

      

      <div class="input-group">
          <label>Password</label>
          <input type=password name="password">
      </div>

     
      <div class="input-group">
          <button type="submit" name="login" class="btn">Login</button>
      </div>
      <p>
          Not Registered? <a href="register.php"> Sign up</a>
      </p>
  </form>
</body>
</html>