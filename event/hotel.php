
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
   <a  href="blogs.php">Blogs</a>
    </div>
 <!--============================= EVENTS =============================-->
    <section class="main-block light-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-5">
               
            
             <?php
						   $dbhost = 'root';
   $dbuser = '1234';
   $dbpass = 'kochi';
   
            
               $hid= $_GET['hid'];
               
   $conn = mysqli_connect('localhost',$dbhost, $dbuser, $dbpass);
   
						
		
                            $select = mysqli_query($conn, "SELECT * FROM hotel where hid = $hid");
		
		while ($rws = mysqli_fetch_assoc($select)) {
                            
                            
            
            ?>
            
                 <div class="styled-heading">
                        <h3><?php echo $rws['hotelname'];?></h3>
                    </div>
                </div>
            </div>
            
                    <div class="featured-place-wrap">
                      
                            <img src="image/<?php echo $rws['image'];?>" style="width:300px;height:400px; alt="#">
                           
                            <div class="featured-title-box">
                                
                                
                               
                                
                                <ul>
                                    <li><span class="icon-arrow-right-circle"></span>Details:
                                        <p><?php echo $rws['hoteldetails'];?></p>
                                    </li>
                                    <li><span class="icon-location-pin"></span>Location:<br>
                                        <p><?php echo $rws['hoteladdress'];?></p>
                                    </li>
                                   

                                </ul>
           <?php
                            session_start();
            
               if (isset($_SESSION['username'])){
                           $u= $_SESSION['username'];
                            
                            
						$sel = "SELECT * FROM reviews where hid = $hid and user = '$u' ";
						$rs = $conn->query($sel);
                            if (mysqli_num_rows($rs) != 0) { }
						
		else{
            
           echo"<form method=\"post\" action=\"addreview.php?hid=".$hid."\">";
        ?>
          
        <div class="row">
          <div class="col-50">
            <h3>Add Review</h3>
              <label>
  <input type="radio" name="star" value="1" >1 <i class="icon-star"></i> 
  <input type="radio" name="star" value="2" >2 <i class="icon-star"></i>
  <input type="radio" name="star" value="3" >3 <i class="icon-star"></i> 
                  <input type="radio" name="star" value="4" >4 <i class="icon-star"></i>
                    <input type="radio" name="star" value="5" >5 <i class="icon-star"></i>
</label>
              
            <label for="comment"><i class="fa fa-user"></i> Type Your Review</label>
            <textarea name="comment" rows="5" cols="30">
              </textarea>
              
              <input type="submit" value="Add" class="btn" name="add">
      
        <?php
        echo "</form>"; 
        
        
        
              ?>
                  </div>
                   
                    </div>
        <?php
       
        
        
        }   }
              ?>
                                
                                
                                <div class="row">
          <div class="col-50">
            <h3>All reviews</h3>
              <?php
              $conn = mysqli_connect('localhost',$dbhost, $dbuser, $dbpass);
   
						
		
                            $select = mysqli_query($conn, "SELECT * FROM reviews where hid = $hid");
		
		while ($r = mysqli_fetch_assoc($select)) {
           
                  ?>
                  <ul>
                                    <li><span class="icon-user"></span>User:
                                        <p><?php echo $r['user'];?></p>    <span class="icon-calendar"></span>Date:
                                        <p><?php echo $r['dateandtime'];?>    </p> Stars:<?php
                                          
              $s = $r['star'];

if($s == "1")
{
echo "<i class='icon-star'></i>";
}
else if ($s == "2")
{
echo "<i class='icon-star'></i><i class='icon-star'></i>";
}
else if ($s == "3")
{
echo "<i class='icon-star'></i><i class='icon-star'></i></i><i class='icon-star'></i>";
}
else if ($s == "4")
{
echo "<i class='icon-star'></i><i class='icon-star'></i><i class='icon-star'></i><i class='icon-star'></i>";
}
else if ($s == "5")
{
   echo " <i class='icon-star'></i><i class='icon-star'></i><i class='icon-star'></i><i class='icon-star'></i><i class='icon-star'></i>";
}
else
{
   echo " Not Given";
              }
                  ?>
                                    <br><span class="icon-speech"></span>Review:<br>
                                        <p><?php echo $r['comment'];?></p>
                                    </li>
                                  
                                </ul>
      
        <?php
         }
              ?>
                  </div>
                   
                    </div>
                                
                                
                                
                                
                                
                            </div>
                   
                    </div>
               
           
                 <?php
                        }
            ?>
           
      
        </div>
    </section>

    <!--//END FEATURED PLACES -->
    

</body>
</html>