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
     <link rel="shortcut icon" type="image/x-icon" href="images/logo1.png">
    <!-- Style CSS -->
    <link href="css/style.css" rel="stylesheet">
     <link rel="stylesheet" type="text/css" href="css/offcanvas.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="body-bg">
    <div class="dashboard-header">
        <?php include "cplemenu.php"?>
    </div>
    <div class="navbar-expand-lg">
        <button class="navbar-toggler" type="button" data-toggle="offcanvas">
            <span id="icon-toggle" class="fa fa-bars"></span>
        </button>
    </div>
    <div class="dashboard-wrapper">
        <?php include "cplesidemenu.php"?>
        <div class="dashboard-content">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="dashboard-page-header">
                            <h3 class="dashboard-page-title ">Couple Dashboard</h3>
                            <p>Make your dream day fruitfull</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="card summary-block summary-vendor-wishlist">
                            <div class=" card-body summary-content">
                                <h3 class="summary-title ">Vendors Wishlist</h3>
                                <div class="summary-count">10</div>
                                <p class="summary-text">Compare & Finalize</p>
                            </div>
                            <div class="card-footer text-center"><a href="#">View All</a></div>
                        </div>
                    </div> -->
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="card summary-block summary-table-seating">
                            <div class="card-body summary-content">
                            <?php
                                        include "connection/DB.php";
                                        $resultsetGetlist = mysqli_query($connection, "SELECT COUNT(idguesttable) FROM guesttable WHERE cplid='".$_SESSION["coupleID"]."' AND delflag='0'");
                                        while ($row = mysqli_fetch_row($resultsetGetlist)) {
                                            $tblcount = $row[0];
                                    ?>
                                    
                                    <h3 class="summary-title ">Table Seating</h3>
                                    <div class="summary-count"><?php echo $row[0]?></div>
                                   
                                    <?php }?>

                                    <?php
                                        include "connection/DB.php";
                                        $resultsetGetGuestlist = mysqli_query($connection, "SELECT COUNT(idnewguest) FROM newguest WHERE cuplid='".$_SESSION["coupleID"]."' AND delflag='0'");
                                        while ($row = mysqli_fetch_row($resultsetGetGuestlist)) {
                                            $guestCount =$row[0];
                                    ?>
                                    
                                    <p class="summary-text"><?php echo $guestCount-$tblcount?> Seat remain</p>
                                   
                                    <?php }?>
                                    
                            </div>
                            <!-- <div class="card-footer text-center"><a href="#">View All</a></div> -->
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="card summary-block summary-guest-list">
                            <div class="card-body summary-content">
                            <?php
                                        include "connection/DB.php";
                                        $resultsetGetGuestlist = mysqli_query($connection, "SELECT COUNT(idnewguest) FROM newguest WHERE cuplid='".$_SESSION["coupleID"]."' AND delflag='0'");
                                        while ($row = mysqli_fetch_row($resultsetGetGuestlist)) {
                                            $guestCount =$row[0];
                                    ?>

                                   
                                   
                                <h3 class="summary-title ">Guest List</h3>
                                <div class="summary-count"><?php echo $row[0]?></div><?php }?>

                                <?php
                                        include "connection/DB.php";
                                        $resultsetGetacceptlist = mysqli_query($connection, "SELECT COUNT(idnewguest) FROM newguest WHERE cuplid='".$_SESSION["coupleID"]."' AND delflag='0' AND acceptflag='1'");
                                        while ($row = mysqli_fetch_row($resultsetGetacceptlist)) {
                                    ?>
                                <p class="summary-text"><?php echo "$row[0]"?> Accepted <?php }?>
                                    
                                <?php
                                        include "connection/DB.php";
                                        $resultsetGetacceptlist = mysqli_query($connection, "SELECT COUNT(idnewguest) FROM newguest WHERE cuplid='".$_SESSION["coupleID"]."' AND delflag='0' AND inviteflag='1'");
                                        while ($row = mysqli_fetch_row($resultsetGetacceptlist)) {
                                    ?>
                                     <span class="ml5"><?php echo "$row[0]"?> Invited</span></p><?php }?>
                               
                            </div> 
                            <!-- <div class="card-footer text-center"><a href="#">View All</a></div> -->
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="card summary-block summary-todo">
                            <div class="card-body summary-content">
                            <?php
                                        include "connection/DB.php";
                                        $resultsetGettodolist = mysqli_query($connection, "SELECT COUNT(idcpltodolist) FROM cpltodolist WHERE cpleID='".$_SESSION["coupleID"]."'");
                                        while ($row = mysqli_fetch_row($resultsetGettodolist)) {
                                    ?>

                                   
                                   
                                <h3 class="summary-title ">Total To Do</h3>
                                <div class="summary-count"><?php echo $row[0]?></div><?php }?>
                                
                                <?php
                                        include "connection/DB.php";
                                        $resultsetGetacceptcomlist = mysqli_query($connection, "SELECT COUNT(idcpltodolist) FROM cpltodolist WHERE cpleID='".$_SESSION["coupleID"]."' AND comflag='1'");
                                        while ($row = mysqli_fetch_row($resultsetGetacceptcomlist)) {
                                    ?>
                                <p class="summary-text"><?php echo "$row[0]"?> Complete <?php }?>
                                    
                                <?php
                                        include "connection/DB.php";
                                        $resultsetGetaccepdeitlist = mysqli_query($connection, "SELECT COUNT(idcpltodolist) FROM cpltodolist WHERE cpleID='".$_SESSION["coupleID"]."' AND comflag='0'");
                                        while ($row = mysqli_fetch_row($resultsetGetaccepdeitlist)) {
                                    ?>
                                     <span class="ml5"><?php echo "$row[0]"?> remain</span></p><?php }?>
                            
                            </div>
                            <!-- <div class="card-footer text-center"><a href="#">View All</a></div> -->
                        </div>
                    </div>
                </div>

                <div class="row"><div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                
                        <div class="card card-summary">
                        <img src="./images/cpldash.jpg" alt="">
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