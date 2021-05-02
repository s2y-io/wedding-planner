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
    <link rel="shortcut icon" type="image/X-UA-Compatible" href="images/logo1.png">
    <!-- Style CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <!-- header-top -->
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-sm-6 col-md-6 col-sm-6 col-6 d-none d-xl-block d-lg-block d-md-block">
                    <div class="header-text">
                        <p class="wlecome-text">Welcome to Silver Star Wedding Directory.</p>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-sm-6 col-md-6 col-sm-12 col-12">
                    <div class="header-text text-right">
                        <p>Are You Vendor ? <a href="vendor-form.html">List Your Business</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/.header-top -->
     <!-- header -->
    <?php include 'headermenu.php';
    ?>
     <!-- header -->
    <!-- page header -->
    <div class="offer-header">
        <div class="container">
            <div class="row">
                <!-- page section -->
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-caption">
                        <h1 class="page-title"> Listing Vendors</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.page header -->
    <!-- filter-form -->
    <div class="filter-form">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <form class="row">
                        <!-- venue-type -->
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                            <select class="wide">
                                            <option value="Venue Type" data-display="Select Province">Select Province</option>
                                            <option value="Hotel">Central</option>
                                            <option value="Restaurant">Eastern</option>
                                            <option value="Castle">North Central</option>
                                            <option value="Barns">Northern</option>
                                            <option value="Resort">North Western</option>
                                            <option value="Church">Sabaragamuwa</option>
                                            <option value="In Door">Southern</option>
                                            <option value="In Door">Uva</option>
                                            <option value="In Door">Western</option>
                                        </select>
                        </div>
                        <!-- /.venue-type -->
                        <!-- distance km -->
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                            <select class="wide">
                                            <option value="Ahmedabad" data-display="Select District">Select District</option>
                                            <option value="Hotel">Ampara</option>
                                            <option value="Restaurant">Anuradhapura</option>
                                            <option value="Castle">Badulla</option>
                                            <option value="Barns">Batticaloa</option>
                                            <option value="Resort">Colombo</option>
                                            <option value="Church">Galle</option>
                                            <option value="In Door">Gampaha</option>
                                            <option value="In Door">Hambantota</option>
                                            <option value="In Door">Jaffna</option>
                                            <option value="In Door">Kalutara</option>
                                            <option value="In Door">Kandy</option>
                                            <option value="In Door">Kegalle</option>
                                            <option value="In Door">Kilinochchi</option>
                                            <option value="In Door">Kurunegala</option>
                                            <option value="In Door">Mannar</option>
                                        </select>
                        </div>
                        <!-- /.distance km -->
                        <!-- price -->
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                            <select class="wide">
                                            <option value="Ahmedabad" data-display="Vendor Category">Vendor Category</option>
                                            <option value="Hotel">Hotels</option>
                                            <option value="Restaurant">Restaurant</option>
                                            <option value="Castle">Castle</option>
                                            <option value="Barns">Barns</option>
                                            <option value="Resort">Resort</option>
                                            <option value="Church">Church</option>
                                            <option value="Photograpers">Photograpers</option>
                                            <option value="Astrologers">Astrologers</option>
                                        </select>
                        </div>
                        <!-- /.price -->
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 ">
                            <button class="btn btn-default btn-block" type="submit">Find Venue</button>
                        </div>
                        <!--<div class="col-xl-12 col-lg-12 col-md-3 col-sm-12 col-12 mt-1">
                            <a class="btn-primary-link" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"> Advance Option </a>
                            <div class="collapse" id="collapseExample">
                                <div class="aminities">
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
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
                                        </div>
                                        
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
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
                                        
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
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
                                </div>
                            </div>
                        </div>-->
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /.filter-form -->
    <div class="content" style="background-color: white;">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                
                            <!-- widget-search -->
                            <h3 class="widget-title" style="padding-top: 10px;">Vendors for your choise</h3>
                            <div class="">
                            </div>
                        
                <div class="row">
                     <?php
                                        include "connection/DB.php";
                                        $resultsetGetlist = mysqli_query($connection, "SELECT * FROM newlisting WHERE approveflag='1' AND delflag='0'");
                                        while ($row = mysqli_fetch_row($resultsetGetlist)) {
                                    ?>
                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                    <div class="vendor-thumbnail">
                        <!-- Vendor thumbnail -->
                        <div class="vendor-img zoomimg">
                            <!-- Vendor img -->
                            <a href="list-single-2.php?id=<?php echo $row[0];?>"><?php echo '<img src="'.$row[8].'" alt=""  class="img-fluid">'; ?></a>
                            <div class="wishlist-sign"><a href="#" class="btn-wishlist"><i class="fa fa-heart"></i></a></div>
                        </div>
                        <!-- /.Vendor img -->
                        <div class="vendor-content" style="background-color: white;">
                            <!-- Vendor Content -->
                           <h2 class="vendor-title"><a href="#" class="title"><?php echo $row[1];?></a></h2>
                                    <p class="vendor-address"><?php echo $row[3];?></p>
                                    <div class="vendor-meta">
                                <!-- Vendor meta -->
                                        <span class="price-box vendor-meta-box">
                                            <span class="vendor-price">Telephone : <?php echo $row[2];?></span>
                                        </span><br>

                                        <span class="guest-box vendor-meta-box">
                                            <span class="guest-no"><a href="www.studio3000weddingphotos.com" target="_blank">Web : <?php echo $row[4];?></a></span>
                                        </span><br>
                                            
                                        <span class="guest-box vendor-meta-box">
                                            <span class="guest-no">Whatsapp & Viber : <?php echo $row[17];?></span>
                                        </span><br>
                                        <span></span>
                                <!-- <span class="rating-box vendor-meta-box">
                                    <span class="rating-star">
                                    <i class="fa fa-star rated"></i>
                                    <i class="fa fa-star rated"></i>
                                    <i class="fa fa-star rated"></i>
                                    <i class="fa fa-star rated"></i>
                                    <i class="fa fa-star rate-mute"></i> 
                                    </span> -->
                                <!-- <span class="rating-count">(20)</span></span><br> -->
                                <span><a href="blog-listing.php" class="btn btn-default btn-xl" style="font-size: 9px; background-color: #30336b; border-color: #30336b; color: white; border-radius: 5px; margin-right: 5px;">Upcoming Events</a><span><a href="video-gallery.php" class="btn btn-default btn-xl" style="font-size: 9px; background-color: #eb4d4b; border-color: #eb4d4b; color: white; border-radius: 5px;">Video Gallery</a></span></span>
                            </div>
                            <!-- /.Vendor meta -->
                        </div>
                        <!-- /.Vendor Content -->
                    </div>
                    <!-- /.Vendor thumbnail -->
                </div> <?php } ?>
            </div>
               
                </div>

                
            </div>
            
        </div>
    </div>
    <!-- social-media-section -->
    <div class="social-media-block">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-7 col-md-6 col-sm-12 col-12">
                    <h3 class="text-white mb0 mt10">Would you like to connect with us</h3>
                </div>
                <div class="col-xl-5 col-lg-5 col-md-6 col-sm-12 col-12 text-right">
                    <div class="social-icons">
                        <a href="#" class="icon-square"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="icon-square"><i class="fab fa-twitter"></i> </a>
                        <a href="#" class="icon-square"><i class="fab fa-google-plus-g"></i></a>
                        <a href="#" class="icon-square"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="icon-square"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.social-media-section -->
    <!-- footer-section -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                    <!-- footer-widget -->
                    <div class="footer-widget">
                        <a href="#"><img src="images/logo.png" alt="" class="mb20"></a>
                        <p class="mb10">Bring the vision of brides and grooms to life by planning, organizing and overseeing all aspects of the wedding ceremony, reception and, often, the honeymoon.</p>
                    </div>
                </div>
                <!-- /.footer-widget -->
                <!-- footer-widget -->
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="footer-widget">
                        <h3 class="widget-title">
                            Contact Address
                        </h3>
                        <p>Ja-ela, Colombo,
                            <br> Sri Lanka</p>
                        <p class="mb0 text-default">+9477 850 8066</p>
                        <p class="mb0 text-default">silverstar@silverstar.com</p>
                    </div>
                </div>
                <!-- /.footer-widget -->
                <!-- footer-widget -->
                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-12">
                    <div class="footer-widget">
                        <h3 class="widget-title">
                            About Company
                        </h3>
                        <ul class="listnone">
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Contact us</a></li>
                            <li><a href="#">Faq</a></li>
                            <li><a href="#">Pricing Plan</a></li>
                            <li><a href="#">Meet The Team</a></li>
                        </ul>
                    </div>
                </div>
                <!-- /.footer-widget -->
                <!-- /.footer-widget -->
                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-6 col-12">
                    <div class="footer-widget">
                        <h3 class="widget-title">
                            List you Business
                        </h3>
                        <p>Are you vendor ? List your venue and service get more from listing business.</p>
                        <a href="vendor-form.html" class="btn btn-default">List your Business</a>
                    </div>
                </div>
                <!-- /.footer-widget -->
            </div>
        </div>
    </div>
    <!-- tiny-footer-section -->
    <div class="tiny-footer">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-right">
                    <p>© 2018 Silver Star. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- /.tiny-footer-section -->
    <a href="javascript:" id="return-to-top"><i class="fa fa-angle-up"></i></a>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/menumaker.min.js"></script>
    <!-- nice select -->
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/fastclick.js"></script>
    <script src="js/custom-script.js"></script>
    <script src="js/return-to-top.js"></script>
    <script>
    // When the user scrolls down 20px from the top of the document, slide down the navbar
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
        if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
            document.getElementById("header").style.top = "0";
        } else {
            document.getElementById("header").style.top = "-90px";
        }
    }
</script>
</body>

</html>