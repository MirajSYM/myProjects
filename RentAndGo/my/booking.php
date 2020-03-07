<!DOCTYPE html>
<?php
session_start();

$servername = "localhost";
$userName = "root";
$password = "";
$dbname = "myrent_db";

// Create connection
$conn = new mysqli($servername, $userName, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$username = $_SESSION['username'];
?>

<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--=== Favicon ===-->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

    <title>Rent&Go</title>

    <!--=== Bootstrap CSS ===-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!--=== Animate CSS ===-->
    <link href="assets/css/plugins/animate.css" rel="stylesheet">
    <!--=== Vegas Min CSS ===-->
    <link href="assets/css/plugins/vegas.min.css" rel="stylesheet">
    <!--=== Slicknav CSS ===-->
    <link href="assets/css/plugins/slicknav.min.css" rel="stylesheet">
    <!--=== Magnific Popup CSS ===-->
    <link href="assets/css/plugins/magnific-popup.css" rel="stylesheet">
    <!--=== Owl Carousel CSS ===-->
    <link href="assets/css/plugins/owl.carousel.min.css" rel="stylesheet">
    <!--=== Gijgo CSS ===-->
    <link href="assets/css/plugins/gijgo.css" rel="stylesheet">
    <!--=== FontAwesome CSS ===-->
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <!--=== Theme Reset CSS ===-->
    <link href="assets/css/reset.css" rel="stylesheet">
    <!--=== Main Style CSS ===-->
    <link href="style.css" rel="stylesheet">
    <!--=== Responsive CSS ===-->
    <link href="assets/css/responsive.css" rel="stylesheet">


    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="loader-active">

    <!--== Preloader Area Start ==-->
    <div class="preloader">
        <div class="preloader-spinner">
            <div class="loader-content">
                <img src="assets/img/preloader.gif" alt="JSOFT">
            </div>
        </div>
    </div>
    <!--== Preloader Area End ==-->

    <!--== Header Area Start ==-->
    <header id="header-area" class="fixed-top">
        <!--== Header Top Start ==-->
        <div id="header-top" class="d-none d-xl-block">
            <div class="container">
                <div class="row">
                    <!--== Single HeaderTop Start ==-->
                    <div class="col-lg-3 text-left">
                        <i class="fa fa-map-marker"></i> Skudai, Johor Bahru, Malaysia
                    </div>
                    <!--== Single HeaderTop End ==-->

                    <!--== Single HeaderTop Start ==-->
                    <div class="col-lg-3 text-center">
                        <i class="fa fa-mobile"></i> +60 0123456789
                    </div>
                    <!--== Single HeaderTop End ==-->

                    <!--== Single HeaderTop Start ==-->
                    <div class="col-lg-3 text-center">
                        <i class="fa fa-clock-o"></i> Weekdays 09.00 - 17.00 Weekends 09.00 - 15.30
                    </div>
                    <!--== Single HeaderTop End ==-->

                    <!--== Social Icons Start ==-->
                    <div class="col-lg-3 text-right">
                        <div class="header-social-icons">
                            <a href="#"><i class="fa fa-behance"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                    <!--== Social Icons End ==-->
                </div>
            </div>
        </div>
        <!--== Header Top End ==-->

        <!--== Header Bottom Start ==-->
        <div id="header-bottom">
            <div class="container">
                <div class="row">
                    <!--== Logo Start ==-->
                    <div class="col-lg-4">
                        <a href="index.html" class="logo">
                            <img src="assets/img/logo.png" alt="JSOFT">
                        </a>
                    </div>
                    <!--== Logo End ==-->

                    <!--== Main Menu Start ==-->
                    <div class="col-lg-8 d-none d-xl-block">
                        <nav class="mainmenu alignright">
                            <ul>
                                <li><a href="index.html">Home</a>
                                </li>
                                <li><a href="about.html">About</a></li>
                                <li><a href="services.html">Services</a></li>
                                <li><a href="car-right-sidebar.html">Cars</a>

                                </li>
                                <li><a href="help-desk.html">Help Desk</a></li>
                                <li><a href="user-map.php">Delivery</a></li>
                                <li><a href="faq.html">FAQ</a></li>
                                <li><a href="contact.html">Contact</a></li>
                                <li><a href="Account.php">Account</a></li>
							   <li class="active"><a href="booking.php">Booking</a></li>
							   <li><a href="Log out\index.html">Log Out</a></li>
                            </ul>
                        </nav>
                    </div>
                    <!--== Main Menu End ==-->
                </div>
            </div>
        </div>
        <!--== Header Bottom End ==-->
    </header>
    <!--== Header Area End ==-->

    <!--== Slider Area Start ==-->
    <section id="home-slider-area">
        <div class="home-slider-item slider-bg-1 overlay">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="slideshowcontent">
                            <h1>BOOK A CAR TODAY!</h1>
                            <p>FOR AS LOW AS RM100 A DAY PLUS 15% DISCOUNT <br> FOR OUR RETURNING CUSTOMERS</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="home-slider-item slider-bg-2 overlay">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="slideshowcontent">
                            <h1>SAVE YOUR MONEY</h1>
                            <p>FOR AS LOW AS RM100 A DAY PLUS 15% DISCOUNT <br> FOR OUR RETURNING CUSTOMERS</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="home-slider-item slider-bg-3 overlay">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="slideshowcontent">
                            <h1>ENJOY YOUR JOURNEY</h1>
                            <p>FOR AS LOW AS RM100 A DAY PLUS 15% DISCOUNT <br> FOR OUR RETURNING CUSTOMERS</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== Slider Area End ==-->
    <?php
    $query = "SELECT * FROM `user` WHERE username='$username'";
    $result = $conn->query($query);
    $row = $result->fetch_assoc();
    if ($row["verified"] == '0')
    {
      echo "<p class=\"topparagraph\">Cannot book car till Admin verify you!</p>";
    	$landingpage = "Account.php";
    }
    else{
    // Book A Car Area Start ==-->
     echo '<div id="book-a-car">';
       echo '  <div class="container">';
           echo '  <div class="row">';
         echo '        <div class="col-lg-12">';
   echo '              <div class="booka-car-content">';
                   echo '  <div class="booka-car-content">';
                       echo '<form method="post" action="Payment.php?id='.urlencode($username).'">';
                          echo  '<div class="pick-location bookinput-item">';
                              echo  '<select class="custom-select" name="location">';
                                echo  '<option selected>PickUp Location</option>';
                              echo    '<option value="Skudai">Skudai</option>';
                            echo      '<option value="Senai">Senai</option>';
                                echo  '<option value="Johor Bahru">Johor Bahru</option>';
                              echo    '<option value="Tampoi">Tampoi</option>';
                            echo    '</select>';
                          echo  '</div>';

                        echo    '<div class="input-group date bookinput-item">';
                        echo        '<input class="form-control" id="startDate2" placeholder="PickUp Date" name="pick_date" style="color:black"/>';
                      echo      '</div>';

                        echo    '<div class="input-group date bookinput-item">';
                      echo          '<input class="form-control" id="endDate2" placeholder="Return Date" name="return_date" style="color:black"/>';
                          echo  '</div>';

                      echo      '<div class="car-choose bookinput-item" >';
                        echo        '<select class="custom-select" name="car_type">';
                    echo              '<option selected>Choose Car</option>';
                echo                  '<option value="Myvi">Myvi</option>';
            echo                      '<option value="Alza">Alza</option>';
        echo                          '<option value="Axia">Axia</option>';
    echo                        '</select>';
echo                            '</div>';
                            echo '<div class="bookcar-btn bookinput-item">';
                            echo '<button type="submit" name="bookCar">Book Car</button>';
                      echo      '</div>';
                  echo      '</form>';
              echo      '</div>';
          echo      '</div>';
      echo      '</div>';
  echo      '</div>';
  echo  '</div>';
}
  ?>
    <!--== Book A Car Area End ==-->

    <!--== What We Do Area Start ==-->
    <section id="what-do-area" class="section-padding">
        <div class="container">
            <div class="row">
                <!-- Section Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>OUR MOTTO</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>We give the best car rent experience for everyone</p>
                    </div>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="row">
                <!-- Single We Do Start -->
                <div class="col-lg-4 col-md-4">
                    <div class="single-we-do we-do-bg-1">
                        <div class="we-do-content">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <h3>CAR INSPECTION</h3>
                                    <p>Erspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single We Do End -->

                <!-- Single We Do Start -->
                <div class="col-lg-4 col-md-4">
                    <div class="single-we-do we-do-bg-2">
                        <div class="we-do-content">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <h3>CAR INSPECTION</h3>
                                    <p>Erspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single We Do End -->

                <!-- Single We Do Start -->
                <div class="col-lg-4 col-md-4">
                    <div class="single-we-do we-do-bg-3">
                        <div class="we-do-content">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <h3>CAR INSPECTION</h3>
                                    <p>Erspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single We Do End -->
            </div>
        </div>
    </section>
    <!--== What We Do Area End ==-->

    <!--== Partner Area Start ==-->
    <div id="partner-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="partner-content-wrap">
                        <!-- Single Partner Start -->
                        <div class="single-partner">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <img src="assets/img/partner/partner-logo-1.png" alt="JSOFT">
                                </div>
                            </div>
                        </div>
                        <!-- Single Partner End -->

                        <!-- Single Partner Start -->
                        <div class="single-partner">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <img src="assets/img/partner/partner-logo-2.png" alt="JSOFT">
                                </div>
                            </div>
                        </div>
                        <!-- Single Partner End -->

                        <!-- Single Partner Start -->
                        <div class="single-partner">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <img src="assets/img/partner/partner-logo-3.png" alt="JSOFT">
                                </div>
                            </div>
                        </div>
                        <!-- Single Partner End -->

                        <!-- Single Partner Start -->
                        <div class="single-partner">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <img src="assets/img/partner/partner-logo-4.png" alt="JSOFT">
                                </div>
                            </div>
                        </div>
                        <!-- Single Partner End -->

                        <!-- Single Partner Start -->
                        <div class="single-partner">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <img src="assets/img/partner/partner-logo-5.png" alt="JSOFT">
                                </div>
                            </div>
                        </div>
                        <!-- Single Partner End -->

                        <!-- Single Partner Start -->
                        <div class="single-partner">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <img src="assets/img/partner/partner-logo-1.png" alt="JSOFT">
                                </div>
                            </div>
                        </div>
                        <!-- Single Partner End -->

                        <!-- Single Partner Start -->
                        <div class="single-partner">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <img src="assets/img/partner/partner-logo-4.png" alt="JSOFT">
                                </div>
                            </div>
                        </div>
                        <!-- Single Partner End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--== Partner Area End ==-->

    <!--== Services Area Start ==-->
    <section id="service-area" class="section-padding">
        <div class="container">
            <div class="row">
                <!-- Section Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Our Services</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>The most premium car rent service you can get.</p>
                    </div>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="row">
                <!-- Single Service Start -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-service">
                        <div class="media">
                            <div class="service-icon">
                                <span></span>
                                <img src="assets/img/services/service-icon-1.png" alt="JSOFT">
                            </div>
                            <div class="media-body">
                                <h4>RENTAL CAR</h4>
                                <p>Rent a great car with inexpensive prices</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Service Start -->

                <!-- Single Service Start -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-service">
                        <div class="media">
                            <div class="service-icon">
                                <span></span>
                                <img src="assets/img/services/service-icon-5.png" alt="JSOFT">
                            </div>
                            <div class="media-body">
                                <h4>car wash</h4>
                                <p>You can be a celebrity for a full night and half days with a nice one of our amazing Limousines, Hummers.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Service Start -->

                <!-- Single Service Start -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-service">
                        <div class="media">
                            <div class="service-icon">
                                <span></span>
                                <img src="assets/img/services/service-icon-6.png" alt="JSOFT">
                            </div>
                            <div class="media-body">
                                <h4>Call driver</h4>
                                <p>You can be a celebrity for a full night and half days with a nice one of our amazing Limousines, Hummers.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Service Start -->
            </div>
        </div>
    </section>
    <!--== Services Area End ==-->

    <!--== Fun Fact Area Start ==-->
    <section id="funfact-area" class="overlay section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-11 col-md-12 m-auto">
                    <div class="funfact-content-wrap">
                        <div class="row">
                            <!-- Single FunFact Start -->
                            <div class="col-lg-4 col-md-6">
                                <div class="single-funfact">
                                    <div class="funfact-icon">
                                        <i class="fa fa-smile-o"></i>
                                    </div>
                                    <div class="funfact-content">
                                        <p><span class="counter">550</span>+</p>
                                        <h4>GOOD REVIEWS</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- Single FunFact End -->

                            <!-- Single FunFact Start -->
                            <div class="col-lg-4 col-md-6">
                                <div class="single-funfact">
                                    <div class="funfact-icon">
                                        <i class="fa fa-car"></i>
                                    </div>
                                    <div class="funfact-content">
                                        <p><span class="counter">50</span>+</p>
                                        <h4>CARS IN STOCK</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- Single FunFact End -->

                            <!-- Single FunFact Start -->
                            <div class="col-lg-4 col-md-6">
                                <div class="single-funfact">
                                    <div class="funfact-icon">
                                        <i class="fa fa-bank"></i>
                                    </div>
                                    <div class="funfact-content">
                                        <p><span class="counter">5</span>+</p>
                                        <h4>office in cities</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- Single FunFact End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== Fun Fact Area End ==-->

    <!--== Our Cars Area Start ==-->
    <section id="our-cars" class="section-padding">
        <div class="container">
            <div class="row">
                <!-- Section Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Our cars</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>WE SERVE THE BEST CAR FOR YOUR BEST EXPERIENCE</p>
                    </div>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="team-content">
                        <div class="row">
                            <!-- OurCars Tab Menu start -->
                            <div class="col-lg-3">
                                <div class="ourcar-tab-menu">
                                    <ul class="nav nav-tabs" id="ourcartabmenu" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="ourcar_item_1" data-toggle="tab" href="#ourcar_1" role="tab" aria-selected="true">VW Golf VII</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="ourcar_item_2" data-toggle="tab" href="#ourcar_2" role="tab" aria-selected="true">Audi A1 S-LINE</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="ourcar_item_3" data-toggle="tab" href="#ourcar_3" role="tab" aria-selected="true">VW Golf VII</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="ourcar_item_4" data-toggle="tab" href="#ourcar_4" role="tab" aria-selected="true">Audi A1 S-LINE</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="ourcar_item_5" data-toggle="tab" href="#ourcar_5" role="tab" aria-selected="true">VW Golf VII</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- OurCars Tab Menu End -->

                            <!-- OurCars Tab Content start -->
                            <div class="col-lg-9">
                                <div class="tab-content" id="ourcartabcontent">
                                    <!-- Single OurCars  start -->
                                    <div class="tab-pane fade show active" id="ourcar_1" role="tabpanel" aria-labelledby="ourcar_item_1">
                                        <div class="row">
                                            <div class="col-lg-8 text-center">
                                                <div class="display-table">
                                                    <div class="display-table-cell">
                                                        <div class="ourcar-pic">
                                                            <img src="assets/img/car/car-5.jpg" alt="JSOFT">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4">
                                                <div class="ourcar-info text-center">
                                                    <h2>RM 300.00 <span>Rent per day</span></h2>
                                                    <table class="our-table">
                                                        <tr>
                                                            <td>Model</td>
                                                            <td>Sport</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Doors</td>
                                                            <td>5</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Seats</td>
                                                            <td>4</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Transmission</td>
                                                            <td>Automatic</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Air conditioning</td>
                                                            <td>Yes</td>
                                                        </tr>
                                                    </table>
                                                    <a href="booking.php" class="bookbtn">Book Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single OurCars End -->

                                    <!-- Single OurCars  start -->
                                    <div class="tab-pane fade" id="ourcar_2" role="tabpanel" aria-labelledby="ourcar_item_2">
                                        <div class="row">
                                            <div class="col-lg-8 text-center">
                                                <div class="display-table">
                                                    <div class="display-table-cell">
                                                        <div class="ourcar-pic">
                                                            <img src="assets/img/car/car-1.jpg" alt="JSOFT">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4">
                                                <div class="ourcar-info text-center">
                                                    <h2>RM 350.00 <span>Rent per day</span></h2>
                                                    <table class="our-table">
                                                        <tr>
                                                            <td>Model</td>
                                                            <td>Sport</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Doors</td>
                                                            <td>5</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Seats</td>
                                                            <td>4</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Transmission</td>
                                                            <td>Automatic</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Air conditioning</td>
                                                            <td>Yes</td>
                                                        </tr>
                                                    </table>
                                                    <a href="booking.php" class="bookbtn">Book Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single OurCars End -->

                                    <!-- Single OurCars  start -->
                                    <div class="tab-pane fade" id="ourcar_3" role="tabpanel" aria-labelledby="ourcar_item_3">
                                        <div class="row">
                                            <div class="col-lg-8 text-center">
                                                <div class="display-table">
                                                    <div class="display-table-cell">
                                                        <div class="ourcar-pic">
                                                            <img src="assets/img/car/car-2.jpg" alt="JSOFT">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4">
                                                <div class="ourcar-info text-center">
                                                    <h2>RM 320.00 <span>Rent per day</span></h2>
                                                    <table class="our-table">
                                                        <tr>
                                                            <td>Model</td>
                                                            <td>Sport</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Doors</td>
                                                            <td>5</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Seats</td>
                                                            <td>4</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Transmission</td>
                                                            <td>Automatic</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Air conditioning</td>
                                                            <td>Yes</td>
                                                        </tr>
                                                    </table>
                                                    <a href="booking.php" class="bookbtn">Book Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single OurCars End -->

                                    <!-- Single OurCars  start -->
                                    <div class="tab-pane fade" id="ourcar_4" role="tabpanel" aria-labelledby="ourcar_item_4">
                                        <div class="row">
                                            <div class="col-lg-8 text-center">
                                                <div class="display-table">
                                                    <div class="display-table-cell">
                                                        <div class="ourcar-pic">
                                                            <img src="assets/img/car/car-3.jpg" alt="JSOFT">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4">
                                                <div class="ourcar-info text-center">
                                                    <h2>RM 300.00 <span>Rent per day</span></h2>
                                                    <table class="our-table">
                                                        <tr>
                                                            <td>Model</td>
                                                            <td>Sport</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Doors</td>
                                                            <td>5</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Seats</td>
                                                            <td>4</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Transmission</td>
                                                            <td>Automatic</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Air conditioning</td>
                                                            <td>Yes</td>
                                                        </tr>
                                                    </table>
                                                    <a href="booking.php" class="bookbtn">Book Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single OurCars End -->

                                    <!-- Single OurCars  start -->
                                    <div class="tab-pane fade" id="ourcar_5" role="tabpanel" aria-labelledby="ourcar_item_5">
                                        <div class="row">
                                            <div class="col-lg-8 text-center">
                                                <div class="display-table">
                                                    <div class="display-table-cell">
                                                        <div class="ourcar-pic">
                                                            <img src="assets/img/car/car-4.jpg" alt="JSOFT">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4">
                                                <div class="ourcar-info text-center">
                                                    <h2>RM 350.00 <span>Rent per day</span></h2>
                                                    <table class="our-table">
                                                        <tr>
                                                            <td>Model</td>
                                                            <td>Sport</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Doors</td>
                                                            <td>5</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Seats</td>
                                                            <td>5</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Transmission</td>
                                                            <td>Automatic</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Air conditioning</td>
                                                            <td>Yes</td>
                                                        </tr>
                                                    </table>
                                                    <a href="booking.php" class="bookbtn">Book Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single OurCars End -->
                                </div>
                            </div>
                            <!-- OurCars Tab Content End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== Our Cars Area End ==-->

    <!--== Pricing Area Start ==-->
    <section id="pricing-area" class="section-padding overlay">
        <div class="container">
            <div class="row">
                <!-- Section Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Only quality for clients</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>QUALITY OVER QUANTITY.</p>
                    </div>
                </div>
                <!-- Section Title End -->
            </div>

            <!-- Pricing Table Conatent Start -->
            <div class="row">
                <!-- Single Pricing Table -->
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="single-pricing-table">
                        <h3>BUSINESS</h3>
                        <h2>RM 2499.99</h2>
                        <h5>PER MONTH</h5>

                        <ul class="package-list">
                            <li>FREE VEHICLE DELIVERY</li>
                            <li>WEDDINGS CELEBRATIONS</li>
                            <li>FULL INSURANCE INCLUDED</li>
                            <li>TRANSPORT ABROAD</li>
                            <li>ALL INCLUSIVE MINI BAR</li>
                            <li>CHAUFFER INCLUDED IN PRICE</li>
                            <li>DEPOSIT EXCLUDED</li>
                        </ul>
                    </div>
                </div>
                <!-- Single Pricing Table -->

                <!-- Single Pricing Table -->
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="single-pricing-table">
                        <h3>Trial</h3>
                        <h2>Free</h2>
                        <h5>ONE MONTH</h5>

                        <ul class="package-list">
                            <li>FREE VEHICLE DELIVERY</li>
                            <li>OTHER CELEBRATIONS</li>
                            <li>FULL INSURANCE</li>
                            <li>TRANSPORT ABROAD</li>
                            <li>MINI BAR</li>
                            <li>INCLUDED IN PRICE</li>
                            <li>DEPOSIT EXCLUDED</li>
                        </ul>
                    </div>
                </div>
                <!-- Single Pricing Table -->

                <!-- Single Pricing Table -->
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="single-pricing-table">
                        <h3>standard</h3>
                        <h2>RM 1999.99</h2>
                        <h5>PER MONTH</h5>

                        <ul class="package-list">
                            <li>DELIVERY AT AIRPORT</li>
                            <li>WEDDINGS AND OTHER</li>
                            <li>FULL INCLUDED</li>
                            <li>TRANSPORT ABROAD</li>
                            <li>ALL MINI BAR</li>
                            <li>CHAUFFER PRICE</li>
                            <li>DEPOSIT EXCLUDED</li>
                        </ul>
                    </div>
                </div>
                <!-- Single Pricing Table -->
            </div>
            <!-- Pricing Table Conatent End -->
        </div>
    </section>
    <!--== Pricing Area End ==-->

    <!--== Mobile App Area Start ==-->
    <div id="mobileapp-video-bg"></div>
    <section id="mobile-app-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="mobile-app-content">
                        <h2>SAVE 30% WITH THE APP</h2>
                        <p>Easy &amp; Fast - Book a car in 60 seconds</p>
                        <div class="app-btns">
                            <a href="#"><i class="fa fa-android"></i> Android Store</a>
                            <a href="#"><i class="fa fa-apple"></i> Apple Store</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== Mobile App Area End ==-->

    <!--== Articles Area Start ==-->
    <section id="tips-article-area" class="section-padding">
        <div class="container">
            <div class="row">
                <!-- Section Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Tips and articles</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>TIPS AND ARTICLES ABOUT CARS THAT YOU MIGHT LIKE.</p>
                    </div>
                </div>
                <!-- Section Title End -->
            </div>

            <!-- Articles Content Wrap Start -->
            <div class="row">
                <!-- Single Articles Start -->
                <div class="col-lg-12">
                    <article class="single-article">
                        <div class="row">
                            <!-- Articles Thumbnail Start -->
                            <div class="col-lg-5">
                                <div class="article-thumb">
                                    <img src="assets/img/article/arti-thumb-1.jpg" alt="JSOFT">
                                </div>
                            </div>
                            <!-- Articles Thumbnail End -->

                            <!-- Articles Content Start -->
                            <div class="col-lg-7">
                                <div class="display-table">
                                    <div class="display-table-cell">
                                        <div class="article-body">
                                            <h3><a href="article-details.html">2018 BEST CAR ON AUTOMOTIVE FESTIVAL IN CHICHAGO</a></h3>
                                            <div class="article-meta">
                                                <a href="#" class="author">By :: <span>Abi Manyu</span></a>
                                                <a href="#" class="commnet">Comments :: <span>10</span></a>
                                            </div>

                                            <div class="article-date">25 <span class="month">jan</span></div>

                                            <p>The yearly automotive festival has been held in Chichago on 25th January 2019, one of the largest automotive festival shown a lot of ...</p>

                                            <a href="article-details.html" class="readmore-btn">Read More <i class="fa fa-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Articles Content End -->
                        </div>
                    </article>
                </div>
                <!-- Single Articles End -->

                <!-- Single Articles Start -->
                <div class="col-lg-12">
                    <article class="single-article middle">
                        <div class="row">

                            <!-- Articles Thumbnail Start -->
                            <div class="col-lg-5 d-xl-none">
                                <div class="article-thumb">
                                    <img src="assets/img/article/arti-thumb-2.jpg" alt="JSOFT">
                                </div>
                            </div>
                            <!-- Articles Thumbnail End -->

                            <!-- Articles Content Start -->
                            <div class="col-lg-7">
                                <div class="display-table">
                                    <div class="display-table-cell">
                                        <div class="article-body">
                                            <h3><a href="article-details.html">The things that you need to know before buying a car</a></h3>
                                            <div class="article-meta">
                                                <a href="#" class="author">By :: <span>Someone</span></a>
                                                <a href="#" class="commnet">Comments :: <span>10</span></a>
                                            </div>

                                            <div class="article-date">14<span class="month">feb</span></div>

                                            <p>When you buy a car, there is a lot of things that you need to know before deciding what car you want to use, here is the tips.</p>

                                            <a href="article-details.html" class="readmore-btn">Read More <i class="fa fa-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Articles Content End -->

                            <!-- Articles Thumbnail Start -->
                            <div class="col-lg-5 d-none d-xl-block">
                                <div class="article-thumb">
                                    <img src="assets/img/article/arti-thumb-2.jpg" alt="JSOFT">
                                </div>
                            </div>
                            <!-- Articles Thumbnail End -->
                        </div>
                    </article>
                </div>
                <!-- Single Articles End -->

                <!-- Single Articles Start -->
                <div class="col-lg-12">
                    <article class="single-article">
                        <div class="row">
                            <!-- Articles Thumbnail Start -->
                            <div class="col-lg-5">
                                <div class="article-thumb">
                                    <img src="assets/img/article/arti-thumb-3.jpg" alt="JSOFT">
                                </div>
                            </div>
                            <!-- Articles Thumbnail End -->

                            <!-- Articles Content Start -->
                            <div class="col-lg-7">
                                <div class="display-table">
                                    <div class="display-table-cell">
                                        <div class="article-body">
                                            <h3><a href="article-details.html">How to maintain your car</a></h3>
                                            <div class="article-meta">
                                                <a href="#" class="author">By :: <span>Admin</span></a>
                                                <a href="#" class="commnet">Comments :: <span>10</span></a>
                                            </div>

                                            <div class="article-date">17 <span class="month">feb</span></div>

                                            <p>Car maintenance is important for the long-term use of a car, here is how you maintain your car for daily use.</p>

                                            <a href="article-details.html" class="readmore-btn">Read More <i class="fa fa-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Articles Content End -->
                        </div>
                    </article>
                </div>
                <!-- Single Articles End -->
            </div>
            <!-- Articles Content Wrap End -->
        </div>
    </section>
    <!--== Articles Area End ==-->

    <!--== Footer Area Start ==-->
    <section id="footer-area">
        <!-- Footer Widget Start -->
        <div class="footer-widget-area">
            <div class="container">
                <div class="row">
                    <!-- Single Footer Widget Start -->
                    <div class="col-lg-4 col-md-6">
                        <div class="single-footer-widget">
                            <h2>About Us</h2>
                            <div class="widget-body">
                                <img src="assets/img/logo.png" alt="JSOFT">
                                <p>We are a small business that run in the field of car management such as car rental, car maintenance, and driver services. We start in 2016 based on skudai,Johor Bahru. Now we have grown larger and start to open put franchise in 5 place in Johor Bahru and expanding to another city.</p>

                                <div class="newsletter-area">
                                    <form action="index.html">
                                        <input type="email" placeholder="Subscribe Our Newsletter">
                                        <button type="submit" class="newsletter-btn"><i class="fa fa-send"></i></button>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- Single Footer Widget End -->

                    <!-- Single Footer Widget Start -->
                    <div class="col-lg-4 col-md-6">
                        <div class="single-footer-widget">
                            <h2>Recent Posts</h2>
                            <div class="widget-body">
                                <ul class="recent-post">
                                    <li>
                                        <a href="#">
                                           Hello Malaysia!
                                           <i class="fa fa-long-arrow-right"></i>
                                       </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                          Start your business
                                           <i class="fa fa-long-arrow-right"></i>
                                       </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                           Become a partner!
                                           <i class="fa fa-long-arrow-right"></i>
                                       </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            From zero to hero?
                                           <i class="fa fa-long-arrow-right"></i>
                                       </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Single Footer Widget End -->

                    <!-- Single Footer Widget Start -->
                    <div class="col-lg-4 col-md-6">
                        <div class="single-footer-widget">
                            <h2>get touch</h2>

                                <ul class="get-touch">
                                    <li><i class="fa fa-map-marker"></i> Skudai, Johor Bahru</li>
                                    <li><i class="fa fa-mobile"></i> +601128672592</li>
                                    <li><i class="fa fa-envelope"></i> Rent&Go@business.com</li>
                                </ul>
                                <a href="https://goo.gl/maps/b5mt45MCaPB2" class="map-show" target="_blank">Show Location</a>
                            </div>
                        </div>
                    </div>
                    <!-- Single Footer Widget End -->
                </div>
            </div>
        </div>
        <!-- Footer Widget End -->

        <!-- Footer Bottom Start -->
        <div class="footer-bottom-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Bottom End -->
    </section>
    <!--== Footer Area End ==-->

    <!--== Scroll Top Area Start ==-->
    <div class="scroll-top">
        <img src="assets/img/scroll-top.png" alt="JSOFT">
    </div>
    <!--== Scroll Top Area End ==-->

    <!--=======================Javascript============================-->
    <!--=== Jquery Min Js ===-->
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <!--=== Jquery Migrate Min Js ===-->
    <script src="assets/js/jquery-migrate.min.js"></script>
    <!--=== Popper Min Js ===-->
    <script src="assets/js/popper.min.js"></script>
    <!--=== Bootstrap Min Js ===-->
    <script src="assets/js/bootstrap.min.js"></script>
    <!--=== Gijgo Min Js ===-->
    <script src="assets/js/plugins/gijgo.js"></script>
    <!--=== Vegas Min Js ===-->
    <script src="assets/js/plugins/vegas.min.js"></script>
    <!--=== Isotope Min Js ===-->
    <script src="assets/js/plugins/isotope.min.js"></script>
    <!--=== Owl Caousel Min Js ===-->
    <script src="assets/js/plugins/owl.carousel.min.js"></script>
    <!--=== Waypoint Min Js ===-->
    <script src="assets/js/plugins/waypoints.min.js"></script>
    <!--=== CounTotop Min Js ===-->
    <script src="assets/js/plugins/counterup.min.js"></script>
    <!--=== YtPlayer Min Js ===-->
    <script src="assets/js/plugins/mb.YTPlayer.js"></script>
    <!--=== Magnific Popup Min Js ===-->
    <script src="assets/js/plugins/magnific-popup.min.js"></script>
    <!--=== Slicknav Min Js ===-->
    <script src="assets/js/plugins/slicknav.min.js"></script>

    <!--=== Mian Js ===-->
    <script src="assets/js/main.js"></script>

</body>

</html>
