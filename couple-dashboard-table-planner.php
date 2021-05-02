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
    <link href="css/magicsuggest.css" rel="stylesheet">
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
                            <h3 class="dashboard-page-title">Table Seating Planner</h3>
                            <p>Manage your table seatings.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="offset-xl-8 col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 text-right mb20">
                        <div id='slide-panel' class="slide-panel-light">
                            <h3>Create Table</h3>
                            <form action="controller/addnewguesttable.php" method="POST">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-6 col-6 ">
                                        <div class="form-group">
                                            <label class="control-label" for="tablename">Table Number </label>
                                            <input id="tablename" name="tablename" type="number" placeholder="Table number here" class="form-control " required="">
                                            <input type="hidden" name="cpleID" value=<?php echo $_SESSION["coupleID"]?> />
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <!-- select -->
                                        <select class="form-control mb20" name="gustname">
                                            <option value="0" data-display="Select Guest">Select Guest</option>
                                             <?php
                                                    include "connection/DB.php";
                                                    $resultsetGetProvince = mysqli_query($connection, "SELECT * FROM newguest WHERE declinedflag='0'");
                                                    while ($row = mysqli_fetch_row($resultsetGetProvince)) {
                                                        
                                                  
                                                 echo '<option value="'.$row[0].'">'.$row[1].'</option>';
                                                    }?>
                                        </select>
                                    </div>
                                    
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-default">Add To Table </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <a href="#" class="btn btn-default" id='trigger'>Add new table</a>
                    </div>
                </div> 
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                       
                        <div class="card seating-table-list table-responsive">
                           
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th  class="seating-table-name">Guest Name</th>
                                        <th colspan="2" class="seating-table-name">Table Number</th>
                                    </tr>
                                </thead>
                                <tbody>
                                     <?php
                                                    include "connection/DB.php";
                                                    $resultsetGetGuest = mysqli_query($connection, "SELECT * FROM guesttable gt INNER JOIN newguest ng WHERE gt.guestname = ng.idnewguest AND gt.delflag='0' AND ng.declinedflag='1'  AND gt.cplid='".$_SESSION["coupleID"]."' AND ng.cuplid='".$_SESSION["coupleID"]."' ORDER BY tableno");
                                                    while ($row = mysqli_fetch_row($resultsetGetGuest)) { ?>
                                    <tr>
                                        <td class="seating-guest-name"><?php echo $row[6]?></td>
                                        <td class="seating-guest-name"><?php echo $row[2]?></td>
                                        <td class="seating-table-action"><a href=controller/deletetableguest.php?id=<?php echo $row[0];?>&gid=<?php echo $row[5];?> class="btn btn-outline-pink btn-xs">Delete</a></td>
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
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js "></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/menumaker.min.js "></script>
    <script src="js/custom-script.js"></script>
    <script src="js/bootstrap.bundle.min.js "></script>
    <script src="js/magicsuggest.js"></script>
    <script>
    $(function() {
        var ms1 = $('#ms1').magicSuggest({
            data: ['Kristi R. Grace',
                'Eugene H. Rivera',
                'Michael S. Foster',
                'Roxann K. Ellis',
                'Shelley D. Mace',
                 'Henry R. Moore',
                'William M. Zuniga',
                'Cindy A. Davis'
            ]
        });
    });
    </script>
    <script src="js/offcanvas.js"></script>    
    <script src="js/jquery.slidereveal.js"></script>
    
</body>

</html>