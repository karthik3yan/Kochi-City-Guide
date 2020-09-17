<?php


							   $dbhost = 'root';
   $dbuser = '1234';
   $dbpass = 'kochi';
   
            
               
               
   $conn = mysqli_connect('localhost',$dbhost, $dbuser, $dbpass);
   
   
		

  $name = mysqli_real_escape_string($conn, $_POST['name']);
  $detail = mysqli_real_escape_string($conn, $_POST['info']);
  $address = mysqli_real_escape_string($conn, $_POST['address']);
    $seat = mysqli_real_escape_string($conn, $_POST['seat']);
            $cat = mysqli_real_escape_string($conn, $_POST['cat']);
           
$query = "INSERT INTO `resto` (`rid`, `rname`, `rinfo`, `address`, `catigory`, `aseat`) VALUES (NULL, '$name', '$detail', '$address', '$cat', '$seat')";


        
  	$insert = mysqli_query($conn, $query);
        
        
          if ($insert) {
 header('location: viewrest.php');	
          }
else
{
    
    echo"erroer inserting";
    
}
       
    


?>