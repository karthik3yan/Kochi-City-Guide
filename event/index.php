
<html>
<head>
<title>KOCHI</title>
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
</head>
<body>
    

<div align=center>
 <img src="image/KOCHIPEDIA.png" width="500" height="500" alt="landing page" />
     <link rel="stylesheet" type="text/css" href="style.css">

<div class="topnav">
  <a class="active" href="index.php">Home</a>
  
    
  <?php
session_start();
?>
     <?php  
    
    if (isset($_SESSION['username'])){ ?>
        <a href="ev.php">Event</a>
  <a href="hotels.php">Hotels</a>
    <a href="resto.php">Resturants</a>
     <a  href="blogs.php">Blogs</a><?php
    	echo"<a href=\"logout.php\">Logout</a>";
    }
    else
    {
        
        echo"<a href=\"login.php\">Login</a>";
        
    }
    
    ?>
</div>
    
    
 
 <!--============================= FIND PLACES =============================--> 
    <section class="main-block">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="styled-heading">
                     
                        <?php  if (isset($_SESSION['username'])) : ?>
    	<h4><p> Welcome <strong><?php echo $_SESSION['username']; ?></strong> </p> </h4>
    <?php endif ?>
                     
                        <h3>What do you need to find?</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="find-place-img_wrap">
                        <div class="grid">
                            <figure class="effect-ruby">
                                <img src="images/find-place1.jpg" class="img-fluid" alt="img13" />
                                <figcaption>
                                    <h5>  <a href="ev.php">EVENT</a> </h5>
                               
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row find-img-align">
                        <div class="col-md-12">
                            <div class="find-place-img_wrap">
                                <div class="grid">
                                    <figure class="effect-ruby">
                                        <img src="images/find-place2.jpg" class="img-fluid" alt="img13" />
                                        <figcaption>
                                            <h5><a href="resto.php">RESTURANT</a></h5>

                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="find-place-img_wrap">
                                <div class="grid">
                                    <figure class="effect-ruby">
                                        <img src="images/find-place3.jpg" class="img-fluid" alt="img13" />
                                        <figcaption>
                                            <h5> <a href="promo.php"> PROMO CODES </a> </h5>
                                         
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row find-img-align">
                        <div class="col-md-12">
                            <div class="find-place-img_wrap">
                                <div class="grid">
                                    <figure class="effect-ruby">
                                        <img src="images/find-place4.jpg" class="img-fluid" alt="img13" />
                                        <figcaption>
                                            <h5><a href="hotels.php">Hotels </a></h5>
                                           
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="find-place-img_wrap">
                                <div class="grid">
                                    <figure class="effect-ruby">
                                        <img src="images/find-place5.jpg" class="img-fluid" alt="img13" />
                                        <figcaption>
                                           <h5> <a href="blogs.php"> Blogs </a> </h5>
                                            
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//END FIND PLACES -->
  
                        
 



    <!-- jQuery, Bootstrap JS. -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script>
        $(window).scroll(function() {
            // 100 = The point you would like to fade the nav in.

            if ($(window).scrollTop() > 100) {

                $('.fixed').addClass('is-sticky');

            } else {

                $('.fixed').removeClass('is-sticky');

            };
        });
    </script>
    </div>
    
</body>

</html>

    
    