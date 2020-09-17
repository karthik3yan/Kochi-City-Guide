<?php


							   $dbhost = 'root';
   $dbuser = '1234';
   $dbpass = 'kochi';
   
             $brid = $_GET['brid'];
               
               
   $conn = mysqli_connect('localhost',$dbhost, $dbuser, $dbpass);
  
			$sel = "SELECT * FROM blogrequest where brid = $brid";
						$rs = $conn->query($sel);
						while($rws = $rs->fetch_assoc()){
                            
                         
                             $title=$rws['btitle'];
                             $detail=$rws['bdetail'];
                           
                             $date=$rws['dateandtime'];
                            
                            
$query = "INSERT INTO `blog` (`bid`, `title`, `details`, `dateandtime`) VALUES (NULL, '$title', '$detail', '$date')";
	$insert = mysqli_query($conn, $query);
                        }
        
          if ($insert) {
              
                $insert1 = mysqli_query($conn, "DELETE FROM `blogrequest` WHERE `blogrequest`.`brid` = $brid");
                if ($insert1) {
                    
                     header('location: blogrequest.php');
                    
                }
          }
else
{
    
    echo"erroer inserting";
    
}
       
    


?>