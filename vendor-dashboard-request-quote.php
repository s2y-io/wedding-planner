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
                           <span class="user-icon">  <img src="./images/dashboard-profile.jpg" alt="" class="rounded-circle mb10"></span><span class="user-vendor-name"><?php echo $_SESSION["busname"]?></span> 
                        </a>
                            <div class=" dashboard-dropdown-menu dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="vendor-dashboard-overview.php">Dashboard</a>
                                <a class="dropdown-item" href="vendor-dashboard-listing.php"> My Listed Item </a>

                                <!--<a class="dropdown-item" href="vendor-dashboard-pricing.php">Pricing Plan</a>-->
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
            <div class="vendor-user-profile">
                <div class="vendor-profile-img">
                    <img src="" alt="" class="rounded-circle"></div>
                <h3 class="vendor-profile-name"><?php echo $_SESSION["busname"]?></h3>
                <!-- <a href="#" class="edit-link">edit profile</a> -->
            </div>
            <div class="dashboard-nav">
                <ul class="list-unstyled">
                    <li><a href="vendor-dashboard-overview.php"><span class="dash-nav-icon"><i class="fas fa-compass"></i></span>Dashboard</a></li>
                    <li><a href="vendor-dashboard-listing.php"><span class="dash-nav-icon"><i class="fas fa-list-alt"></i> </span> My Listed Item </a></li>
                    <li><a href="vendor-dashboard-add-images.php"><span class="dash-nav-icon"><i class="fas fa-list-alt"></i> </span>Add Images</a>
                    <!--<li><a href="vendor-dashboard-pricing.html"><span class="dash-nav-icon"><i class="fas fa-calculator"></i></span>Pricing Plan</a></li>-->
                    <li class="active"><a href="vendor-dashboard-request-quote.php"><span class="dash-nav-icon"><i class="fas fa-edit"></i></span>Request Quotes</a></li>
                    <!-- <li><a href="vendor-dashboard-reviews.php"><span class="dash-nav-icon"><i class="fas fa-comments"></i></span>Reviews </a></li> -->
                   
                    <li><a href="../silverstar/controller/logout.php"><span class="dash-nav-icon"><i class="fas fa-sign-out-alt"></i></span>Logout </a></li>
                </ul>
            </div>
        </div>
        <div class="dashboard-content">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="dashboard-page-header">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <h3 class="dashboard-page-title">Request List</h3>
                                    <p>Check your request quote.</p>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="dashboard-filter-row mb20">
                            <div class="row">
                                <div class="col-xl-3">
                                    <select class="form-control wide" id="exampleFormControlSelect1">
                                        <option>Select Your Listing</option>
                                        <option>Select Your Listing #1</option>
                                        <option>Select Your Listing #2</option>
                                        <option>Select Your Listing #3</option>
                                        <option>Select Your Listing #4</option>
                                    </select>
                                </div>
                            </div>
                        </div> -->

                        <div class="card request-list-table table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Wedding Date</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Comments</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                        include "../silverstar/admin/connection/DB.php";

                                        $resultsetGetList = mysqli_query($connection, "SELECT * FROM makereq WHERE del_flag='0'");
                                        while ($row = mysqli_fetch_row($resultsetGetList)) {
                                    ?>
                                    <tr>
                                        <td class="requester-name"><?php echo $row[1];?></td>
                                        <td class="wedding-date"><?php echo $row[4];?></td>
                                        <td class="requester-id"><?php echo $row[2];?></td>
                                        <td class="requester-phone"><?php echo $row[3];?></td>
                                        <td class="requester-phone"><?php echo $row[5];?></td>
                                    </tr> <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js "></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/menumaker.min.js "></script>
    <script src="js/custom-script.js "></script>
     <!-- nice-select js -->
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/fastclick.js"></script>
    <script src="js/bootstrap.bundle.min.js "></script>
    <script src="js/offcanvas.js"></script>
    
</body>

</html>