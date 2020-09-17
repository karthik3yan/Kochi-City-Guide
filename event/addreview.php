<?php


							   $dbhost = 'root';
   $dbuser = '1234';
   $dbpass = 'kochi';
   
            
               
               
   $conn = mysqli_connect('localhost',$dbhost, $dbuser, $dbpass);
   
   
				 session_start();
                           $u= $_SESSION['username'];
                            		
		
$s = $_POST["star"];

if($s == "1")
{
$star = 1;
}
else if ($s == "2")
{
$star = 2;
}
else if ($s == "3")
{
$star = 3;
}
else if ($s == "4")
{
$star = 4;
}
else if ($s == "5")
{
$star = 5;
}
else
{
    $star = Not given;
}








  $comment = mysqli_real_escape_string($conn, $_POST['comment']);
  
  $hid = $_GET['hid'];
           
$query = "INSERT INTO `reviews` (`rid`, `user`, `star`, `comment`, `hid`,`dateandtime`) VALUES (NULL, '$u', '$star', '$comment', '$hid', now() )";


        
  	$insert = mysqli_query($conn, $query);
        
        
          if ($insert) {
 header('location: hotel.php?hid='.$hid.'');	
          }
else
{
    
    echo"erroer inserting";
    
}
       
    


?>