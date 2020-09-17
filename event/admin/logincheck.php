

<?php
session_start();



// connect to the database
$db = mysqli_connect('localhost', 'root', '1234', 'kochi');// LOGIN USER

  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
  	echo "Username is required";
  }
  if (empty($password)) {
  	echo "Password is required";
  }


  	$query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['adminusername'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: index.php?loginsuccess');
  	}else {
  		echo "Wrong username/password combination";
  	}
  

?>