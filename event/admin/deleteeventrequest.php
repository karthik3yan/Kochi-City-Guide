
           <?php
						   $dbhost = 'root';
   $dbuser = '1234';
   $dbpass = 'kochi';
   
            $erid = $_GET['erid'];
               
               
   $conn = mysqli_connect('localhost',$dbhost, $dbuser, $dbpass);
   
					
						
		   $insert = mysqli_query($conn, "DELETE FROM `eventrequest` WHERE `eventrequest`.`erid` = $erid");
                if ($insert) {
                    
                     header('location: eventrequest.php');
                    
                }
            
            ?>