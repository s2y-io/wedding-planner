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
                        <p>Are You Vendor ? <a href="vendor-form.php">List Your Business</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/.header-top -->
    <!-- header -->
    <?php include 'headermenu.php';?>
    <!-- /.header -->
    <div class="page-header">
        <!-- page-header -->
        <div class="container">
            <div class="row">
                <!-- page section -->
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-caption">
                        <h1 class="page-title">Contact us</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact-form -->
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="offset-xl-2 col-xl-8 offset-lg-2 col-lg-8 col-md-12 col-sm-12 col-12 mb60">
                    <!-- contact-section-title -->
                    <div class="text-center">
                        <p class="lead">We would like to talk with you, Talk to us and we'll show you what we’ve done, and what we can do for you.
                        </p>
                    </div>
                    <!-- /.contact-section-title -->
                </div>
                <div class="offset-xl-3 col-xl-6 offset-lg-3 col-lg-6 col-md-12 col-sm-12 col-12">
                    <form action="contactus.php" method="post">
                        <!-- form -->
                        <div class="contact-form">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb10 ">
                                    <h3>Get in touch</h3>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 ">
                                    <!-- Text input-->
                                    <div class="form-group service-form-group">
                                        <label class="control-label sr-only" for="fname"></label>
                                        <input id="fname" type="text" name="fname" placeholder="First Name" class="form-control" required>
                                    </div>
                                </div>
                                <!-- Text input-->
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12  ">
                                    <div class="form-group service-form-group">
                                        <label class="control-label sr-only" for="lname"></label>
                                        <input id="lname" type="text" name="lname" placeholder="Last Name" class="form-control" required>
                                    </div>
                                </div>
                                <!-- Text input-->
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                    <div class="form-group service-form-group">
                                        <label class="control-label sr-only" for="email"></label>
                                        <input id="email" type="email" name="email" placeholder="Email" class="form-control" required>
                                    </div>
                                </div>
                                <!-- Text input-->
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                    <div class="form-group service-form-group">
                                        <label class="control-label sr-only" for="phone"></label>
                                        <input id="phone" type="text" name="phone" placeholder="Phone" class="form-control" required>
                                    </div>
                                </div>
                                <!-- select -->
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                    <div class="form-group">
                                        <select class="wide mb20" name="purpose">
                                            <option value="Vendor Purpose">Vendor Purpose</option>
                                            <option value="Couple">Couple</option>
                                            <option value="Pricing">Pricing</option>
                                            <option value="Vendor">Vendor</option>
                                            <option value="Advertise with us">Advertise with us</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                    <!-- textarea -->
                                    <div class="form-group">
                                        <label class="control-label sr-only" for="message"></label>
                                        <textarea class="form-control" id="message" name="message" rows="3" placeholder="Messages"></textarea>
                                    </div>
                                </div>
                                <!--button -->
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                    <button type="submit" name="singlebutton" class="btn btn-default">submit</button>
                                </div>
                            </div>
                        </div>
                        <!-- /.form -->
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /.contact-form -->
    <!-- contact-map -->
    <div id="map"></div>
    <!-- /.contact-map -->
    <!-- contact-block-section -->
    <div class="space-medium">
        <div class="container">
            <div class="row">
                <!-- contact-block -->
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="contact-block">
                        <div class="contact-icon"><i class="far fa-user-circle"></i></div>
                        <div class="contact-content">
                            <h3>Customer Support</h3>
                            <p>Call our 24-hour helpline.</p>
                            <p><strong>Phone number:</strong><span class="text-default"> +9477 850 8066</span>
                                <br> <strong>Email Us:</strong><span class="text-default"> info@silverstar.com</span></p>
                        </div>
                    </div>
                </div>
                <!-- /.contact-block -->
                <!-- contact-block -->
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="contact-block">
                        <div class="contact-icon"><i class="fa fa-map-marker-alt"></i></div>
                        <div class="contact-content">
                            <h3>Our Address</h3>
                            <p>Our offices are located in the Ja-ela. </p>
                            <p><strong>Address:</strong> Ja-ela,
                                <br> Colombo, Sri Lanka.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- /.contact-block -->
                <!-- contact-block -->
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="contact-block">
                        <div class="contact-icon"><i class="far fa-envelope"></i></div>
                        <div class="contact-content">
                            <h3>Other Enquiries</h3>
                            <p>Please contact us at the email below for all other inquiries.</p>
                            <p><strong>Email Us:</strong> <span class="text-default">info@silverstar.com</span>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- /.contact-block -->
            </div>
        </div>
    </div>
    <!-- /.contact-block-section -->
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
                        <a href="#"><img src="images/logo1.png" alt="" class="mb20"></a>
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
                        <p>Kottawa, Colombo,
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
                        <a href="vendor-form.php" class="btn btn-default">List your Business</a>
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
    <!-- nice-select -->
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/fastclick.js"></script>
    <script src="js/custom-script.js"></script>
    <script>
    function initMap() {
        var uluru = {
            lat: 23.0732195,
            lng: 72.5646902
        };
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 17,
            center: uluru
        });
        var marker = new google.maps.Marker({
            position: uluru,
            map: map,
            icon: 'images/map-pin.png'
        });
    }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCvZiQwPXkkIeXfAn-Cki9RZBj69mg-95M&callback=initMap">
    </script>
     <script src="js/return-to-top.js" ></script>
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