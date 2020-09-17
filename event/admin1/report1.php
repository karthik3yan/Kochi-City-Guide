<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>report</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div align=center>

  <div class="header">
  	<h2>REPORT</h2>
  </div>
	 
  <form method="post"action="generate.php">
  	
  	<div class="input-group">
  		<label>event id</label>
  		<input type="text" name="eid" >
  	</div>
  	
  	<div class="input-group">
  		<button type="submit" class="btn" name="generate">GENERATE</button>
  	</div>

  </form>
    </div>
</body>
</html>