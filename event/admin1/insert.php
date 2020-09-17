<?php


						   $dbhost = 'root';
   $dbuser = '';
   $dbpass = 'kochi';
   
   $conn = mysqli_connect('localhost',$dbhost, $dbuser, $dbpass);
   
						
		


  $eventname = mysqli_real_escape_string($conn, $_POST['eventname']);
  $eventinfo = mysqli_real_escape_string($conn, $_POST['eventinfo']);
  $date = mysqli_real_escape_string($conn, $_POST['date']);

  $charges = mysqli_real_escape_string($conn, $_POST['charges']);
  
$query = "INSERT INTO `event`(`ename`, `einfo`, `date`, `charges`) VALUES ('$eventname','$eventinfo','$date','$charges') ";


        
  	$insert = mysqli_query($conn, $query);
        
        
          if ($insert) {
 header('location: dash.php?eventadded');	
          }
else
{
    
    echo"error inserting";
    
}
       
    


?>