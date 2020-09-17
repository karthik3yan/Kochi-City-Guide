<?php


							   $dbhost = 'root';
   $dbuser = '1234';
   $dbpass = 'kochi';
   
            
               
               
   $conn = mysqli_connect('localhost',$dbhost, $dbuser, $dbpass);
   
   
			session_start();
                           $u= $_SESSION['username'];			
		


  $ename = mysqli_real_escape_string($conn, $_POST['title']);
  $edetail = mysqli_real_escape_string($conn, $_POST['details']);
  $charge = mysqli_real_escape_string($conn, $_POST['charge']);
  
            $date = mysqli_real_escape_string($conn, $_POST['date']);
           
$query = "INSERT INTO `event` (`eid`, `host`, `ename`, `einfo`, `charges`, `date`) VALUES (NULL, 'admin', '$ename', '$edetail', '$charge', '$date')";


        
  	$insert = mysqli_query($conn, $query);
        
        
          if ($insert) {
 header('location: viewevent.php');	
          }
else
{
    
    echo"erroer inserting";
    
}
       
    


?>