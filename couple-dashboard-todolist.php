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
                            <h3 class="dashboard-page-title">My To Do List</h3>
                            <p>List down the to do list here.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="offset-xl-8 col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 text-right mb20">
                        <div id='slide-panel' class="slide-panel-light">
                            <h3>Create Task</h3>
                            <form action="controller/todolistreg.php" method="post">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-6 col-6 ">
                                        <div class="form-group">
                                            <label class="control-label" for="tasktitle">Task Title</label>
                                            <input id="tasktitle" name="tasktitle" type="text" placeholder="Write task here" class="form-control " required="">
                                            <input type="hidden" name="cpleID" value=<?php echo $_SESSION["coupleID"]?> />
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="taskdate">Task Date</label>
                                            <input id="taskdate" name="taskdate" type="text" placeholder="Task Date" class="form-control " required="">
                                            <div class="venue-form-calendar"><i class="far fa-calendar-alt"></i></div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-default">Submit to do </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <a href="#" class="btn btn-default" id='trigger'>Add New Task</a>
                    </div>
                </div>
                <!-- accordions -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div id="accordion" class="todo">
                            <!-- accordion-card -->
                           <?php
                                        include "connection/DB.php";
                                        $resultsetGetlist = mysqli_query($connection, "SELECT * FROM cpltodolist WHERE cpleID='".$_SESSION["coupleID"]."' AND comflag='0' ORDER BY dodate");
                                        while ($row = mysqli_fetch_row($resultsetGetlist)) {
                                    ?>
                            <div class="accordion-card card">
                                <!--<div class="accordion-card-header" id="headingOne">
                                    <h5 class="mb-0">
        <a role="button" href="#" class="accordion-card-title" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
     Janurary (9)<span class="fas fa-plus float-right"></span></a></h5>
                                </div>-->
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                    <div class="card-body">
                                        <div class="todo-list">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <div class="row">
                                                        <div class="col-xl-10 col-lg-10 col-md-8 col-sm-12 col-12">
                                                            <div class="todo-list-content">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                                    <label class="custom-control-label" for="customCheck1"><?php echo $row[1];?>
                                                                        <br><span class=" meta meta-date"><?php echo $row[2];?></span></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-2 col-lg-2 col-md-4 col-sm-12 col-12">
                                                            <div class="todo-list-btn">
                                                                <a href=controller/completetodo.php?id=<?php echo $row[0];?> class="btn btn-outline-violate btn-xs">Complete</a> 
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php }?>
                           <!-- /.accordion-card -->
                        </div>
                    </div>
                </div>
                <!-- /.accordions -->

                <!--Completed TODOs-->
                <br>
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="dashboard-page-header">
                            <h3 class="dashboard-page-title">My Completed To Do List</h3>
                            <p>Here are your completed to do list.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div id="accordion" class="todo">
                            <!-- accordion-card -->
                           <?php
                                        include "connection/DB.php";
                                        $resultsetGetlist = mysqli_query($connection, "SELECT * FROM cpltodolist WHERE cpleID='".$_SESSION["coupleID"]."' AND comflag='1' ORDER BY dodate");
                                        while ($row = mysqli_fetch_row($resultsetGetlist)) {
                                    ?>
                            <div class="accordion-card card">
                                <!--<div class="accordion-card-header" id="headingOne">
                                    <h5 class="mb-0">
        <a role="button" href="#" class="accordion-card-title" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
     Janurary (9)<span class="fas fa-plus float-right"></span></a></h5>
                                </div>-->
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                    <div class="card-body">
                                        <div class="todo-list">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <div class="row">
                                                        <div class="col-xl-8 col-lg-8 col-md-6 col-sm-12 col-12">
                                                            <div class="todo-list-content">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                                    <label class="custom-control-label" for="customCheck1"><?php echo $row[1];?>
                                                                        <br><span class=" meta meta-date"><?php echo $row[2];?></span></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                                            <div class="todo-list-btn">
                                                                 <a href=controller/deletetodo.php?id=<?php echo $row[0];?> class="btn btn-outline-pink btn-xs">Delete</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php }?>
                           <!-- /.accordion-card -->
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
    <script src="js/jquery-ui.js"></script>
    <script src="js/offcanvas.js"></script>    
    <script src="js/jquery.slidereveal.js"></script>
   
</body>

</html>