<?php


							   $dbhost = 'root';
   $dbuser = '1234';
   $dbpass = 'kochi';
   
            
               
               
   $conn = mysqli_connect('localhost',$dbhost, $dbuser, $dbpass);
   
   
			session_start();
                           $btitle= $_SESSION['username'];			
		


  $btitle = mysqli_real_escape_string($conn, $_POST['btitle']);
  $bdetail = mysqli_real_escape_string($conn, $_POST['bdetail']);
 
  
           
$query = "INSERT INTO `blogrequest` (`brid`,  `btitle`, `bdetail`,  `dateandtime`) VALUES (NULL, '$btitle', '$bdetail',now())";


        
  	$insert = mysqli_query($conn, $query);
        
        
          if ($insert) {
 header('location: requestmessage.php');	
          }
else
{
    
    echo"erroer inserting";
    
}
       
    


?>