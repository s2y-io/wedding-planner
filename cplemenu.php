<?php
//session_start();
?>
<div class="container-fluid">
            <div class="row">
                <div class="col-xl-10 col-lg-10 col-md-8 col-sm-6 col-6">
                    <div class="header-logo">
                        <a href="index.php"><img src="images/logo1.png" style="width: 10%;height: 10%;" alt="Silver Star"></a>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 text-right col-md-4 col-sm-6 col-6">
                    <div class="user-vendor">
                        <div class="dropdown">
                            <a class=" dropdown-toggle" id="dropdownMenuButton" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <span class="user-icon">  <img src="./images/dashboard-profile-couple.jpg" alt="" class="rounded-circle mb10"></span><span class="user-vendor-name"><?php //echo $_SESSION["cplename"]?></span> 
                        </a>
                            <div class=" dashboard-dropdown-menu dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="couple-dashboard-overview.php">Dashboard</a>
                                <a class="dropdown-item" href="couple-dashboard-mywishlist.php">My Wishlist </a>
                                <a class="dropdown-item" href="couple-dashboard-todolist.php">To Do List</a>
                                <!--<a class="dropdown-item" href="couple-dashboard-budget.php">Budget</a>-->
                                <a class="dropdown-item" href="couple-dashboard-guest-manager.php">Guestlist </a>
                                <a class="dropdown-item" href="couple-dashboard-table-planner.php">Seating Table </a>
                                <!--<a class="dropdown-item" href="couple-dashboard-profile.php">My Profile </a>-->
                                <a class="dropdown-item" href="index.php">Log Out </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>