<?php

			   $dbhost = 'root';
   $dbuser = '1234';
   $dbpass = 'kochi';
   
            
               
               
   $conn = mysqli_connect('localhost',$dbhost, $dbuser, $dbpass);
   


  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $rid = $_GET['rid'];
    $date = $_GET['date'];     
            
            $seat= mysqli_real_escape_string($conn, $_POST['seats']);
            
$query = "INSERT INTO `restobooking` (`bid`, `rid`, `username`, `numbers`, `date`, `email`) VALUES (NULL, '$rid', '$username', '$seat', '$date', '$email')";


        
  	$insert = mysqli_query($conn, $query);
        
        
          if ($insert) {
 header('location: restoreserved.php?date='.$date.'&seat='.$seat.'&name='.$username.'&mail='.$email.'');	
          }
else
{
    
    echo"erroer inserting";
    
}
       
    


?>