
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
  <a  href="hotels.php">Hotels</a>
    <a href="resto.php">Resturants</a>
   <a class="active"  href="blogs.php">Blogs</a>
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
   
            
               $bid= $_GET['bid'];
               
   $conn = mysqli_connect('localhost',$dbhost, $dbuser, $dbpass);
   
              $insert = mysqli_query($conn, "Update blog  SET views = views + 1 where bid = $bid");
					   if ($insert) {
		
                            $select = mysqli_query($conn, "SELECT * FROM blog where bid = $bid");
		
		while ($rws = mysqli_fetch_assoc($select)) {
                            
                            
            
            ?>
            
                 <div class="styled-heading">
                        <h3><?php echo $rws['title'];?></h3>
                    </div>
                </div>
            </div>
            
                    <div class="featured-place-wrap">
                      
                           
                           
                            <div class="featured-title-box">
                                
                                
                               
                                
                                <ul>
                                    <li><span class="icon-arrow-right-circle"></span>Details:
                                        <p><?php echo $rws['details'];?></p>
                                    </li>
                                    <li><span class="icon-calendar"></span>Date Posted:<br>
                                        <p><?php echo $rws['dateandtime'];?></p>
                                    </li>
                                   

                                </ul>
           <?php
                            session_start();
          
    
    if (isset($_SESSION['username'])){
                           $u= $_SESSION['username'];
                     
            
           echo"<form method=\"post\" action=\"addcomment.php?bid=".$bid."\">";
        ?>
          
        <div class="row">
          <div class="col-50">
            <h3>Add Comment</h3>
         
            <label for="comment"><i class="fa fa-user"></i> Type Your Comment</label>
            <textarea name="comment" rows="5" cols="30">
              </textarea>
              
              <input type="submit" value="Add" class="btn" name="add">
      
        <?php
        echo "</form>"; 
        
        
    }
              ?>
                  </div>
                   
                    </div>
        <?php
       
        
        
        
              ?>
                                
                                
                                <div class="row">
          <div class="col-50">
            <h3>All Comments</h3>
              <?php
              $conn = mysqli_connect('localhost',$dbhost, $dbuser, $dbpass);
   
						
		
                            $select = mysqli_query($conn, "SELECT * FROM comments where bid = $bid");
		
		while ($r = mysqli_fetch_assoc($select)) {
           
                  ?>
                  <ul>
                                    <li><span class="icon-user"></span>User:
                                        <p><?php echo $r['user'];?></p>    <span class="icon-calendar"></span>Date:
                                        <p><?php echo $r['dateandtime'];?> </p>
                
                                    <br><span class="icon-speech"></span>Comment:<br>
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
                        } }
            ?>
           
      
        </div>
    </section>

    <!--//END FEATURED PLACES -->
    

</body>
</html>