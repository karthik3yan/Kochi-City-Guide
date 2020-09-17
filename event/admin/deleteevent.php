
           <?php
						   $dbhost = 'root';
   $dbuser = '1234';
   $dbpass = 'kochi';
   
            $eid = $_GET['eid'];
               
               
   $conn = mysqli_connect('localhost',$dbhost, $dbuser, $dbpass);
   
					
						
		   $insert = mysqli_query($conn, "DELETE FROM `event` WHERE `event`.`eid` = $eid");
                if ($insert) {
                    
                     header('location: viewevent.php');
                    
                }
            
            ?>