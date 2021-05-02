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
    <!-- Favicon icon -->
    <link rel="shortcut icon" type="image/X-UA-Compatible" href="images/logo1.png">
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
                        <a href="index.php"><img src="images/logo1.png" alt="Weddings | Find A Wedding Venue &amp; Supplier WordPress Theme"></a>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 text-right col-md-4 col-sm-12 col-6">
                    <div class="user-vendor">
                        <div class="dropdown">
                            <a class="dropdown-toggle" id="dropdownMenuButton" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           <span class="user-icon">  <img src="./images/dashboard-profile.jpg" alt="" class="rounded-circle mb10"></span><span class="user-vendor-name">John Deo</span> 
                        </a>
                            <div class=" dashboard-dropdown-menu dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="vendor-dashboard-overview.php">Dashboard</a>
                                <a class="dropdown-item" href="vendor-dashboard-listing.php"> My Listed Item </a>
                               <!--<a class="dropdown-item" href="vendor-dashboard-pricing.html">Pricing Plan</a>-->
                                <a class="dropdown-item" href="vendor-dashboard-request-quote.php">Request Quotes</a>
                                <a class="dropdown-item" href="vendor-dashboard-reviews.php">Reviews </a>
                                <a class="dropdown-item" href="vendor-dashboard-profile.php">My Profile </a>
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
                    <img src="./images/dashboard-profile.jpg" alt="" class="rounded-circle"></div>
                <h3 class="vendor-profile-name">John Deo</h3>
                <a href="#" class="edit-link">edit profile</a>
            </div>
            <div class="dashboard-nav">
                <ul class="list-unstyled">
                    <li><a href="vendor-dashboard-overview.php"><span class="dash-nav-icon"><i class="fas fa-compass"></i></span>Dashboard</a></li>
                    <li><a href="vendor-dashboard-listing.php"><span class="dash-nav-icon"><i class="fas fa-list-alt"></i> </span> My Listed Item </a></li>
                    <!--<li><a href="vendor-dashboard-pricing.html"><span class="dash-nav-icon"><i class="fas fa-calculator"></i></span>Pricing Plan</a></li>-->
                    <li><a href="vendor-dashboard-request-quote.php"><span class="dash-nav-icon"><i class="fas fa-edit"></i></span>Request Quotes</a></li>
                    <li class="active"><a href="vendor-dashboard-reviews.php"><span class="dash-nav-icon"><i class="fas fa-comments"></i></span>Reviews </a></li>
                    <li><a href="vendor-dashboard-profile.php"><span class="dash-nav-icon"><i class="fas fa-user-circle"></i></span>My Profile </a></li>
                    <li><a href="index.php"><span class="dash-nav-icon"><i class="fas fa-sign-out-alt"></i></span>Logout </a></li>
                </ul>
            </div>
        </div>
        <div class="dashboard-content">
            <div class="container">
                <div class="dashboard-page-header">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <h3 class="dashboard-page-title">Reviews</h3>
                            <p>Check your latest reviews.</p>
                        </div>
                    </div>
                </div>
                <div class="dashboard-filter-row mb20">
                    <div class="row">
                        <div class="offset-xl-9 col-xl-3">
                            <select class="form-control wide" id="exampleFormControlSelect1">
                                <option>Select Your Listing</option>
                                <option>Select Your Listing #1</option>
                                <option>Select Your Listing #2</option>
                                <option>Select Your Listing #3</option>
                                <option>Select Your Listing #4</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-xl-4 col-lg-12 col-md-12 col-sm-6 col-12">
                        <div class="card card-rating">
                            <div class="card-body">
                                <h5 class="mb30">Average Ratings</h5>
                                <div class="review-total">4.8 </div>
                                <div class="review-text">Reviews</div>
                                <span class="rated mt40  d-block"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa  fa-star"></i> <i class="fa fa-star-half"></i> </span>
                                <small>4.8 average based on 8 ratings.</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-12 col-md-12 col-sm-6 col-12">
                        <div class="card card-review-summary">
                            <div class="card-body">
                                <h5 class="mb30">Reviews Summary</h5>
                                <div class="row mb-2">
                                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                                        <h5 class="mb0 text-right">Quality Service</h5>
                                    </div>
                                    <div class="col-xl-8 col-lg-8 col-md-6 col-sm-12 col-12">
                                        <div class="progress mt10">
                                            <div class="progress-bar" role="progressbar" style="width: 86%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="col-xl-1 col-lg-1 col-md-3  col-sm-12 col-12 text-right">
                                        <h6 class="text-dark mb0">86%</h6>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                                        <h5 class="mb0 text-right">Facilities</h5>
                                    </div>
                                    <div class="col-xl-8 col-lg-8 col-md-6 col-sm-12 col-12">
                                        <div class="progress mt10">
                                            <div class="progress-bar" role="progressbar" style="width: 35%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="col-xl-1 col-lg-1 col-md-3 col-sm-12 col-12 text-right">
                                        <h6 class="text-dark mb0">35%</h6>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                                        <h5 class="mb0 text-right">Staff</h5>
                                    </div>
                                    <div class="col-xl-8 col-lg-8 col-md-6 col-sm-12 col-12">
                                        <div class="progress mt10">
                                            <div class="progress-bar" role="progressbar" style="width: 7%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="col-xl-1 col-lg-1 col-md-3 col-sm-12 col-12 text-right">
                                        <h6 class="text-dark mb0">7%</h6>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                                        <h5 class="mb0 text-right">Flexibility</h5>
                                    </div>
                                    <div class="col-xl-8 col-lg-8 col-md-6 col-sm-12 col-12">
                                        <div class="progress mt10">
                                            <div class="progress-bar" role="progressbar" style="width: 5%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="col-xl-1 col-lg-1 col-md-3 col-sm-12 col-12 text-right">
                                        <h6 class="text-dark mb0">5%</h6>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                                        <h5 class="mb0 text-right">Value of money</h5>
                                    </div>
                                    <div class="col-xl-8 col-lg-8 col-md-6 col-sm-12 col-12">
                                        <div class="progress mt10">
                                            <div class="progress-bar" role="progressbar" style="width: 10%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="col-xl-1 col-lg-1 col-md-3 col-sm-12 col-12 text-right">
                                        <h6 class="text-dark mb0">10%</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card review-summary-table table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Rating</th>
                                        <th>Email</th>
                                        <th>Time</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="review-summary-name">Jessica J. Titus</td>
                                        <td class="review-summary-rating"> <span class="rated"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></span><span class="ml-2">5</span></td>
                                        <td class="review-summary-id">jessicatitus@gmail.com</td>
                                        <td class="review-summary-time">5 hours ago</td>
                                        <td class="review-summary-action"><a class="btn btn-outline-pink btn-xs" data-toggle="collapse" id="example-one" data-text-swap="close" data-text-original="Details" href="#collapseExample1" aria-expanded="false" aria-controls="collapseExample">Details  </a></td>
                                    </tr>
                                    <tr>
                                        <td colspan="12" class="expandable-info">
                                            <div class="collapse expandable-collapse" id="collapseExample1">
                                                <div class="row">
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                        <!-- review-user -->
                                                        <div class="review-user">
                                                            <div class="user-img"> <img src="images/review-pic-2.jpg" alt="star rating jquery" class="rounded-circle"></div>
                                                            <div class="user-meta">
                                                                <span class="user-name">Jessica J. Titus</span>
                                                                <span class="user-review-date">11 May, 2018</span>
                                                                <div class="given-review">
                                                                    <span class="rated"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>                                                         </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- /.review-user -->
                                                        <!-- review-descripttions -->
                                                        <div class="review-descriptions">
                                                            <p>Donec accumsan consequat massa non gravida. Morbi pharetra mollis tortor ac maximus. Nunc dapibus bibendum urna, in egestas dolor. Class aptent taciti sociosqu ad litora torquent per conubia nostra.Fusce ullamcorper sit amet augue a volutpat. Cras ultrices dictum ante vel iaculis. Aenean molestie molestie elementum. Nullam semper vel mauris et semper. </p>
                                                            <div class="row">
                                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                                    <!-- review-list -->
                                                                    <div class="review-list">
                                                                        <div class="review-for">Quality Service</div>
                                                                        <div class="review-rating"><span class="rated"><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas  fa-star"></i> </span></div>
                                                                        <div class="review-number">5</div>
                                                                    </div>
                                                                    <!-- /.review-list -->
                                                                    <!-- review-list -->
                                                                    <div class="review-list">
                                                                        <div class="review-for">Facilities</div>
                                                                        <div class="review-rating"><span class="rated"><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> </span></div>
                                                                        <div class="review-number">5</div>
                                                                    </div>
                                                                    <!-- /.review-list -->
                                                                    <!-- review-list -->
                                                                    <div class="review-list">
                                                                        <div class="review-for">Staff</div>
                                                                        <div class="review-rating"><span class="rated"><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> </span></div>
                                                                        <div class="review-number">5</div>
                                                                    </div>
                                                                    <!-- /.review-list -->
                                                                    <!-- review-list -->
                                                                    <div class="review-list">
                                                                        <div class="review-for">Flexibility</div>
                                                                        <div class="review-rating"><span class="rated"><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> </span></div>
                                                                        <div class="review-number">5</div>
                                                                    </div>
                                                                    <!-- /.review-list -->
                                                                    <!-- review-list -->
                                                                    <div class="review-list">
                                                                        <div class="review-for">Value of money</div>
                                                                        <div class="review-rating"><span class="rated"><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> </span></div>
                                                                        <div class="review-number">5</div>
                                                                    </div>
                                                                </div>
                                                                <!-- /.review-list -->
                                                            </div>
                                                        </div>
                                                        <!-- /.review-descripttions -->
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="review-summary-name">Liston R. Saenz</td>
                                        <td class="review-summary-rating"> <span class="rated"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></span><span class="ml-2">5</span></td>
                                        <td class="review-summary-id">lisarsaenz@gmail.com</td>
                                        <td class="review-summary-time">7 hours ago</td>
                                        <td class="review-summary-action"><a class="btn btn-outline-pink btn-xs" data-toggle="collapse" id="example-two" data-text-swap="close" data-text-original="Details" href="#collapseExample2" aria-expanded="false" aria-controls="collapseExample">Details  </a></td>
                                    </tr>
                                    <tr>
                                        <td colspan="12" class="expandable-info">
                                            <div class="collapse expandable-collapse" id="collapseExample2">
                                                <div class="row">
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                        <!-- review-user -->
                                                        <div class="review-user">
                                                            <div class="user-img"> <img src="images/review-pic-1.jpg" alt="star rating jquery" class="rounded-circle"></div>
                                                            <div class="user-meta">
                                                                <span class="user-name">Liston R. Saenz</span>
                                                                <span class="user-review-date">12 May, 2018</span>
                                                                <div class="given-review">
                                                                    <span class="rated"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> 

                                                        </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- /.review-user -->
                                                        <!-- review-descripttions -->
                                                        <div class="review-descriptions">
                                                            <p>Donec accumsan consequat massa non gravida. Morbi pharetra mollis tortor ac maximus. Nunc dapibus bibendum urna, in egestas dolor. Class aptent taciti sociosqu ad litora torquent per conubia nostra.Fusce ullamcorper sit amet augue a volutpat. Cras ultrices dictum ante vel iaculis. Aenean molestie molestie elementum. Nullam semper vel mauris et semper. </p>
                                                            <div class="row">
                                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                                    <!-- review-list -->
                                                                    <div class="review-list">
                                                                        <div class="review-for">Quality Service</div>
                                                                        <div class="review-rating"><span class="rated"><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas  fa-star"></i> </span></div>
                                                                        <div class="review-number">5</div>
                                                                    </div>
                                                                    <!-- /.review-list -->
                                                                    <!-- review-list -->
                                                                    <div class="review-list">
                                                                        <div class="review-for">Facilities</div>
                                                                        <div class="review-rating"><span class="rated"><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> </span></div>
                                                                        <div class="review-number">5</div>
                                                                    </div>
                                                                    <!-- /.review-list -->
                                                                    <!-- review-list -->
                                                                    <div class="review-list">
                                                                        <div class="review-for">Staff</div>
                                                                        <div class="review-rating"><span class="rated"><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> </span></div>
                                                                        <div class="review-number">5</div>
                                                                    </div>
                                                                    <!-- /.review-list -->
                                                                    <!-- review-list -->
                                                                    <div class="review-list">
                                                                        <div class="review-for">Flexibility</div>
                                                                        <div class="review-rating"><span class="rated"><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> </span></div>
                                                                        <div class="review-number">5</div>
                                                                    </div>
                                                                    <!-- /.review-list -->
                                                                    <!-- review-list -->
                                                                    <div class="review-list">
                                                                        <div class="review-for">Value of money</div>
                                                                        <div class="review-rating"><span class="rated"><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> </span></div>
                                                                        <div class="review-number">5</div>
                                                                    </div>
                                                                </div>
                                                                <!-- /.review-list -->
                                                            </div>
                                                        </div>
                                                        <!-- /.review-descripttions -->
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="review-summary-name">Cheryl R. Westbrook</td>
                                        <td class="review-summary-rating"> <span class="rated"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></span><span class="ml-2">5</span></td>
                                        <td class="review-summary-id">cheryrwestbrook@gmail.com</td>
                                        <td class="review-summary-time">8 hours ago</td>
                                        <td class="review-summary-action"><a class="btn btn-outline-pink btn-xs" data-toggle="collapse" id="example-three" data-text-swap="close" data-text-original="Details" href="#collapseExample3" aria-expanded="false" aria-controls="collapseExample">Details  </a></td>
                                    </tr>
                                    <tr>
                                        <td colspan="12" class="expandable-info">
                                            <div class="collapse expandable-collapse" id="collapseExample3">
                                                <div class="row">
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                        <!-- review-user -->
                                                        <div class="review-user">
                                                            <div class="user-img"> <img src="images/review-pic-1.jpg" alt="star rating jquery" class="rounded-circle"></div>
                                                            <div class="user-meta">
                                                                <span class="user-name">Cheryl R. Westbrook</span>
                                                                <span class="user-review-date">12 May, 2018</span>
                                                                <div class="given-review">
                                                                    <span class="rated"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> 

                                                        </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- /.review-user -->
                                                        <!-- review-descripttions -->
                                                        <div class="review-descriptions">
                                                            <p>Donec accumsan consequat massa non gravida. Morbi pharetra mollis tortor ac maximus. Nunc dapibus bibendum urna, in egestas dolor. Class aptent taciti sociosqu ad litora torquent per conubia nostra.Fusce ullamcorper sit amet augue a volutpat. Cras ultrices dictum ante vel iaculis. Aenean molestie molestie elementum. Nullam semper vel mauris et semper. </p>
                                                            <div class="row">
                                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                                    <!-- review-list -->
                                                                    <div class="review-list">
                                                                        <div class="review-for">Quality Service</div>
                                                                        <div class="review-rating"><span class="rated"><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas  fa-star"></i> </span></div>
                                                                        <div class="review-number">5</div>
                                                                    </div>
                                                                    <!-- /.review-list -->
                                                                    <!-- review-list -->
                                                                    <div class="review-list">
                                                                        <div class="review-for">Facilities</div>
                                                                        <div class="review-rating"><span class="rated"><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> </span></div>
                                                                        <div class="review-number">5</div>
                                                                    </div>
                                                                    <!-- /.review-list -->
                                                                    <!-- review-list -->
                                                                    <div class="review-list">
                                                                        <div class="review-for">Staff</div>
                                                                        <div class="review-rating"><span class="rated"><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> </span></div>
                                                                        <div class="review-number">5</div>
                                                                    </div>
                                                                    <!-- /.review-list -->
                                                                    <!-- review-list -->
                                                                    <div class="review-list">
                                                                        <div class="review-for">Flexibility</div>
                                                                        <div class="review-rating"><span class="rated"><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> </span></div>
                                                                        <div class="review-number">5</div>
                                                                    </div>
                                                                    <!-- /.review-list -->
                                                                    <!-- review-list -->
                                                                    <div class="review-list">
                                                                        <div class="review-for">Value of money</div>
                                                                        <div class="review-rating"><span class="rated"><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> </span></div>
                                                                        <div class="review-number">5</div>
                                                                    </div>
                                                                </div>
                                                                <!-- /.review-list -->
                                                            </div>
                                                        </div>
                                                        <!-- /.review-descripttions -->
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="review-summary-name">Lucille J. Roybal</td>
                                        <td class="review-summary-rating"> <span class="rated"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half"></i></span><span class="ml-2">4.5</span></td>
                                        <td class="review-summary-id">lucill@gmail.com</td>
                                        <td class="review-summary-time">9 hours ago</td>
                                        <td class="review-summary-action"><a class="btn btn-outline-pink btn-xs" data-toggle="collapse" id="example-four" data-text-swap="close" data-text-original="Details" href="#collapseExample4" aria-expanded="false" aria-controls="collapseExample">Details  </a></td>
                                    </tr>
                                    <tr>
                                        <td colspan="12" class="expandable-info">
                                            <div class="collapse expandable-collapse" id="collapseExample4">
                                                <div class="row">
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                        <!-- review-user -->
                                                        <div class="review-user">
                                                            <div class="user-img"> <img src="images/review-pic-3.jpg" alt="star rating jquery" class="rounded-circle"></div>
                                                            <div class="user-meta">
                                                                <span class="user-name">Lucille J. Roybal</span>
                                                                <span class="user-review-date">14 May, 2018</span>
                                                                <div class="given-review">
                                                                    <span class="rated"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half"></i> 

                                                        </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- /.review-user -->
                                                        <!-- review-descripttions -->
                                                        <div class="review-descriptions">
                                                            <p>Donec accumsan consequat massa non gravida. Morbi pharetra mollis tortor ac maximus. Nunc dapibus bibendum urna, in egestas dolor. Class aptent taciti sociosqu ad litora torquent per conubia nostra.Fusce ullamcorper sit amet augue a volutpat. Cras ultrices dictum ante vel iaculis. Aenean molestie molestie elementum. Nullam semper vel mauris et semper. </p>
                                                            <div class="row">
                                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                                    <!-- review-list -->
                                                                    <div class="review-list">
                                                                        <div class="review-for">Quality Service</div>
                                                                        <div class="review-rating"><span class="rated"><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="far  fa-star"></i> </span></div>
                                                                        <div class="review-number">4</div>
                                                                    </div>
                                                                        <!-- /.review-list -->
                                                                        <!-- review-list -->
                                                                        <div class="review-list">
                                                                            <div class="review-for">Facilities</div>
                                                                            <div class="review-rating"><span class="rated"><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> </span></div>
                                                                            <div class="review-number">5</div>
                                                                        </div>
                                                                        <!-- /.review-list -->
                                                                        <!-- review-list -->
                                                                        <div class="review-list">
                                                                            <div class="review-for">Staff</div>
                                                                            <div class="review-rating"><span class="rated"><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="far fa-star"></i> </span></div>
                                                                            <div class="review-number">4</div>
                                                                        </div>
                                                                        <!-- /.review-list -->
                                                                        <!-- review-list -->
                                                                        <div class="review-list">
                                                                            <div class="review-for">Flexibility</div>
                                                                            <div class="review-rating"><span class="rated"><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="far fa-star"></i> </span></div>
                                                                            <div class="review-number">4</div>
                                                                        </div>
                                                                        <!-- /.review-list -->
                                                                        <!-- review-list -->
                                                                        <div class="review-list">
                                                                            <div class="review-for">Value of money</div>
                                                                            <div class="review-rating"><span class="rated"><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="far fa-star"></i> </span></div>
                                                                            <div class="review-number">4</div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.review-list -->
                                                                </div>
                                                            </div>
                                                            <!-- /.review-descripttions -->
                                                        </div>
                                                    </div>
                                                </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="review-summary-name">Ebony W. Peet</td>
                                        <td class="review-summary-rating"> <span class="rated"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="far fa-star"></i></span><span class="ml-2">4</span></td>
                                        <td class="review-summary-id">ebony@gmail.com</td>
                                        <td class="review-summary-time">7 hours ago</td>
                                        <td class="review-summary-action"><a class="btn btn-outline-pink btn-xs" data-toggle="collapse" id="example-five" data-text-swap="close" data-text-original="Details" href="#collapseExample5" aria-expanded="false" aria-controls="collapseExample">Details  </a></td>
                                    </tr>
                                    <tr>
                                        <td colspan="12" class="expandable-info">
                                            <div class="collapse expandable-collapse" id="collapseExample5">
                                                <div class="row">
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                        <!-- review-user -->
                                                        <div class="review-user">
                                                            <div class="user-img"> <img src="images/review-pic-2.jpg" alt="star rating jquery" class="rounded-circle"></div>
                                                            <div class="user-meta">
                                                                <span class="user-name">ebony@gmail.com</span>
                                                                <span class="user-review-date">14 May, 2018</span>
                                                                <div class="given-review">
                                                                    <span class="rated"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="far fa-star"></i> 

                                                        </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- /.review-user -->
                                                        <!-- review-descripttions -->
                                                        <div class="review-descriptions">
                                                            <p>Donec accumsan consequat massa non gravida. Morbi pharetra mollis tortor ac maximus. Nunc dapibus bibendum urna, in egestas dolor. Class aptent taciti sociosqu ad litora torquent per conubia nostra.Fusce ullamcorper sit amet augue a volutpat. Cras ultrices dictum ante vel iaculis. Aenean molestie molestie elementum. Nullam semper vel mauris et semper. </p>
                                                            <div class="row">
                                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                                    <!-- review-list -->
                                                                    <div class="review-list">
                                                                        <div class="review-for">Quality Service</div>
                                                                        <div class="review-rating"><span class="rated"><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="far  fa-star"></i> </span></div>
                                                                        <div class="review-number">4</div>
                                                                    </div>
                                                             
                                                                <!-- /.review-list -->
                                                               
                                                                    <!-- review-list -->
                                                                    <div class="review-list">
                                                                        <div class="review-for">Facilities</div>
                                                                        <div class="review-rating"><span class="rated"><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="far fa-star"></i> </span></div>
                                                                        <div class="review-number">4</div>
                                                                    </div>
                                                               
                                                                    <!-- /.review-list -->
                                                                    <!-- review-list -->
                                                                    <div class="review-list">
                                                                        <div class="review-for">Staff</div>
                                                                        <div class="review-rating"><span class="rated"><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="far fa-star"></i> </span></div>
                                                                        <div class="review-number">4</div>
                                                                    </div>
                                                               
                                                                    <!-- /.review-list -->
                                                                    <!-- review-list -->
                                                                    <div class="review-list">
                                                                        <div class="review-for">Flexibility</div>
                                                                        <div class="review-rating"><span class="rated"><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="far fa-star"></i> </span></div>
                                                                        <div class="review-number">4</div>
                                                                    </div>
                                                               
                                                                    <!-- /.review-list -->
                                                                    <!-- review-list -->
                                                                    <div class="review-list">
                                                                        <div class="review-for">Value of money</div>
                                                                        <div class="review-rating"><span class="rated"><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="far fa-star"></i> </span></div>
                                                                        <div class="review-number">4</div>
                                                                    </div>
                                                                </div>
                                                                <!-- /.review-list -->
                                                            </div>
                                                        </div>
                                                        <!-- /.review-descripttions -->
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="review-summary-name">Minnie C. Nicholson</td>
                                        <td class="review-summary-rating"> <span class="rated"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></span><span class="ml-2">5</span></td>
                                        <td class="review-summary-id">minnecnicholson@gmail.com</td>
                                        <td class="review-summary-time">5 hours ago</td>
                                        <td class="review-summary-action"><a class="btn btn-outline-pink btn-xs" data-toggle="collapse" id="example-six" data-text-swap="close" data-text-original="Details" href="#collapseExample6" aria-expanded="false" aria-controls="collapseExample">Details  </a></td>
                                    </tr>
                                    <tr>
                                        <td colspan="12" class="expandable-info">
                                            <div class="collapse expandable-collapse" id="collapseExample6">
                                                <div class="row">
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                        <!-- review-user -->
                                                        <div class="review-user">
                                                            <div class="user-img"> <img src="images/review-pic-3.jpg" alt="star rating jquery" class="rounded-circle"></div>
                                                            <div class="user-meta">
                                                                <span class="user-name">Minnie C. Nicholson</span>
                                                                <span class="user-review-date">14 May, 2018</span>
                                                                <div class="given-review">
                                                                    <span class="rated"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> 

                                                        </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- /.review-user -->
                                                        <!-- review-descripttions -->
                                                        <div class="review-descriptions">
                                                            <p>Donec accumsan consequat massa non gravida. Morbi pharetra mollis tortor ac maximus. Nunc dapibus bibendum urna, in egestas dolor. Class aptent taciti sociosqu ad litora torquent per conubia nostra.Fusce ullamcorper sit amet augue a volutpat. Cras ultrices dictum ante vel iaculis. Aenean molestie molestie elementum. Nullam semper vel mauris et semper. </p>
                                                            <div class="row">
                                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                                    <!-- review-list -->
                                                                    <div class="review-list">
                                                                        <div class="review-for">Quality Service</div>
                                                                        <div class="review-rating"><span class="rated"><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas  fa-star"></i> </span></div>
                                                                        <div class="review-number">5</div>
                                                                    </div>
                                                               
                                                                <!-- /.review-list -->
                                                              
                                                                    <!-- review-list -->
                                                                    <div class="review-list">
                                                                        <div class="review-for">Facilities</div>
                                                                        <div class="review-rating"><span class="rated"><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> </span></div>
                                                                        <div class="review-number">5</div>
                                                                    </div>
                                                              
                                                                    <!-- /.review-list -->
                                                                    <!-- review-list -->
                                                                    <div class="review-list">
                                                                        <div class="review-for">Staff</div>
                                                                        <div class="review-rating"><span class="rated"><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> </span></div>
                                                                        <div class="review-number">5</div>
                                                                    </div>
                                                              
                                                                    <!-- /.review-list -->
                                                                    <!-- review-list -->
                                                                    <div class="review-list">
                                                                        <div class="review-for">Flexibility</div>
                                                                        <div class="review-rating"><span class="rated"><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> </span></div>
                                                                        <div class="review-number">5</div>
                                                                    </div>
                                                               
                                                                    <!-- /.review-list -->
                                                                    <!-- review-list -->
                                                                    <div class="review-list">
                                                                        <div class="review-for">Value of money</div>
                                                                        <div class="review-rating"><span class="rated"><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> </span></div>
                                                                        <div class="review-number">5</div>
                                                                    </div>
                                                                </div>
                                                                <!-- /.review-list -->
                                                            </div>
                                                        </div>
                                                        <!-- /.review-descripttions -->
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
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
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/offcanvas.js"></script>
        <script src="js/jquery.nice-select.min.js"></script>
        <script src="js/custom-script.js"></script>
        <script src="js/fastclick.js"></script>
    <script>
        $("#example-one, #example-two, #example-three, #example-four, #example-five, #example-six  ").on("click", function() {
            var el = $(this);
            el.text() == el.data("text-swap") ?
                el.text(el.data("text-original")) :
                el.text(el.data("text-swap"));
        });
        </script>
</body>

</html>