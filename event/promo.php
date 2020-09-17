<!DOCTYPE html>
<html>
<head>
  <title>Promo Codes</title>
  <link href='https://fonts.googleapis.com/css?family=Lobster|Kreon:400,700' rel='stylesheet' type='text/css'>
  <!-- <link rel="stylesheet" href="styles/main.css" media="screen" charset="utf-8"/> -->
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta http-equiv="content-type" content="text-html; charset=utf-8">
</head>

<style>.coupon {
  border: 5px dotted #bbb; /* Dotted border */
  width: 80%; 
  border-radius: 15px; /* Rounded border */
  margin: 0 auto; /* Center the coupon */
  max-width: 600px; 
}

.container {
  padding: 2px 16px;
  background-color: #f1f1f1;
}

.promo {
  background: #ccc;
  padding: 3px;
}

.expire {
  color: red;
}
</style>

<body>
  
            
             <?php
						   $dbhost = 'root';
   $dbuser = '1234';
   $dbpass = 'kochi';
   
            
   $conn = mysqli_connect('localhost',$dbhost, $dbuser, $dbpass);
   
						
		
                            $select = mysqli_query($conn, "SELECT * FROM prmocode ORDER BY `pcid` desc");
		
		while ($rws = mysqli_fetch_assoc($select)) {
                            
                            
            
            ?>
    
    
    <div class="coupon">
  <div class="container">
    <h3><?php echo $rws['by'];?></h3>
  </div>
  <img src="image/KOCHIPEDIA.png" alt="Avatar" style="width:300px;height:250px">
  <div class="container" style="background-color:white">
    <h2><b><?php echo $rws['Title'];?></b></h2> 
    <p><?php echo $rws['desc'];?></p>
  </div>
  <div class="container">
    <p>Use Promo Code: <span class="promo"><?php echo $rws['code'];?></span></p>
    <p class="expire">Expires: <?php echo $rws['expdate'];?></p>
  </div>
</div>
<?php }
    ?>
</body>

</html>
