
           <?php
						   $dbhost = 'root';
   $dbuser = '1234';
   $dbpass = 'kochi';
   
            $hid = $_GET['hid'];
               
               
   $conn = mysqli_connect('localhost',$dbhost, $dbuser, $dbpass);
   
					
						
		   $insert = mysqli_query($conn, "DELETE FROM `hotel` WHERE `hotel`.`hid` = $hid");
                if ($insert) {
                    
                     header('location: viewhotel.php');
                    
                }
            
            ?>