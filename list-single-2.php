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
    <!--jquery-rateyo  -->
    <link href="css/jquery.rateyo.css" rel="stylesheet">
    <!-- Template magnific popup gallery -->
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
    <!-- OwlCarosuel CSS -->
    <link href="css/owl.carousel.css" type="text/css" rel="stylesheet">
    <link href="css/owl.theme.default.css" type="text/css" rel="stylesheet">
    <!-- Favicon icon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/logo1.png">
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
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-sm-6 col-md-6 col-sm-6 col-6 d-none d-xl-block d-lg-block d-sm-block">
                    <div class="header-text">
                        <p class="wlecome-text">Welcome to Silver Star wedding directory.</p>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-sm-6 col-md-6 col-sm-12 col-12">
                    <div class="header-text text-right">
                        <p>Are You Vendor ? <a href="#">List Your Business</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header">
        <?php include 'headermenu.php';
?>
    </div>
    <!-- page-header -->
    <div class="list-single-carousel" style="padding-top: 50px;">
        <div class="owl-carousel owl-theme owl-second">
            <div class="item">
                <img src="./images/vendor-carousel-img-1.jpg" alt="">
            </div>
            <div class="item">
                <img src="./images/vendor-carousel-img-2.jpg" alt="">
            </div>
            <div class="item">
                <img src="./images/vendor-carousel-img-3.jpg" alt="">
            </div>
            <div class="item">
                <img src="./images/vendor-carousel-img-4.jpg" alt="">
            </div>
            <div class="item">
                <img src="./images/vendor-carousel-img-2.jpg" alt="">
            </div>
            <div class="item">
                <img src="./images/vendor-carousel-img-1.jpg" alt="">
            </div>
            <div class="item">
                <img src="./images/vendor-carousel-img-4.jpg" alt="">
            </div>
            <div class="item">
                <img src="./images/vendor-carousel-img-2.jpg" alt="">
            </div>
            <div class="item">
                <img src="./images/vendor-carousel-img-3.jpg" alt="">
            </div>
            <div class="item">
                <img src="./images/vendor-carousel-img-4.jpg" alt="">
            </div>
            <div class="item">
                <img src="./images/vendor-carousel-img-2.jpg" alt="">
            </div>
            <div class="item">
                <img src="./images/vendor-carousel-img-1.jpg" alt="">
            </div>
        </div>
    </div>
    <?php
                                        include "connection/DB.php";
                                        $id = $_GET['id'];
                                        $resultsetGetlist = mysqli_query($connection, "SELECT * FROM newlisting WHERE idnewlisting='".$id."' AND approveflag='1' AND delflag='0'");
                                        while ($row = mysqli_fetch_row($resultsetGetlist)) {
                                    ?>
    <div class="list-single-second">
        <div class="container">
            <div class="list-single-second-pageheader">
                <div class="row">
                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">
                        <div class="vendor-headings">
                            <h2 class="mb10"><?php echo $row[1]; ?></h2>
                            <p class="vendor-address"><?php echo $row[3]; ?><a href="#location" class="btn-secondary-link ml-2">View Map</a> </p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                        <div class="vendor-headings">
                            <a href="contact-us.php" class="btn btn-default">Contact us</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vendor-info">
                <div class="row">
                    <!-- <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6"><span class="price-box vendor-meta-box">
                                <span class="vendor-price">
                                    LKR: 250,000.00 abow
                                </span>
                        <span class="text-uppercase">Per Package</span>
                        </span>
                    </div> -->
                    <!-- <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6"><span class="guest-box vendor-meta-box"><span class="guest-no">
                                    Group
                                </span>
                        <span class="text-uppercase">Packages</span>
                        </span>
                    </div> -->
                    <!-- <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12 text-center mb20">
                        <div class=" mt10">
                            <a href="#" class="btn-wishlist pinside10"><i class="fa fa-heart"></i> <span class="pl-1">Add To Wishlist</span></a>
                        </div>
                    </div> -->
                    <!-- <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12 ">
                        <span class="rating-box vendor-meta-box ">
                                    <span class="rating-star">
                                    <i class="fa fa-star rated"></i>
                                    <i class="fa fa-star rated"></i>
                                    <i class="fa fa-star rated"></i>
                                    <i class="fa fa-star rated"></i>
                                    <i class="fa fa-star rate-mute"></i>
                                    </span>
                        <span class="rating-count">(12)</span>
                        <a href="#">Write Review</a>
                        </span>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <div class="vendor-content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8 col-md-7 col-sm-12 col-12">
                    <div class="vendor-details">
                        <div class="">
                            <div class="vendor-descriptions">
                                <h3 class="border-bottom mb20 pdb10">About Us</h3>
                                <p><?php echo $row[5]; ?></p>
                                <h4>Web Link</h4>
                                <p><a href="<?php echo $row[4];?>" class="title" target=_blank><?php echo $row[4];?></a></p>
                                <!-- <div class="mb40">
                                    <h3 class="border-bottom mb20 pdb10">Venue Highlights</h3>
                                    <p class="text-dark">
                                        <span>Maximum Capacity<span class="float-right font-weight-bold">350</span></span>
                                        <br>
                                        <span>Guest Minimum<span class="float-right font-weight-bold">40</span></span>
                                        <br>
                                        <span>Style<span class="float-right font-weight-bold">Barn, Mansion, Winery</span></span>
                                        <br>
                                        <span>Event Spaces<span class="float-right font-weight-bold">Outdoorsy, Rustic/Country, Unique</span></span>
                                    </p>
                                </div> -->
                                <!-- <div class="mb40">
                                    <h3 class="border-bottom mb20 pdb10">Accommodations / Amenities Included</h3>
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                            <div class="animities-list">
                                                <ul class="list-unstyled arrow">
                                                    <li>Air conditioning</li>
                                                    <li>Bathroom</li>
                                                    <li>Hair Dryer</li>
                                                    <li>Kitchen</li>
                                                    <li>Linen supplied</li>
                                                    <li>Non-smoking</li>
                                                    <li>Open fireplace </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                            <div class="animities-list">
                                                <ul class="list-unstyled arrow">
                                                    <li> Parking</li>
                                                    <li><strike>Pet-friendly</strike> </li>
                                                    <li>Towels supplied </li>
                                                    <li>TV</li>
                                                    <li>Washing machine</li>
                                                    <li>Wheelchair</li>
                                                    <li>Access Wifi</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>

                        <!-- /.review-block -->
                        <!-- /.review-content --><br><br>
                        <div class="mt30" id="location">
                            <h3 class="border-bottom mb20 pdb10">Location - Map</h3>
                            <div id="map"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-5 col-sm-12 col-12">
                    <div class="">
                        <div class="well-box-dark">
                            <form action="controller/makerequest.php?id=<?php $id?>" method="post">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <h3 class="mb30">Request Quote</h3>
                                    </div>
                                    <!-- Text input-->
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label sr-only" for="name">Name</label>
                                            <input id="name" name="cusname" type="text" placeholder="Name" class="form-control " required="">
                                        </div>
                                    </div>
                                    <!-- Text input-->
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class=" control-label sr-only" for="email">Email</label>
                                            <input id="email" name="cusemail" type="text" placeholder="Email" class="form-control " required="">
                                        </div>
                                    </div>
                                    <!-- Text input-->
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class=" control-label sr-only" for="phone">Phone</label>
                                            <input id="phone" name="cusphone" type="text" placeholder="Phone" class="form-control " required="">
                                        </div>
                                    </div>
                                    <!-- Text input-->
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label sr-only" for="weddingdate">Wedding Date</label>
                                            <input id="weddingdate" name="weddingdate" type="text" placeholder="Wedding Date" class="form-control " required="">
                                            <div class="venue-form-calendar"><i class="far fa-calendar-alt"></i></div>
                                        </div>
                                    </div>
                                    <!-- Textarea -->
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label sr-only" for="comments">Comment</label>
                                            <textarea class="form-control" id="comments" name="comments" rows="5" placeholder="Write Comment"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <button type="submit" name="submit" class="btn btn-default btn-block">Submit Quote</button>
                                        </div>
                                    </div>
                            </form>
                            </div>
                        </div>
                        <!-- venue-admin -->
                        <!-- <div class="vendor-owner-profile mb30">
                            <div class="vendor-owner-profile-head">
                                <div class="vendor-owner-profile-img"><img src="./images/admin-pic.jpg" class="rounded-circle" alt=""></div>
                                <small>Venue Owner</small>
                                <h4 class="vendor-owner-name">Dineth Fonseks</h4>
                            </div>
                            <div class="vendor-owner-profile-content">
                                <p class="mb-2">40, Galle Road,
                                    <br>  Colombo 04.</p>
                                <p class="mb10">0703333000</p>
                                <p class="text-default mb10">info@3000.lk</p>
                                <a href="#" class="btn btn-primary">contact vendor</a>
                            </div>
                        </div> -->
                        <!-- /.venue-admin -->
                        <!-- social-media -->
                        <!-- <div class="mb30">
                            <h4 class="widget-title">Stay in Touch </h4>
                            <div class="social-icons">
                                <a href="#" class="icon-square-outline facebook-outline"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" class="icon-square-outline twitter-outline"><i class="fab fa-twitter"></i> </a>
                                <a href="#" class="icon-square-outline googleplus-outline"><i class="fab fa-google-plus-g"></i></a>
                                <a href="#" class="icon-square-outline instagram-outline"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div> -->
                        <!-- /.social-media -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>
    </div>
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
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                    <div class="footer-widget">
                        <a href="#"><img src="images/logo1.png" alt="" class="mb20"></a>
                        <p class="mb10">Bring the vision of brides and grooms to life by planning, organizing and overseeing all aspects of the wedding ceremony, reception and, often, the honeymoon.</p>
                        <!-- <p>In hac habitasse platea dictumst simple dummy content here.</p> -->
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12 col-12">
                    <div class="footer-widget">
                        <h3 class="widget-title">
                            Contact Address
                        </h3>
                        <p>Kottwa, Pannipitiya,
                            <br> Sri Lanka</p>
                        <p class="mb0 text-default">+9471 578 1663</p>
                        <p class="mb0 text-default">info@yopmail.com</p>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-12 col-12">
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
                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                    <div class="footer-widget">
                        <h3 class="widget-title">
                            List you Business
                        </h3>
                        <p>Are you vendor ? List your venue and service get more from listing business.</p>
                        <a href="#" class="btn btn-default">List your Business</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tiny-footer">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-right">
                    <p>© 2021 SilverStar. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <a href="javascript:" id="return-to-top"><i class="fa fa-angle-up"></i></a>
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/menumaker.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/fastclick.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/custom-script.js"></script>
    <!-- popup gallery -->
    <script src="js/jquery.magnific-popup.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui.js"></script>
    <script>
    function initMap() {
        var uluru = {
            lat: 6.8268270,
            lng: 79.9752205
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
    <script src="js/jquery.rateyo.min.js"></script>
    <script>
    $(function() {

        $("#rateYo1, #rateYo2, #rateYo3, #rateYo4, #rateYo5 ").rateYo({
            rating: 3.6
        });

    });
    </script>
    <script src="js/return-to-top.js"></script>
</body>

</html>