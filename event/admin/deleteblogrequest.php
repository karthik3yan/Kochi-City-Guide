        <?php
						   $dbhost = 'root';
   $dbuser = '1234';
   $dbpass = 'kochi';
   
            $brid = $_GET['brid'];
               
               
   $conn = mysqli_connect('localhost',$dbhost, $dbuser, $dbpass);
   
					
						
		   $insert = mysqli_query($conn, "DELETE FROM `blogrequest` WHERE `blogrequest`.`brid` = $brid");
                if ($insert) {
                    
                     header('location: blogrequest.php');
                    
                }
            
            ?>