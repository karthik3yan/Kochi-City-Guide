<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <title>Admin Dashboard </title>
</head>

<body>
    
    
    
       
  <?php
session_start();
    if (isset($_SESSION['adminusername'])){}
    else
    {
        
          header('location: login.php');
    }
        
        ?>
        
        
        
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="index.php">Admin Dashboard</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                       
                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/avatar-1.jpg" alt="" class="user-avatar-md rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
<h5>Admin</h5>
                                  
                                </div>
                                
                                <a class="dropdown-item" href="logout.php"><i class="fas fa-power-off mr-2"></i>Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
       <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Menu
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fa fa-fw fa-rocket"></i>Reports</a>
                                <div id="submenu-2" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="report1.php">Report 1</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="report2.php">Report 2</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="report3.php">Report 3</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="report4.php">Report 4</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="report5.php">Report 5</a>
                                        </li>
                                       
                                    </ul>
                                </div>
                            </li>
                           
                            
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3"><i class="fa fa-fw fa-music"></i>Manage Events</a>
                                <div id="submenu-3" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="viewevent.php">View All</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="addevent.php">Add New</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="eventrequest.php">Request List</a>
                                        </li>
                                        
                                       
                                    </ul>
                                </div>
                            </li>
                            
                            
                             <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-4" aria-controls="submenu-4"><i class="fa fa-fw fa-star"></i>Manage Restaurants</a>
                                <div id="submenu-4" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="viewrest.php">View All</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="addrest.php">Add New</a>
                                        </li>
                                        
                                        
                                       
                                    </ul>
                                </div>
                            </li>
                            
                            
                            
                             <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-5" aria-controls="submenu-5"><i class="fa fa-fw fa-gift"></i>Manage Promo Codes</a>
                                <div id="submenu-5" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="viewpromo.php">View All</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="addpromo.php">Add New</a>
                                        </li>
                                        
                                        
                                       
                                    </ul>
                                </div>
                            </li>
                            
                            
                            
                              <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-6" aria-controls="submenu-6"><i class="fa fa-fw fa-bed"></i>Manage Hotels</a>
                                <div id="submenu-6" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="viewhotel.php">View All</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="addhotel.php">Add New</a>
                                        </li>
                                        
                                        
                                       
                                    </ul>
                                </div>
                            </li>
                             <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-7" aria-controls="submenu-7"><i class="fa fa-fw fa-rss"></i>Manage Blogs</a>
                                <div id="submenu-7" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="viewblog.php">View All</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="addblog.php">Add New</a>
                                        </li>
                                         <li class="nav-item">
                                            <a class="nav-link" href="blogrequest.php">Request List</a>
                                        </li>
                                        
                                       
                                    </ul>
                                </div>
                            </li>
                            
                            
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <div class="row">
                    <div class="col-xl-10">
                        <!-- ============================================================== -->
                        <!-- pageheader  -->
                        <!-- ============================================================== -->
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="page-header" id="top">
                                   
                                    <div class="page-breadcrumb">
                                        <nav aria-label="breadcrumb">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Reports</a></li>
                                               
                                            </ol>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end pageheader  -->
                        <!-- ============================================================== -->
                    
                       
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="section-block" id="cards">
                                    <h3 class="section-title">Reports</h3>
                                    <p>Some of the report that can be generated with the datas from Events,Blogs,Hotels,Restaurants and Promocode.</p>
                                </div>
                            </div>
                            
                            
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h3 class="card-title">Report 1</h3>
                                        <p class="card-text">List of Events and List of People Interested in a Particular Event
</p>
                                        <a href="report1.php" class="btn btn-primary">Generate</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h3 class="card-title">Report 2</h3>
                                        <p class="card-text">List of Restaurants and Booking lists in a particular restaurant with a From and To Filters.</p>
                                        <a href="report2.php" class="btn btn-primary">Generate</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h3 class="card-title">Report 3</h3>
                                        <p class="card-text">List of Hotel with its Avg review and list of reviews of particular Hotel
.</p>
                                        <a href="report3.php" class="btn btn-primary">Generate</a>
                                    </div>
                                </div>
                            </div>
                             <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h3 class="card-title">Report 4</h3>
                                        <p class="card-text">List of Blogs with sort Option and list of comments on a particular blog
.</p>
                                        <a href="report4.php" class="btn btn-primary">Generate</a>
                                    </div>
                                </div>
                            </div>
                             <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h3 class="card-title">Report 5</h3>
                                        <p class="card-text">List of PromoCode with Sort by Expirydate and Offer</p>
                                        <a href="report5.php" class="btn btn-primary">Generate</a>
                                    </div>
                                </div>
                            </div>
                            
                            
                            
                            
                        </div>
                     
          
                </div>
            </div>
            </div>
           
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src='assets/libs/js/main-js.js'></script>
   
</body>
 
</html>