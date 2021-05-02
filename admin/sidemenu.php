<?php
//session_start();
?>
 <div class="dashboard-sidebar offcanvas-collapse">
            <div class="vendor-user-profile">
                <div class="vendor-profile-img">
                    <img src="../images/user-icon3.jpeg" alt="" class="rounded-circle"></div>
                <h3 class="vendor-profile-name" style="padding-top:15px;"><?php echo $_SESSION["userfname"]?></h3>
                
            </div>
            <div class="dashboard-nav">
                <ul class="list-unstyled">
                    <li><a href="admin-dashboard-overview.php"><span class="dash-nav-icon"><i class="fas fa-compass"></i></span>Dashboard</a></li>
                        <li><a href="admin-dashboard-request-quote.php"><span class="dash-nav-icon"><i class="fas fa-edit"></i></span>Request Vendors</a></li>
						<li><a href="admin-dashboard-approved-quote.php"><span class="dash-nav-icon"><i class="fas fa-folder-open"></i></span>Approved Vendors</a></li>
						<li><a href="admin-dashboard-toprate-quote.php"><span class="dash-nav-icon"><i class="fas fa-arrow-up"></i></span>Make Top Rate</a></li>
						<li><a href="admin-dashboard-add-catogery.php"><span class="dash-nav-icon"><i class="fas fa-band-aid"></i></span>Add Category</a></li>
						<li><a href="admin-dashboard-add-exhibition.php"><span class="dash-nav-icon"><i class="fas fa-address-card"></i></span>Add Exhibitions & Events</a></li>
						<li><a href="admin-dashboard-add-offers.php"><span class="dash-nav-icon"><i class="fas fa-adjust"></i></span>Add Offers</a></li>
						<li><a href="admin-dashboard-add-magazine.php"><span class="dash-nav-icon"><i class="fas fa-adjust"></i></span>Add Magazine</a></li>
                        <li><a href="admin-dashboard-add-proposal.php"><span class="dash-nav-icon"><i class="fas fa-adjust"></i></span>Add Proposals</a></li>
                        <li><a href="../controller/logout.php"><span class="dash-nav-icon"><i class="fas fa-sign-out-alt"></i></span>Logout </a></li>
                </ul>
            </div>
        </div>