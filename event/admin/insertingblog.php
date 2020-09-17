

<?php


							   $dbhost = 'root';
   $dbuser = '1234';
   $dbpass = 'kochi';
   
            
               
               
   $conn = mysqli_connect('localhost',$dbhost, $dbuser, $dbpass);



  $Title = mysqli_real_escape_string($conn, $_POST['title']);
  $detail = mysqli_real_escape_string($conn, $_POST['details']);

     
$query = "INSERT INTO `blog` (`bid`, `title`, `details`, `dateandtime`) VALUES (NULL, '$Title', '$detail',  now())";

        
  	$insert = mysqli_query($conn, $query);
        
        
          if ($insert) {
 header('location: viewblog.php');	
          }
else
{
    
    echo"erroer inserting";
    
}
       
    


?>