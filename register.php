<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Registeration user</title>
    <link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body background="images/coffee.jpg">
  <div class="header">
      <h2> Register </h2> 
  </div>

  <form method="POST" action="register.php">
      <?php include('errors.php'); ?>
      <div class="input-group">
          <label>Username</label>
          <input type=text name="username" value="<?php echo $username; ?>">
      </div>

      <div class="input-group">
          <label>Email</label>
          <input type=text name="email" value="<?php echo $email; ?>">
      </div>

      <div class="input-group">
          <label>Password</label>
          <input type=password name="password">
      </div>

      <div class="input-group">
          <label>Confirm Password</label>
          <input type=password name="cpassword">
      </div>
      <div class="input-group">
          <button type="submit" name="Register" class="btn">Register</button>
      </div>
      <p>
          Already Registered? <a href="login.php"> Sign in</a>
      </p>
  </form>
</body>
</html>