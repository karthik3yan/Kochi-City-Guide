
           <?php
						   $dbhost = 'root';
   $dbuser = '1234';
   $dbpass = 'kochi';
   
            $rid = $_GET['rid'];
               
               
   $conn = mysqli_connect('localhost',$dbhost, $dbuser, $dbpass);
   
					
						
		   $insert = mysqli_query($conn, "DELETE FROM `resto` WHERE `resto`.`rid` = $rid");
                if ($insert) {
                    
                     header('location: viewrest.php');
                    
                }
            
            ?>