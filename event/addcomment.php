<?php


							   $dbhost = 'root';
   $dbuser = '1234';
   $dbpass = 'kochi';
   
            
               
               
   $conn = mysqli_connect('localhost',$dbhost, $dbuser, $dbpass);
   
   
				 session_start();
                           $u= $_SESSION['username'];
         







  $comment = mysqli_real_escape_string($conn, $_POST['comment']);
  
  $bid = $_GET['bid'];
           
$query = "INSERT INTO `comments` (`cid`, `user`, `comment`, `bid`,`dateandtime`) VALUES (NULL, '$u', '$comment', '$bid', now() )";


        
  	$insert = mysqli_query($conn, $query);
        
        
          if ($insert) {
 header('location: blog.php?bid='.$bid.'');	
          }
else
{
    
    echo"erroer inserting";
    
}
       
    


?>