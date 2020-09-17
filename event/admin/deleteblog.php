
           <?php
						   $dbhost = 'root';
   $dbuser = '1234';
   $dbpass = 'kochi';
   
            $bid = $_GET['bid'];
               
               
   $conn = mysqli_connect('localhost',$dbhost, $dbuser, $dbpass);
   
					
						
		   $insert = mysqli_query($conn, "DELETE FROM `blog` WHERE `blog`.`bid` = $bid");
                if ($insert) {
                    
                     header('location: viewblog.php');
                    
                }
            
            ?>