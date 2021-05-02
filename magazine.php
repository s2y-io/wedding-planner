
<!doctype html>
<html>
<head>
    <title>Silver Star</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="initial-scale=1,user-scalable=0,maximum-scale=1,width=device-width" />
    <meta content="IE=Edge" http-equiv="X-UA-Compatible" />
    <meta name="format-detection" content="telephone=no"/>
    <meta property="og:title" content="" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="docs/BridalMagazine_OliviaCollectionOreadEldridge_June2016_web.pdf_1_thumb.jpg" />    
    <meta property="og:image:width" content="122" /> 
    <meta property="og:image:height" content="158" /> 
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
    
    <link rel="stylesheet" type="text/css" href="css/flowpaper.css" />
    
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.extensions.min.js"></script>
    <!--[if gte IE 10 | !IE ]><!-->
    <script type="text/javascript" src="js/three.min.js"></script>
    <!--<![endif]-->
    <script type="text/javascript" src="js/flowpaper.js"></script>
    <script type="text/javascript" src="js/flowpaper_handlers.js"></script>
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
    <div class="offer-header">
        <!-- page-header -->
        <div class="container">
            <div class="row">
                <!-- page section -->
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-caption">
                        <h1 class="page-title">Silver Star Wedding Magazine</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>


   <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="row">
					 <?php
                                        include "connection/DB.php";
                                        $resultsetGetlist = mysqli_query($connection, "SELECT * FROM magazineadd WHERE delflag='0'");
                                        while ($row = mysqli_fetch_row($resultsetGetlist)) {
                                    ?>
                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                            <div class="post-block">
                                <!-- post vertical block -->
                                <div class="post-img zoomimg">
                                    <a href="images/mag1.jpg" ><?php echo '<img src=admin/'.$row[3].' alt=""  class="img-fluid">'; ?></a>
                                </div>
                                <div class="post-content">
                                    <p><?php echo $row[1];?></p>
                                </div>
                            </div>
                            <!-- /.post vertical block -->
                        </div>

                    <?php }?>
                        
                        
                        
                        
                       
                       
                        <!-- post paginations -->
                        <!--<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="st-paginations mb60 mt20">
                                <ul class="pagination">
                                    <li>
                                        <a href="#" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                        </a>
                                    </li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li>
                                        <a href="#" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>-->
                        <!-- /.post paginations -->
                    </div>
                </div>
                <!-- /. blog post -->
                
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