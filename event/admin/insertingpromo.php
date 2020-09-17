<?php


							   $dbhost = 'root';
   $dbuser = '1234';
   $dbpass = 'kochi';
   
            
               
               
   $conn = mysqli_connect('localhost',$dbhost, $dbuser, $dbpass);
   
   
 $by = mysqli_real_escape_string($conn, $_POST['by']);		
		


  $Title = mysqli_real_escape_string($conn, $_POST['title']);
  $detail = mysqli_real_escape_string($conn, $_POST['details']);
  $code = mysqli_real_escape_string($conn, $_POST['code']);
  
            $date = mysqli_real_escape_string($conn, $_POST['date']);
     
$query = "INSERT INTO `prmocode` (`pcid`, `Title`, `by`, `code`, `desc`, `expdate`) VALUES (NULL, '$Title', '$by', '$code', '$detail', '$date')";

        
  	$insert = mysqli_query($conn, $query);
        
        
          if ($insert) {
 header('location: viewpromo.php');	
          }
else
{
    
    echo"erroer inserting";
    
}
       
    


?>