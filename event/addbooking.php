<?php


							   $dbhost = 'root';
   $dbuser = '1234';
   $dbpass = 'kochi';
   
            
               
               
   $conn = mysqli_connect('localhost',$dbhost, $dbuser, $dbpass);
   
   
						
		


  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $address = mysqli_real_escape_string($conn, $_POST['address']);
  $eid = $_GET['eventid'];
            $city = mysqli_real_escape_string($conn, $_POST['city']);
            $state = mysqli_real_escape_string($conn, $_POST['state']);
            $zip = mysqli_real_escape_string($conn, $_POST['zip']);
            $cardname= mysqli_real_escape_string($conn, $_POST['cardname']);
            $cardnumber= mysqli_real_escape_string($conn, $_POST['cardnumber']);
            $expmonth= mysqli_real_escape_string($conn, $_POST['expmonth']);
            $expyear= mysqli_real_escape_string($conn, $_POST['expyear']);
            $cvv= mysqli_real_escape_string($conn, $_POST['cvv']);
$query = "INSERT INTO `eventbooking` (`bid`, `eid`, `username`, `email`, `address`, `city`, `state`, `zip`, `cardnumber`, `cardname`, `expmonth`, `expyear`, `cvv`) VALUES (NULL, '$eid', '$username', '$email', '$address', '$city', '$state', '$zip', '$cardnumber', '$cardname', '$expmonth', '$expyear', '$cvv')";


        
  	$insert = mysqli_query($conn, $query);
        
        
          if ($insert) {
              
              $insert = mysqli_query($conn, "Update event  SET interests = interests + 1 where eid = $eid");
                if ($insert) {
 header('location: ticket.php?eid='.$eid.'&name='.$username.'&mail='.$email.'');	}
          }
else
{
    
    echo"erroer inserting";
    
}
       
    


?>