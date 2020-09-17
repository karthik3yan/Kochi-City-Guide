<?php


						   $dbhost = 'root';
   $dbuser = '';
   $dbpass = 'kochi';
   
   $conn = mysqli_connect('localhost',$dbhost, $dbuser, $dbpass);
   
						
		


  $rname = mysqli_real_escape_string($conn, $_POST['restoname']);
  $rinfo = mysqli_real_escape_string($conn, $_POST['restoinfo']);
  $seat = mysqli_real_escape_string($conn, $_POST['seats']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
  $catigory = mysqli_real_escape_string($conn, $_POST['catigory']);

$query = "INSERT INTO `resto`(`rname`, `rinfo`, `seats`, `address`, `catigory`) VALUES ('$rname','$rinfo','$seat','$address','$catigory') ";


        
  	$insert = mysqli_query($conn, $query);
        
        
          if ($insert) {
 header('location: dash.php?eventadded');	
          }
else
{
    
    echo"error inserting";
    
}
       
    


?>