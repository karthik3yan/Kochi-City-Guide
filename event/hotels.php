
<html>
<body>
     <link rel="stylesheet" type="text/css" href="style.css">
 <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Colorlib">
    <meta name="description" content="#">
    <meta name="keywords" content="#">
    <!-- Page Title -->
    <title>Listing &amp; KOCHI</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700,900" rel="stylesheet">
    <!-- Simple line Icon -->
    <link rel="stylesheet" href="css/simple-line-icons.css">
    <!-- Themify Icon -->
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- Hover Effects -->
    <link rel="stylesheet" href="css/set1.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="css/style.css">
    
    <link rel="stylesheet" type="text/css" href="style.css">
<div class="topnav">
  <a  href="index.php">Home</a>
  <a href="ev.php">Event</a>
  <a class="active" href="hotels.php">Hotels</a>
    <a href="resto.php">Resturants</a>
    <a href="blogs.php">Blogs</a>
    </div>
 <!--============================= EVENTS =============================-->
    <section class="main-block light-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="styled-heading">
                        <h3>Hotels</h3>
                    </div>
                </div>
            </div>
            
                        

            
           <div class="row">
            
             <?php
						   $dbhost = 'root';
   $dbuser = '1234';
   $dbpass = 'kochi';
   
            
               
               
   $conn = mysqli_connect('localhost',$dbhost, $dbuser, $dbpass);
   
						$sel = "SELECT * FROM hotel";
						$rs = $conn->query($sel);
						while($rws = $rs->fetch_assoc()){
		
            
            ?>
            
     
             <div class="col-md-4 featured-responsive">
                    <div class="featured-place-wrap">
                      <?php  echo "<a href=\"hotel.php?hid=".$rws['hid']."\">"  ?>
                            <img src="image/KOCHIPEDIA.png" class="img-fluid" alt="#">
                           
                            <div class="featured-title-box">
                                
                                <h6><?php echo $rws['hotelname'];?></h6>
                               
                                
                                <ul>
                                    <li><span class="icon-location-pin"></span>
                                        <p><?php echo $rws['hoteldetails'];?></p>
                                    </li>
                                    <li>
                                        <p><?php echo $rws['hoteladdress'];?></p>
                                    </li>
                                    
                                   

                                </ul>
                                <div class="bottom-icons">
                                    
                             
                                </div>
                            </div>
                        </a>
                    </div>
               
            </div>
            
                 <?php
                        }
            ?>
            </div>
           
      
        </div>
    </section>

    <!--//END FEATURED PLACES -->
    

</body>
</html>