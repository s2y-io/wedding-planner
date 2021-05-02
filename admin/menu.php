<?php
//session_start();
?>
<div class="container-fluid">
            <div class="row">
                <div class="col-xl-10 col-lg-10 col-md-8 col-sm-12 col-6">
                    <div class="header-logo">
                        <a href="index.php"><img src="../images/logo1.png" style="width: 10%;height: 10%;" alt="Silver Star"></a>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 text-right col-md-4 col-sm-12 col-6">
                    <div class="user-vendor">
                        <div class="dropdown">
                            <a class="dropdown-toggle" id="dropdownMenuButton" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           <span class="user-icon">  <img src="" alt="" class="rounded-circle mb10"></span><span class="user-vendor-name"><?php echo $_SESSION["userfname"]?></span> 
                        </a>
                            <div class=" dashboard-dropdown-menu dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="admin-dashboard-overview.php">Dashboard</a>
                                <a class="dropdown-item" href="admin-dashboard-listing.php"> My Listed Item </a>
                                <a class="dropdown-item" href="vendor-dashboard-pricing.html">Pricing Plan</a>
                                <a class="dropdown-item" href="admin-dashboard-request-quote.php">Request Quotes</a>
                                <a class="dropdown-item" href="admin-dashboard-reviews.php">Reviews </a>
                                <a class="dropdown-item" href="admin-dashboard-profile.php">My Profile </a>
                                <a class="dropdown-item" href="index.php">Log Out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>