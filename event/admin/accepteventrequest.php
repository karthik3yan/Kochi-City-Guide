<?php


							   $dbhost = 'root';
   $dbuser = '1234';
   $dbpass = 'kochi';
   
             $erid = $_GET['erid'];
               
               
   $conn = mysqli_connect('localhost',$dbhost, $dbuser, $dbpass);
  
			$sel = "SELECT * FROM eventrequest where erid = $erid";
						$rs = $conn->query($sel);
						while($rws = $rs->fetch_assoc()){
                            
                            $user=$rws['user'];
                             $ename=$rws['ename'];
                             $edetail=$rws['edetail'];
                             $charge=$rws['charge'];
                             $date=$rws['date'];
                            
                            
$query = "INSERT INTO `event` (`eid`, `host`, `ename`, `einfo`, `charges`, `date`) VALUES (NULL, '$user', '$ename', '$edetail', '$charge', '$date')";
	$insert = mysqli_query($conn, $query);
                        }
        
          if ($insert) {
              
                $insert1 = mysqli_query($conn, "DELETE FROM `eventrequest` WHERE `eventrequest`.`erid` = $erid");
                if ($insert1) {
                    
                     header('location: eventrequest.php');
                    
                }
          }
else
{
    
    echo"erroer inserting";
    
}
       
    


?>