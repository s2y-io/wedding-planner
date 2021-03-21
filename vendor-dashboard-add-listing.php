
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
    <link href="css/summernote-bs4.css" rel="stylesheet">
   
    <link rel="shortcut icon" type="image/X-UA-Compatible" href="images/logo.png">
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
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-10 col-lg-10 col-md-8 col-sm-12 col-6">
                    <div class="header-logo">
                        <a href="index.php"><img src="images/logo1.png" style="width: 10%; height: 10%;" alt="Silver Star"></a>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 text-right col-md-4 col-sm-12 col-6">
                    <div class="user-vendor">
                        <div class="dropdown">
                            <a class="dropdown-toggle" id="dropdownMenuButton" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           <span class="user-icon">  <img src="./images/admin-pic.jpg" alt="" class="rounded-circle mb10"></span><span class="user-vendor-name"><?php echo $_SESSION["venUsername"]?></span>
                        </a>
                            <div class=" dashboard-dropdown-menu dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="vendor-dashboard-overview.php">Dashboard</a>
                                <a class="dropdown-item" href="vendor-dashboard-listing.php"> My Listed Item </a>
                                <!--<a class="dropdown-item" href="vendor-dashboard-pricing.html">Pricing Plan</a>-->
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
                    <img src="./images/admin-pic.jpg" alt="" class="rounded-circle"></div>
                <h3 class="vendor-profile-name"><?php echo $_SESSION["venUsername"]?></h3>
                <a href="#" class="edit-link">edit profile</a>
            </div>
            <div class="dashboard-nav">
                <ul class="list-unstyled">
                    <li><a href="vendor-dashboard-overview.php"><span class="dash-nav-icon"><i class="fas fa-compass"></i></span>Dashboard</a></li>
                    <li class="active"><a href="vendor-dashboard-listing.php"><span class="dash-nav-icon"><i class="fas fa-list-alt"></i> </span> My Listed Item </a></li>
                     <li><a href="vendor-dashboard-add-images.php"><span class="dash-nav-icon"><i class="fas fa-list-alt"></i> </span>Add Images</a>
                    <!--<li><a href="vendor-dashboard-pricing.html"><span class="dash-nav-icon"><i class="fas fa-calculator"></i></span>Pricing Plan</a></li>-->
                    <li><a href="vendor-dashboard-request-quote.php"><span class="dash-nav-icon"><i class="fas fa-edit"></i></span>Request Quotes</a></li>
                    <li><a href="vendor-dashboard-reviews.php"><span class="dash-nav-icon"><i class="fas fa-comments"></i></span>Reviews </a></li>
                    
                    <li><a href="../silverstar/controller/logout.php"><span class="dash-nav-icon"><i class="fas fa-sign-out-alt"></i></span>Logout </a></li>
                </ul>
            </div>
        </div>
        <div class="dashboard-content">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="dashboard-page-header">
                            <h3 class="dashboard-page-title">Add New Listing</h3>
                            <p>Add your services and make your business success with Silver Star</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <form action="../silverstar/controller/newlistupload.php" method="post" enctype="multipart/form-data">
                            <!-- Form Name -->
                            <div class="venue-form-info">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <h3>About Service</h3>
                                        <div class="border-bottom mb20">
                                        </div>
                                    </div>
                                    <!-- Text input-->
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="title1">Title</label>
                                            <input id="title1" name="title1" type="text" placeholder="Title" class="form-control ">
                                            <input type="hidden" name="venid1" value="<?php echo $_SESSION["vendorID"]?>">
                                        </div>
                                    </div>
                                    
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="tel1">Telephone</small></label>
                                            <input id="tel1" name="tel1" type="text" placeholder="Phone Number" class="form-control ">
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="mob">Mobile</small></label>
                                            <input id="mob" name="mob" type="text" placeholder="Mobile Number" class="form-control ">
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="address1">Address </label>
                                            <input id="address1" name="address1" type="text" placeholder="Street address" class="form-control ">
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="website">Web Site </label>
                                            <input id="website" name="website" type="text" placeholder="Web Site URL" class="form-control ">
                                        </div>
                                    </div>
                                    
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="summernote">Descriptions </label>
                                            <textarea class="form-control" id="summernote" name="editordata" rows="6" placeholder="Write Descriptions for your venue"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="dashboard-location-map">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <h3>Location Map</h3>
                                        <div class="border-bottom mb20">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <!-- Select Basic -->
                                        <div class="form-group">
                                            <label class="control-label" for="latitude">Latitude</label>
                                            <input id="latitude" value="6.9271" name="latitude" type="number" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="longitude">Longitude</label>
                                            <input id="longitude" name="longitude" value="79.8612" type="number"class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="well-box">
                                            <div id="map"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           <!-- <div class="aminities-form-info">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <h3>Amenities</h3>
                                        <div class="border-bottom mb20">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1"> Groom Lounge</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck2">
                                            <label class="custom-control-label" for="customCheck2"> Bridal Suite</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck3">
                                            <label class="custom-control-label" for="customCheck3">Table and chairs</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck4">
                                            <label class="custom-control-label" for="customCheck4"> Get Ready Rooms</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck5">
                                            <label class="custom-control-label" for="customCheck5">Event Rentals</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck6">
                                            <label class="custom-control-label" for="customCheck6">Outside Vendors</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck7">
                                            <label class="custom-control-label" for="customCheck7"> Bar Services</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck8">
                                            <label class="custom-control-label" for="customCheck8"> Catering Services</label>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck9">
                                            <label class="custom-control-label" for="customCheck9"> Clean Up</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck10">
                                            <label class="custom-control-label" for="customCheck10">Event Planner</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck11">
                                            <label class="custom-control-label" for="customCheck11">Wifi</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck12">
                                            <label class="custom-control-label" for="customCheck12">Pet Friendly</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck13">
                                            <label class="custom-control-label" for="customCheck13">Accommodations</label>
                                        </div>
                                    </div>
                                </div>
                            </div>-->
                            <div class="dashboard-venue-gallery">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <h3>Add Gallery</h3>
                                        <div class="border-bottom mb20">
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <!-- File Button -->
                                        <div class="form-group">
                                            <label class="control-label" for="filebutton">Browse Image(350x250)</label>
                                            <input id="filebutton" name="filebutton" class="btn btn-primary btn-block" type="file">
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="row">
                                            <!--<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-6">
                                                <div class="gallery-upload-img">
                                                    <img src="./images/gallery-thumb.jpg" alt="" class="img-fluid">
                                                    <span class="delete-gallery-img"> <a href="#"><i class="fa  fa-times-circle"></i></a></span>
                                                </div>
                                            </div>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="dashboard-venue-video">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <h3>Add Video</h3>
                                        <div class="border-bottom mb20">
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="video">Video</label>
                                            <input id="video" name="video" type="text" placeholder="https://www.youtube.com/watch?v=VQWgez89JlM" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="social-form-info">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <h3>Social Media </h3>
                                        <div class="border-bottom mb20">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="facebook">Facebook</label>
                                            <input id="facebook" name="facebook" type="url" placeholder="https://www.facebook.com" class="form-control ">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="twitter">Twitter</label>
                                            <input id="twitter" name="twitter" type="url" placeholder="https://www.twitter.com" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="instagram">Instagram</label>
                                            <input id="instagram" name="instagram" type="url" placeholder="https://www.instagram.com" class="form-control">
                                        </div>
                                    </div>
                                    <!--<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="youtube">Youtube</label>
                                            <input id="youtube" name="youtube" type="url" placeholder="https://www.youtube.com" class="form-control">
                                        </div>
                                    </div>-->
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <input class="btn btn-default" name="submit" type="submit"></input>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/menumaker.min.js"></script>
    <script src="js/custom-script.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/fastclick.js"></script>
    <script src="js/offcanvas.js"></script>
    <script>
    function initMap() {
        var uluru = {
            lat:6.9271,
            lng: 79.8612
        };
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 10,
            center: uluru
        });
        var marker = new google.maps.Marker({
            position: uluru,
            map: map,
            icon: 'images/map-pin.png'
        });

        google.maps.event.addListener(map, "click", function(event) {
                // get lat/lon of click
                var clickLat = event.latLng.lat();
                var clickLon = event.latLng.lng();

                // show in input box
                document.getElementById("latitude").value = clickLat.toFixed(4);
                document.getElementById("longitude").value = clickLon.toFixed(4);

                  //var marker = new google.maps.Marker({
                       // position: new google.maps.LatLng(clickLat,clickLon),
                        //map: map
                     //});
            });
    }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCvZiQwPXkkIeXfAn-Cki9RZBj69mg-95M&callback=initMap">
    </script>
  
    
   
    <script src="js/summernote-bs4.js"></script>
</body>

</html>