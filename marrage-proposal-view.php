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
                        <p class="wlecome-text">Welcome to Wedding Directory.</p>
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
                        <h1 class="page-title">An Exclusive Matrimony Portal.</h1>
                    </div>
                </div>
            </div>
        </div>
    </div><br>
    <!-- contact-form -->
        <div class="container">
            <div class="row">
                <div class="space-medium bg-yellow-light">
        <div class="container">
            <div class="row">
                <div class="offset-xl-2 col-xl-8 offset-lg-2 col-lg-8 col-md-12 col-sm-12 col-12">
                    <div class="section-title text-center">
                        <!-- section title start-->
                        <h2 class="mb10">Marriage Proposals</h2>
                        <p> If you are truly looking for a Sri Lankan marriage, don't waste your valuable time on free sites and get in to trouble. Insert your profile here and find your correct partner within a couple of days!!.</p>
                    </div>
                    <!-- /.section title start-->
                </div>
            </div>
            <div class="row">
                 <?php 
                   include "connection/DB.php";
                                        $resultsetGetlist = mysqli_query($connection, "SELECT * FROM proposaltbl WHERE delflag='0'");
                                        while ($row = mysqli_fetch_row($resultsetGetlist)) { 
                ?>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="well-box testimonial-block">
                        <!-- testimonial block -->
                        <div class="testimonial-icon"> <i class="fa fa-quote-right fa-default"></i></div>
						<div class="testimonial-pic"><?php echo '<img src=admin/'.$row[11].' alt=""  class="rounded-circle">'; ?></div>
                        <h3 class="testimonial-name"><?php echo $row[1];?></h3>
						<center>
							<div>
								<p style="margin:0;">Gender : <?php echo $row[2];?></p>
								<p style="margin:0;">Date of Birth : <?php echo $row[3];?></p>
								<p style="margin:0;">Caste : <?php echo $row[4];?></p>
								<p style="margin:0;">Religion : <?php echo $row[5];?></p>
								<p style="margin:0;">Height : <?php echo $row[6];?>cm</p>
								<p style="margin:0;">NIC : <?php echo $row[7];?></p>
								<p style="margin:0;">Province : <?php echo $row[8];?></p>
								<p style="margin:0;">City : <?php echo $row[9];?></p>
							</div>
						</center>
                        
                        
                        <!-- /.testimonial block -->
                    </div>
                </div>
            <?php }?>
            </div>
        </div>
    </div>
            </div>
        </div><br>
    <!-- /.contact-form -->
    <!--importance-->
    <center><div class="content"  style="background-color: #3c3645;">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 ftr_icon1"><img src="images/sem_icon1.png"/><p style="color: white;">Best Matches</p></div>
                <div class="col-sm-4 ftr_icon2"><img src="images/sem_icon2.png"/><p style="color: white;">Fastest Response</p></div>
                <div class="col-sm-4 ftr_icon3"><img src="images/sem_icon3.png"/><p style="color: white;">Safe & Secure</p></div>
            </div>
        </div>
    </div></center><br>
    <!--importance-->
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