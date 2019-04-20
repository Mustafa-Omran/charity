<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img/favicon.png" type="image/png">
    <title>جمعية خيرية</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="vendors/linericon/style.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
    <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
    <link rel="stylesheet" href="vendors/animate-css/animate.css">
    <link rel="stylesheet" href="vendors/jquery-ui/jquery-ui.css">

    <!-- main css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>

<body>

    <!--================Header Menu Area =================-->
    <header class="header_area">
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="index.html">
                        <img src="img/logo.jpeg" alt="" style="height: 60px; width: 150">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <div class="row ml-0 w-100">
                            <div class="col-lg-12 pr-0">
                                <ul class="nav navbar-nav center_nav pull-right">
                                    <li class="nav-item">
                                        @if (Auth::check())
                                        <a class="nav-link" href="{{ url('/admin') }}">حسابي</a>
                                        @else
                                        <a class="nav-link" href="{{ url('/admin/login') }}">دخول</a>
                                        @endif
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link" href="causes.html">تبرع</a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link" href="events.html">محتاج مساعدة</a>
                                    </li>
                                    <li class="nav-item active">
                                        <a class="nav-link" href="index.html">الرئيسية</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!--================Header Menu Area =================-->

    <!--================ Home Banner Area =================-->
    <section class="home_banner_area">
        <div class="overlay"></div>
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content row">
                    <div class="offset-lg-2 col-lg-8">
                        <img class="img-fluid" src="img/banner/text-img.png" alt="">
                        <p>احمد الشقيري<br> إمتناعك عن إلقاء القمامة في الشارع يعني توفيرك إنحناءة لظهر عامل النظافة<br> فهل من إحسان لديكم ؟!</p>
                        <a class="main_btn mr-10" href="#">تبرع اﻻن</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Home Banner Area =================-->


    <!--================ Start important-points section =================-->
    <section class="donation_details pad_top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 single_donation_box">
                    <img src="img/icons/home1.png" alt="">
                    <h4>Total Donation</h4>
                    <p>
                        The French Revolutioncons tituted for the conscience of the dominant.
                    </p>
                </div>
                <div class="col-lg-3 col-md-6 single_donation_box">
                    <img src="img/icons/home2.png" alt="">
                    <h4>Fund Raised</h4>
                    <p>
                        The French Revolutioncons tituted for the conscience of the dominant.
                    </p>
                </div>
                <div class="col-lg-3 col-md-6 single_donation_box">
                    <img src="img/icons/home3.png" alt="">
                    <h4>Highest Donation</h4>
                    <p>
                        The French Revolutioncons tituted for the conscience of the dominant.
                    </p>
                </div>
                <div class="col-lg-3 col-md-6 single_donation_box">
                    <img src="img/icons/home4.png" alt="">
                    <h4>Total Donation</h4>
                    <p>
                        The French Revolutioncons tituted for the conscience of the dominant.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!--================ End important-points section =================-->

    <!--================ Start Our Major Cause section =================-->
    <section class="our_major_cause section_gap">
        <div class="container">
            <div class="row justify-content-center section-title-wrap">
                <div class="col-lg-12">
                    <h1>Our Major Causes</h1>
                    <p>
                        The French Revolution constituted for the conscience of the dominant aristocratic class a fall from innocence the natural
                        chain of events.
                    </p>
                </div>
            </div>

            <div class="row">
                <div id="our-major-cause" class="owl-carousel">
                    <div class="card">
                        <div class="card-body">
                            <figure>
                                <img class="card-img-top img-fluid" src="img/donation/d1.jpg" alt="Card image cap">
                            </figure>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="76" aria-valuemin="0" aria-valuemax="100" style="width: 76%;">
                                    <span>Funded 76%</span>
                                </div>
                            </div>
                            <div class="card_inner_body">
                                <div class="card-body-top">
                                    <span>Raised: $7,689</span> / $10,000
                                </div>
                                <h4 class="card-title">Did not find your Package</h4>
                                <p class="card-text">inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially
                                    in the workplace that’s why it’s crucial.
                                </p>
                                <a href="#" class="main_btn2">donate here</a>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <figure>
                                <img class="card-img-top img-fluid" src="img/donation/d2.jpg" alt="Card image cap">
                            </figure>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="76" aria-valuemin="0" aria-valuemax="100" style="width: 76%;">
                                    <span>Funded 76%</span>
                                </div>
                            </div>
                            <div class="card_inner_body">
                                <div class="card-body-top">
                                    <span>Raised: $7,689</span> / $10,000
                                </div>
                                <h4 class="card-title">Did not find your Package</h4>
                                <p class="card-text">inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially
                                    in the workplace that’s why it’s crucial.
                                </p>
                                <a href="#" class="main_btn2">donate here</a>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <figure>
                                <img class="card-img-top img-fluid" src="img/donation/d3.jpg" alt="Card image cap">
                            </figure>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="76" aria-valuemin="0" aria-valuemax="100" style="width: 76%;">
                                    <span>Funded 76%</span>
                                </div>
                            </div>
                            <div class="card_inner_body">
                                <div class="card-body-top">
                                    <span>Raised: $7,689</span> / $10,000
                                </div>
                                <h4 class="card-title">Did not find your Package</h4>
                                <p class="card-text">inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially
                                    in the workplace that’s why it’s crucial.
                                </p>
                                <a href="#" class="main_btn2">donate here</a>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <figure>
                                <img class="card-img-top img-fluid" src="img/donation/d2.jpg" alt="Card image cap">
                            </figure>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="76" aria-valuemin="0" aria-valuemax="100" style="width: 76%;">
                                    <span>Funded 76%</span>
                                </div>
                            </div>
                            <div class="card_inner_body">
                                <div class="card-body-top">
                                    <span>Raised: $7,689</span> / $10,000
                                </div>
                                <h4 class="card-title">Did not find your Package</h4>
                                <p class="card-text">inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially
                                    in the workplace that’s why it’s crucial.
                                </p>
                                <a href="#" class="main_btn2">donate here</a>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <figure>
                                <img class="card-img-top img-fluid" src="img/donation/d3.jpg" alt="Card image cap">
                            </figure>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="76" aria-valuemin="0" aria-valuemax="100" style="width: 76%;">
                                    <span>Funded 76%</span>
                                </div>
                            </div>
                            <div class="card_inner_body">
                                <div class="card-body-top">
                                    <span>Raised: $7,689</span> / $10,000
                                </div>
                                <h4 class="card-title">Did not find your Package</h4>
                                <p class="card-text">inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially
                                    in the workplace that’s why it’s crucial.
                                </p>
                                <a href="#" class="main_btn2">donate here</a>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <figure>
                                <img class="card-img-top img-fluid" src="img/donation/d1.jpg" alt="Card image cap">
                            </figure>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="76" aria-valuemin="0" aria-valuemax="100" style="width: 76%;">
                                    <span>Funded 76%</span>
                                </div>
                            </div>
                            <div class="card_inner_body">
                                <div class="card-body-top">
                                    <span>Raised: $7,689</span> / $10,000
                                </div>
                                <h4 class="card-title">Did not find your Package</h4>
                                <p class="card-text">inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially
                                    in the workplace that’s why it’s crucial.
                                </p>
                                <a href="#" class="main_btn2">donate here</a>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <figure>
                                <img class="card-img-top img-fluid" src="img/donation/d2.jpg" alt="Card image cap">
                            </figure>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="76" aria-valuemin="0" aria-valuemax="100" style="width: 76%;">
                                    <span>Funded 76%</span>
                                </div>
                            </div>
                            <div class="card_inner_body">
                                <div class="card-body-top">
                                    <span>Raised: $7,689</span> / $10,000
                                </div>
                                <h4 class="card-title">Did not find your Package</h4>
                                <p class="card-text">inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially
                                    in the workplace that’s why it’s crucial.
                                </p>
                                <a href="#" class="main_btn2">donate here</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ Ens Our Major Cause section =================-->

    <!--================ Start Experience Area =================-->
    <section class="experience_donation section_gap">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-12">
                    <h1>Experience How your Donation Can Reach</h1>
                    <p>he French Revolution constituted for the conscience of the dominant aristocratic class a fall from innocence, and upturning
                        of the natural chain of events that resounded.</p>
                    <a href="#" class="main_btn2 mr-10">make donation now</a>
                    <a href="#" class="main_btn2">Create Fundraising today</a>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer-area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p class="copyright">
                        2019 &copy;
                        جميع الحقوق محفوظة
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
    <script src="vendors/isotope/isotope-min.js"></script>
    <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="js/custom.js"></script>

</body>

</html>