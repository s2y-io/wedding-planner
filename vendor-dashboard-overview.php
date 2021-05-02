<!DOCTYPE html>
<html lang="en">
<?php
session_start();
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Silver Star</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <!-- FontAwesome icon -->
    <link href="fontawesome/css/fontawesome-all.css" rel="stylesheet">
    <!-- Fontello icon -->
    <link href="fontello/css/fontello.css" rel="stylesheet">
    <!-- Favicon icon -->
   <link rel="shortcut icon" type="image/X-UA-Compatible" href="images/logo1.png">
    <!-- Style CSS -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/offcanvas.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="body-bg">
    <div class="dashboard-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-10 col-lg-10 col-md-8 col-sm-12 col-6">
                    <div class="header-logo">
                        <a href="index.php"><img src="images/logo1.png" alt="Weddings | Find A Wedding Venue &amp; Supplier WordPress Theme"></a>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 text-right col-md-4 col-sm-12 col-6">
                    <div class="user-vendor">
                        <div class="dropdown">
                            <a class="dropdown-toggle" id="dropdownMenuButton" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           <span class="user-icon">  <img src="" alt="" class="rounded-circle mb10"></span><span class="user-vendor-name"><?php echo $_SESSION["busname"]?></span> 
                        </a>
                            <div class=" dashboard-dropdown-menu dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="vendor-dashboard-overview.php">Dashboard</a>
                                <a class="dropdown-item" href="vendor-dashboard-listing.php"> My Listed Item </a>
                                <!--<a class="dropdown-item" href="vendor-dashboard-pricing.html">Pricing Plan</a>-->
                                <a class="dropdown-item" href="vendor-dashboard-request-quote.php">Request Quotes</a>
                                <a class="dropdown-item" href="vendor-dashboard-reviews.php">Reviews </a>
                                <a class="dropdown-item" href="index.php">Log Out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="navbar-expand-lg">
        <button class="navbar-toggler" type="button" data-toggle="offcanvas">
            <span id="icon-toggle" class="fa fa-bars"></span>
        </button>
    </div>
    <div class="dashboard-wrapper">
        <div class="dashboard-sidebar offcanvas-collapse">
            <div class="vendor-user-profile" style="margin-top:10px;">
                <div class="vendor-profile-img">
                    <img src="./images/user-icon2.jpeg" alt="" class="rounded-circle"></div>
                <h2 class="vendor-profile-name" style="margin-top:20px;"><?php echo $_SESSION["busname"]?></h2>
            </div>
            <div class="dashboard-nav">
                <ul class="list-unstyled">
                    <li class="active"><a href="vendor-dashboard-overview.php"><span class="dash-nav-icon"><i class="fas fa-compass"></i></span>Dashboard</a></li>
                    <li><a href="vendor-dashboard-listing.php"><span class="dash-nav-icon"><i class="fas fa-list-alt"></i> </span> My Listed Item </a>
                        <li><a href="vendor-dashboard-add-images.php"><span class="dash-nav-icon"><i class="fas fa-list-alt"></i> </span>Add Images</a>
                        <!--<li><a href="vendor-dashboard-pricing.html"><span class="dash-nav-icon"><i class="fas fa-calculator"></i></span>Pricing Plan</a></li>-->
                        <li><a href="vendor-dashboard-request-quote.php"><span class="dash-nav-icon"><i class="fas fa-edit"></i></span>Request Quotes</a></li>
                        <!-- <li><a href="vendor-dashboard-reviews.php"><span class="dash-nav-icon"><i class="fas fa-comments"></i></span>Reviews </a></li> -->
                        
                        <li><a href="controller/logout.php"><span class="dash-nav-icon"><i class="fas fa-sign-out-alt"></i></span>Logout </a></li>
                </ul>
            </div>
        </div>
        <div class="dashboard-content">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-10 col-md-9 col-sm-12 col-12">
                        <div class="dashboard-page-header">

                            <h3 class="dashboard-page-title">Hi, <?php echo $_SESSION["busname"]?></h3>
                            <p class="d-block">Here’s what’s happening with your wedding venue business today.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                        <div class="card card-summary">
                        <div class="card-body">
                                <div class="float-left">
                                <?php
                                include "connection/DB.php";
                                $resultsetGetlist = mysqli_query($connection, "SELECT COUNT(idnewlisting) FROM newlisting WHERE venid='".$_SESSION["vendorID"]."' AND delflag='0'");
                                while ($row = mysqli_fetch_row($resultsetGetlist)) {
                                    ?>
                                    <div class="summary-count"><?php echo $row[0] ?></div>
                                <p>Listed Services</p>

                                    <?php }?>

                            </div>
                                  <div class="summary-icon"><i class="icon-051-wedding-arch"></i></div>

                            </div>
                              <!-- <div class="card-footer text-center"><a href="#">View All</a></div> -->
                           
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                        <div class="card card-summary">
                        <div class="card-body">
                                <div class="float-left">
                                <?php
                                include "connection/DB.php";
                                $resultsetGetlist = mysqli_query($connection, "SELECT COUNT(idmakereq) FROM makereq WHERE venid='".$_SESSION["vendorID"]."' AND del_flag='0'");
                                while ($row = mysqli_fetch_row($resultsetGetlist)) {
                                    ?>
                                    <div class="summary-count"><?php echo $row[0] ?></div>
                                <p>Requested Quotes</p>

                                    <?php }?>

                            </div>
                                  <div class="summary-icon"><i class="icon-021-love-1"></i></div>
                            </div>
                            <!-- <div class="card-footer text-center"><a href="#">View All</a></div> -->
                        </div>
                    </div>
                    <!-- <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                        <div class="card card-summary">
                            <div class="card-body">
                                <div class="float-left">
                                <div class="summary-count">1</div>
                                <p>Your Reviews</p>

                            </div>
                              <div class="summary-icon"><i class="icon-004-chat"></i></div>
                            </div>
                            <div class="card-footer text-center"><a href="#">View All</a></div>
                        </div>
                    </div> -->
                </div>
                <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card card-summary">
                        <img src="./images/wedding-planning-services.jpeg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/menumaker.min.js"></script>
    <script src="js/custom-script.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/offcanvas.js"></script>
    
</body>

</html>