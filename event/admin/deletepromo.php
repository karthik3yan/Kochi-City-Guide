
           <?php
						   $dbhost = 'root';
   $dbuser = '1234';
   $dbpass = 'kochi';
   
            $pcid = $_GET['pcid'];
               
               
   $conn = mysqli_connect('localhost',$dbhost, $dbuser, $dbpass);
   
					
						
		   $insert = mysqli_query($conn, "DELETE FROM `prmocode` WHERE `prmocode`.`pcid` = $pcid");
                if ($insert) {
                    
                     header('location: viewpromo.php');
                    
                }
            
            ?>