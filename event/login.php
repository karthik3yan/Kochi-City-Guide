<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>kochi</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div align=center>
 <img src="image/KOCHIPEDIA.png" width="500" height="500" alt="landing page" />
<div class="topnav">
  <a class="active" href="index.php">Home</a>
  <a href="ev.php">EVENT</a>
  <a href="register.php">REGISTER</a>
  <a href="#about">About</a>
</div>
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="server.php">
  	
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
        
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
    </div>
</body>
</html>