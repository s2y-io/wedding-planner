
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
    <link href="../css/bootstrap.min.css" rel="stylesheet">
   
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <!-- FontAwesome icon -->
    <link href="../fontawesome/css/fontawesome-all.css" rel="stylesheet">
    <!-- Fontello icon -->
    <link href="../fontello/css/fontello.css" rel="stylesheet">
      <!-- Favicon icon -->
    <link rel="shortcut icon" type="image/X-UA-Compatible" href="../images/logo.png">
    <!-- Style CSS -->
    <link href="../css/style.css" rel="stylesheet">
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
                        <a href="../index.php"><img src="../images/logo1.png" alt="Wedding Vendor & Supplier Directory"></a>
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
                                        <h3 class="mb-2">User Register</h3>
                                        <p>Register users to manage.</p>
                                    </div>
                                    <!-- /.vendor title -->
                                    <form action="../admin/controller/usereg.php" method="post">
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <!-- select -->
                                                <div class="form-group">
                                                    <select class="wide mb10" name="userType">
                                                        <option value="0">User Type</option>
                                                        <option value="Admin">Admin</option>
                                                        <option value="User">User</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                               <!-- Text input-->
                                                <div class="form-group">
                                                    <label class="control-label sr-only" for="fullname"></label>
                                                    <input id="fullname" type="text" name="fullname" placeholder="Full Name" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <!-- Text input-->
                                                <div class="form-group">
                                                    <label class="control-label sr-only" for="address"></label>
                                                    <input id="address" type="text" name="address" placeholder="Address" class="form-control" required>
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
                                              <!-- Text input-->
                                                <div class="form-group service-form-group">
                                                    <label class="control-label sr-only" for="mobile"></label>
                                                    <input id="mobile" type="number" name="mobile" placeholder="Mobile" class="form-control" required>
                                                </div>
                                            </div>
                                            <!-- buttons -->
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <button type="submit" name="singlebutton" class="btn btn-default">Sign up</button>
                                            </div>
                                        </div>
                                    </form>
                                    <p class="mt-2"> Forget Password? <a href="vendor-form.php#tab2"> Click Here</a></p>
                                </div>
                            </div>
                            <!-- vendor-login -->
                            <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab-2">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                    <div class="vendor-form-title">
                                        <!--vendor-title -->
                                        <h3 class="mb-2">Welcome Back Admin/User</h3>
                                        <p>Login to the admin panel to manage the site.</p>
                                    </div>
                                    <!--/.vendor-title -->
                                    <form action="../admin/controller/userlogin.php" method="post">
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                              <!-- Text input-->
                                                <div class="form-group">
                                                    <label class="control-label sr-only" for="username2"></label>
                                                    <input id="username2" type="text" name="username2" placeholder="Email" class="form-control" required>
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
    <script src="../js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.nice-select.min.js"></script>
    <script src="../js/fastclick.js"></script>
   <script src="../js/custom-script.js"></script>
   
 
</body>

</html>