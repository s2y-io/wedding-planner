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
      <!-- Favicon icon -->
    <link rel="shortcut icon" type="image/X-UA-Compatible" href="images/logo.png">
    <!-- Style CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<!-- vendor-form -->

<body class="vendor-bg-image">
    <!-- sign up -->
    <div class="vendor-form">
        <div class="container">
            <div class="row ">
                <div class="offset-xl-3 col-xl-6 offset-lg-3 col-lg-6 col-md-12 col-sm-12 col-12  ">
                    <!-- vendor head -->
                    <div class="vendor-head">
                        <a href="index.php"><img src="images/logo1.png" alt="Wedding Vendor & Supplier Directory HTML Template "></a>
                    </div>
                    <!-- /.vendor head -->
                    <div class="st-tab">
                        <ul class="nav nav-tabs nav-justified" id="Mytabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="tab-1" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab-1" aria-selected="true">Register</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tab-2" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab-2" aria-selected="false">Login</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab-1">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                    <!-- vendor title -->
                                    <div class="vendor-form-title">
                                        <h3 class="mb-2">Business Register</h3>
                                        <p>Join Weddings to get your business listed or to claim your listing.</p>
                                    </div>
                                    <!-- /.vendor title -->
                                    <form action="controller/vendereg.php" method="post">
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                               <!-- Text input-->
                                                <div class="form-group">
                                                    <label class="control-label sr-only" for="bussinessname"></label>
                                                    <input id="bussinessname" type="text" name="bussinessname" placeholder="Bussiness Name" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <!-- Text input-->
                                                <div class="form-group">
                                                    <label class="control-label sr-only" for="username"></label>
                                                    <input id="username" type="text" name="username" placeholder="User Name" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                               <!-- Text input-->
                                                <div class="form-group service-form-group">
                                                    <label class="control-label sr-only" for="email"></label>
                                                    <input id="email" name="email" type="email" placeholder="Email" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                              <!-- Text input-->
                                                <div class="form-group service-form-group">
                                                    <label class="control-label sr-only" for="passwordregister"></label>
                                                    <input id="passwordregister" type="password" name="passwordregister" placeholder="Password" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <!-- select -->
                                                <div class="form-group">
                                                    <select class="wide mb10" name="vendorcat">
                                                        <option value="0">Vendor Category</option>
                                                        <option value="Venue">Venue</option>
                                                        <option value="Photographer">Photographer</option>
                                                        <option value="Florist">Florist</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <!-- select -->
                                                <div class="form-group">
                                                    <select class="wide mb10" name="magazine">
                                                        <option value="0">Magazine Mood</option>
                                                        <option value="1">Off</option>
                                                        <option value="2">On</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <!-- select -->                                                
                                                <div class="form-group">
                                                    <select class="wide mb10" name="province" id="province">
                                                         <option value="0">Select Province</option>
                                                        <?php
                                                    include "connection/DB.php";
                                                    $resultsetGetProvince = mysqli_query($connection, "SELECT * FROM province");
                                                    while ($row = mysqli_fetch_row($resultsetGetProvince)) {
                                                        ?>
                                                       
                                                        <option value=<?php echo $row[1];?>><?php echo $row[1];?></option>
                                                        <?php } 
                                                        ?>
                                                    </select>
                                                </div>                                            
                                            </div>

                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <!-- select -->
                                                <div class="form-group">
                                                    <?php
                                                    include "connection/DB.php";
                                                    $sql = "SELECT * FROM district";
                                                        $result4 = mysqli_query($connection, $sql);

                                                      ?>
                                                    <select class="wide mb10" name="district" id="district">
                                                        <option value="0">Select District</option>
                                                        <?php
                                                        while($row = mysqli_fetch_row($result4)) {
                                                             echo '<option value='.$row[1].'>'.$row[1].'</option>';
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- buttons -->
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <button type="submit" name="singlebutton" class="btn btn-default">Sign up</button>
                                            </div>
                                        </div>
                                    </form>
                                    <p class="mt-2"> Have you subscribed? <a href="vendor-form.php#tab2"> Login</a></p>
                                </div>
                            </div>
                            <!-- vendor-login -->
                            <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab-2">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                    <div class="vendor-form-title">
                                        <!--vendor-title -->
                                        <h3 class="mb-2">Welcome Back Vendor</h3>
                                        <p>Join Weddings to get your business listed or to claim your listing.</p>
                                    </div>
                                    <!--/.vendor-title -->
                                    <form action="controller/venlogin.php" method="post">
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                              <!-- Text input-->
                                                <div class="form-group">
                                                    <label class="control-label sr-only" for="username2"></label>
                                                    <input id="username2" type="text" name="username2" placeholder="User Name" class="form-control" required>
                                                </div>
                                            </div>
                                           <!-- Text input-->
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <div class="form-group service-form-group">
                                                    <label class="control-label sr-only" for="passwordlogin"></label>
                                                    <input id="passwordlogin" type="password" name="passwordlogin" placeholder="Password" class="form-control" required>
                                                </div>
                                            </div>
                                            <!--buttons -->
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <button type="submit" name="singlebutton" class="btn btn-default">Login</button>
                                            </div>
                                        </div>
                                    </form>
                                    <!--<p class="mt-2"> Are you new couple? Create a New Account.<a href="#" class="wizard-form-small-text"> Click here</a></p>-->
                                </div>
                            </div>
                            <!-- /.vendor-login -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.vendor-form -->
  
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/fastclick.js"></script>
   <script src="js/custom-script.js"></script>
   
 
</body>

</html>