<?php


							   $dbhost = 'root';
   $dbuser = '1234';
   $dbpass = 'kochi';
   
            
               
               
   $conn = mysqli_connect('localhost',$dbhost, $dbuser, $dbpass);
   
   
			session_start();
                           $u= $_SESSION['username'];			
		


  $ename = mysqli_real_escape_string($conn, $_POST['ename']);
  $edetail = mysqli_real_escape_string($conn, $_POST['edetail']);
  $charge = mysqli_real_escape_string($conn, $_POST['charge']);
  
            $date = mysqli_real_escape_string($conn, $_POST['date']);
           
$query = "INSERT INTO `eventrequest` (`erid`, `user`, `ename`, `edetail`, `charge`, `date`) VALUES (NULL, '$u', '$ename', '$edetail', '$charge', '$date')";


        
  	$insert = mysqli_query($conn, $query);
        
        
          if ($insert) {
 header('location: requestmessage.php');	
          }
else
{
    
    echo"erroer inserting";
    
}
       
    


?>