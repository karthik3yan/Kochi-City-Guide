<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
<title>KOCHI</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div align=center>
 <img src="image/KOCHIPEDIA.png" width="500" height="500" alt="landing page" />
<div class="topnav">
  <a class="active" href="index.php">Home</a>
  <a href="ev.php">EVENT</a>
  <a href="register.php">REGISTER</a>
</div>
<form method="post" action="login.php">

  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
    </div>
</body>
</html>

    

  
  
 