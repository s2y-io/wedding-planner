<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

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
    <!--jquery-ui  -->
    <link href="css/jquery-ui.css" rel="stylesheet">
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
        <?php include "../silverstar/cplemenu.php"?>
    </div>
    <div class="navbar-expand-lg">
        <button class="navbar-toggler" type="button" data-toggle="offcanvas">
            <span id="icon-toggle" class="fa fa-bars"></span>
        </button>
    </div>
    <div class="dashboard-wrapper">
         <?php include "../silverstar/cplesidemenu.php"?>
        <div class="dashboard-content">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="dashboard-page-header">
                            <h3 class="dashboard-page-title">My Guest Manager</h3>
                            <p>Add new guest and manage your guest list.</p>
                        </div>
                    </div>
                </div>
                <div class="rsvp-summary-section">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="rsvp-summary-head">
                                <h4 class="rsvp-summary-head-title">RSVP Summary</h4>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 mb20">
                            <div class="card summary-block rsvp-summary bg-light-violate">
                                <div class="card-body summary-content">
                                     <?php
                                        include "../silverstar/connection/DB.php";
                                        $resultsetGetlist = mysqli_query($connection, "SELECT COUNT(idnewguest) FROM newguest WHERE cuplid='".$_SESSION["coupleID"]."' ");
                                        while ($row = mysqli_fetch_row($resultsetGetlist)) {
                                    ?>
                                    <div class="summary-count"><?php echo $row[0]?></div>
                                    <?php }?>
                                    <p class="summary-text">Guests</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 mb20">
                            <div class="card summary-block rsvp-summary bg-light-green">
                                <div class="card-body summary-content">
                                    <?php
                                        include "../silverstar/connection/DB.php";
                                        $resultsetGetlist = mysqli_query($connection, "SELECT COUNT(idnewguest) FROM newguest WHERE cuplid='".$_SESSION["coupleID"]."' AND inviteflag='1'");
                                        while ($row = mysqli_fetch_row($resultsetGetlist)) {
                                    ?>
                                    <div class="summary-count"><?php echo $row[0]?></div>
                                <?php }?>
                                    <p class="summary-text">Invited</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 mb20">
                            <div class="card summary-block rsvp-summary bg-light-yellow">
                                <div class="card-body summary-content">
                                    <?php
                                        include "../silverstar/connection/DB.php";
                                        $resultsetGetlist = mysqli_query($connection, "SELECT COUNT(idnewguest) FROM newguest WHERE cuplid='".$_SESSION["coupleID"]."' AND inviteflag='1' AND acceptflag='1'");
                                        while ($row = mysqli_fetch_row($resultsetGetlist)) {
                                    ?>
                                    <div class="summary-count"><?php echo $row[0]?></div>
                                    <?php }?>
                                    <p class="summary-text">Accepted</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <p><a href=../silverstar/controller/export_csv.php?id=<?php echo $row[0];?> class="download-list-link ml30 mr10" download>Download Guest List</a>
                        </div>
                    </div>
                </div>
                <div class="guest-list-block">
                    <div class="row">
                        <div class="col-xl-8 col-lg-8 col-md-7 col-sm-6 col-6">
                            <h4 class="guest-list-block-title">My Guest List</h4>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-5 col-sm-6 col-6 text-right">
                            <a href="couple-dashboard-add-new-guest.php" class="btn btn-default">Add new guest</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <div class="guest-list-table table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Guest Name</th>
                                            <th>Mobile</th>
                                             <th>Telephone</th>
                                            <th>Email</th>
                                            <th>Address</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                         <?php
                                        include "../silverstar/connection/DB.php";
                                        $resultsetGetlist = mysqli_query($connection, "SELECT * FROM newguest WHERE cuplid='".$_SESSION["coupleID"]."' AND inviteflag='0'");
                                        while ($row = mysqli_fetch_row($resultsetGetlist)) {
                                    ?>
                                        <tr>
                                            <td class="guest-name"><?php echo $row[1];?></td>
                                            <td class="guest-group"><?php echo $row[3];?></td>
                                            <td class="guest-rsvp"><?php echo $row[5];?></td>
                                            <td class="guest-email-id"><?php echo $row[2];?></td>
                                            <td class="guest-invite"><?php echo $row[4];?></td>
                                            <td class="guest-action"><a href=../silverstar/controller/guestinvite.php?id=<?php echo $row[0];?> class="btn btn-outline-violate btn-xs mr10">Invite</a></td>
                                        </tr>
                                    <?php }?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="guest-list-block">
                    <div class="row">
                        <div class="col-xl-8 col-lg-8 col-md-7 col-sm-6 col-6">
                            <h4 class="guest-list-block-title">My Invited Guest List</h4>
                        </div>
                    </div>
                </div>
                 <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <div class="guest-list-table table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Guest Name</th>
                                            <th>Mobile</th>
                                             <th>Telephone</th>
                                            <th>Email</th>
                                            <th>Address</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                         <?php
                                        include "../silverstar/connection/DB.php";
                                        $resultsetGetlist = mysqli_query($connection, "SELECT * FROM newguest WHERE cuplid='".$_SESSION["coupleID"]."' AND inviteflag='1' AND acceptflag='0'");
                                        while ($row = mysqli_fetch_row($resultsetGetlist)) {
                                    ?>
                                        <tr>
                                            <td class="guest-name"><?php echo $row[1];?></td>
                                            <td class="guest-group"><?php echo $row[3];?></td>
                                            <td class="guest-rsvp"><?php echo $row[5];?></td>
                                            <td class="guest-email-id"><?php echo $row[2];?></td>
                                            <td class="guest-invite"><?php echo $row[4];?></td>
                                            <td class="guest-action"><a href=../silverstar/controller/guestaccept.php?id=<?php echo $row[0];?> class="btn btn-outline-pink btn-xs">Accepted</a></td>
                                        </tr>
                                    <?php }?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="guest-list-block">
                    <div class="row">
                        <div class="col-xl-8 col-lg-8 col-md-7 col-sm-6 col-6">
                            <h4 class="guest-list-block-title">My Accepted Guest List</h4>
                        </div>
                    </div>
                </div>
                 <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <div class="guest-list-table table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Guest Name</th>
                                            <th>Mobile</th>
                                             <th>Telephone</th>
                                            <th>Email</th>
                                            <th>Address</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                         <?php
                                        include "../silverstar/connection/DB.php";
                                        $resultsetGetlist = mysqli_query($connection, "SELECT * FROM newguest WHERE cuplid='".$_SESSION["coupleID"]."' AND inviteflag='1' AND acceptflag='1'");
                                        while ($row = mysqli_fetch_row($resultsetGetlist)) {
                                    ?>
                                        <tr>
                                            <td class="guest-name"><?php echo $row[1];?></td>
                                            <td class="guest-group"><?php echo $row[3];?></td>
                                            <td class="guest-rsvp"><?php echo $row[5];?></td>
                                            <td class="guest-email-id"><?php echo $row[2];?></td>
                                            <td class="guest-invite"><?php echo $row[4];?></td>
                                        </tr>
                                    <?php }?>
                                    </tbody>
                                </table>
                            </div>
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
    <script src="js/bootstrap.bundle.min.js "></script>
    <script src="js/offcanvas.js"></script>
    
</body>

</html>