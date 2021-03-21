
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
    <link href="../css/summernote-bs4.css" rel="stylesheet">
   
    <link rel="shortcut icon" type="image/X-UA-Compatible" href="../images/logo1.png">
    <!-- Style CSS -->
    <link href="../css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/offcanvas.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="body-bg">
    <div class="dashboard-header">
        <?php include "../admin/menu.php";?>
    </div>
    <div class="navbar-expand-lg">
        <button class="navbar-toggler" type="button" data-toggle="offcanvas">
            <span id="icon-toggle" class="fa fa-bars"></span>
        </button>
    </div>
    <div class="dashboard-wrapper">
        <?php include "../admin/sidemenu.php";?>
        <div class="dashboard-content">
            <div class="container">
               
                <div class="card">
                    <div class="card-body">
                        <form action="../admin/controller/catreg.php" method="post" enctype="multipart/form-data">
                            <!-- Form Name -->
                            <div class="venue-form-info">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <h3>Add Categories</h3>
                                        <div class="border-bottom mb20">
                                        </div>
                                    </div>
                                    <!-- Text input-->
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="catename">Category Name</label>
                                            <input id="catename" name="catename" type="text" placeholder="Category Name" class="form-control ">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="dashboard-venue-gallery">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <h3>Add Category Image</h3>
                                        <div class="border-bottom mb20">
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <!-- File Button -->
                                        <div class="form-group">
                                            <label class="control-label" for="filebutton">Browse Image(360x250)</label>
                                            <input id="filebutton" name="filebutton" class="btn btn-primary btn-block" type="file">
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="row">
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="social-form-info">
                                <div class="row">
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
    <script src="../js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/menumaker.min.js"></script>
    <script src="../js/custom-script.js"></script>
    <script src="../js/jquery.nice-select.min.js"></script>
    <script src="../js/fastclick.js"></script>
    <script src="../js/offcanvas.js"></script>
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
                document.getElementById("latitude").value = clickLat.toFixed(5);
                document.getElementById("longitude").value = clickLon.toFixed(5);

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