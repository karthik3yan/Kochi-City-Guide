<!DOCTYPE html>
<html lang="en">
<head>
	<title>REPORT</title>
	<meta charset="UTF-8">
</head>
<body>
	
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100 ver1 m-b-110">
					<table data-vertable="ver1">
						<thead>
							<tr class="row100 head">
								<th class="column100 column1" data-column="column1">booking ID</th>
								<th class="column100 column2" data-column="column2">EVENT name</th>
								<th class="column100 column3" data-column="column3">USER</th>
								<th class="column100 column4" data-column="column4">EMAIL</th>
				
							</tr>
						</thead>
                          <?php
						   $dbhost = 'root';
   $dbuser = '';
   $dbpass = 'kochi';
     $eid = $_POST['eid'];

   $conn = mysqli_connect('localhost',$dbhost, $dbuser, $dbpass);
   
						$sel = "SELECT bid,eid,username,email FROM eventbooking where eid='$eid'";
						$rs = $conn->query($sel);
						while($rws = $rs->fetch_assoc()){
		
            
            ?>
						<tbody>
							<tr class="row100">
								<td class="column100 column1" data-column="column1"><?php echo $rws['bid'];?></td>
								<td class="column100 column2" data-column="column2"><?php echo $rws['eid'];?></td>
								<td class="column100 column3" data-column="column3"><?php echo $rws['username'];?></td>
								<td class="column100 column4" data-column="column4"><?php echo $rws['email'];?></td>
								
							</tr>
<?php
                        }
                        ?>
                            
                            
						</tbody>
					</table>
				</div>

            </div>
</body>
</html>