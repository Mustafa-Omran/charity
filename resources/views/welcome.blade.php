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

    <header class="header_area">
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <a class="navbar-brand logo_h" href="index.html">
                        <img src="img/logo.jpeg" alt="" style="height: 60px; width: 150">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
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
    <section class="home_banner_area">
        <div class="overlay"></div>
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content row">
                    <div class="offset-lg-2 col-lg-8">
                        <p style="font-size: 30px">احمد الشقيري<br> إمتناعك عن إلقاء القمامة في الشارع يعني توفيرك إنحناءة لظهر عامل النظافة<br> فهل من إحسان لديكم ؟!</p>
                        <a class="main_btn mr-10" href="#">تبرع اﻻن</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="donation_details pad_top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 single_donation_box">
                    <img src="img/icons/home1.png" alt="">
                    <h4>أرغب بالتبرع .. الرجاء التواصل معي ..!</h4>
                    <p>
                        نتشرف باستقبال تبرعاتكم .. وهناك عدة طرق لاستقبالها:

                        - تزويدنا بأرقام التواصل معكم.. وسيقوم أحد مندوبينا المعتمدين بالاتصال بكم

                        - زيارة مقر الجمعية – منطقة الكرامة في عجمان أو عن طريق مكتبنا في منطقة الجرف

                        - زيارة مقر فرع جمعية الإحسان في إمارة رأس الخيمة

                        - أو المساهمة من خلال الكوبونات المتوفرة لدى مندوبي الجمعية في مراكز التسوق </p>
                </div>
                <div class="col-lg-3 col-md-6 single_donation_box">
                    <img src="img/icons/home2.png" alt="">
                    <h4>متى تبدأ المساعدات الدراسية؟

                    </h4>
                    <p>
                        يتم الإعلان عن موعد استقبال طلبات المساعدات بشكل دوري من خلال الموقع الإلكتروني للجمعية وعبر وسائل التواصل الاجتماعي التابعة لها

                    </p>
                </div>
                <div class="col-lg-3 col-md-6 single_donation_box">
                    <img src="img/icons/home3.png" alt="">
                    <h4>ما هي الأوراق المطلوبة لفتح ملف مساعدات في الجمعية؟

                    </h4>
                    <p>
                        تقديم المستندات الثبوتية لجميع أفراد الأسرة وهي عبارة عن صورة من جوازات السفر والإقامات والهوية الإماراتية، إضافة إلى عقد الإيجار وفاتورة الكهرباء وشهادة راتب، وأية أوراق أخرى تثبت الالتزامات المالية المترتبة على رب الأسرة أو من يعولها ، علماً أن طلب "تسجيل المساعدات" يتم فقط من خلال الموقع الإلكتروني للجمعية (يمكنكم الاطلاع على قائمة المستندات المطلوبة من خلال الموقع)

                    </p>
                </div>
                <div class="col-lg-3 col-md-6 single_donation_box">
                    <img src="img/icons/home4.png" alt="">
                    <h4>هل تكفل الجمعية الأيتام خارج الدولة؟

                    </h4>
                    <p>
                        نعم، تكفل الجمعية عدد من الأيتام خارج الدولة، وتقوم بتوفير مبالغ مالية لهم من خلال المحسنين الذين يرغبون بكفالتهم شهرياً، كما تكفل أيضاً أيتاماً داخل دولة الإمارات العربية المتحدة. وعند زيارتكم لمقر جمعية الإحسان الخيرية، يمكنكم الحصول على "استمارة كفالة يتيم"، لإتمام إجراءات الكفالة المطلوبة.

                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="our_major_cause section_gap">
        <div class="container">
            <div class="row justify-content-center section-title-wrap">
                <div class="col-lg-12">
                    <h1>المشاريع</h1>
                </div>
            </div>

            <div class="row">
                <div id="our-major-cause" class="owl-carousel">
                    <div class="card">
                        <div class="card-body">
                            <figure>
                                <img class="card-img-top img-fluid" src="img/donation/d1.jpg" alt="Card image cap">
                            </figure>

                            <div class="card_inner_body">

                                <h4 class="card-title">مشـــروع حــج البـدل
                                </h4>
                                <p class="card-text">يهدف المشروع في أساسه إلى طاعة وبر الوالدين والأقربين، بأداء مناسك الحج عنهم إن كانوا مرضى أو عاجزين أو متوفين، يرجو المساهم فيها ثواب الأجر من الله تعالى على إحسانه بهم، ويؤدي حج البدل أشخاص مؤهلين مقيمين في مكة المكرمة، ممن يعرفون شروط وضوابط وأحكام "حج البدل"، يتم تكليفهم بأداء مناسك الحج عن الحالات المجاز الحج بدلاً عنها شرعاً.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <figure>
                                <img class="card-img-top img-fluid" src="img/donation/d2.jpg" alt="Card image cap">
                            </figure>
                            <div class="card_inner_body">
                                <h4 class="card-title">مشــروع الحقيبـة المدرسيـة</h4>
                                <p class="card-text">تعتبر "الحقيبة المدرسية" ضمن المشاريع الرئيسية التي تنفذها جمعية الإحسان الخيرية بداية كل عام دراسي للمساهمة في مساعدة الطلاب على توفير احتياجاتهم المدرسية من حقائب وقرطاسية وأقلام، إيماناً بأحقية العلم لكل فرد للمساهمة في إنشاء جيلٍ متعلمٍ واعٍ يخدم وطنه ومجتمعه، وقد كان لهذا المشروع عظيم الأثر في رسم البسمة على وجوه الطلبة وإدخال الفرحة إلى قلوبهم وتخفيف المعاناة عن كاهل أسرهم.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <figure>
                                <img class="card-img-top img-fluid" src="img/donation/d3.jpg" alt="Card image cap">
                            </figure>

                            <div class="card_inner_body">

                                <h4 class="card-title">مشــروع الحملـة الشتويـة
                                </h4>
                                <p class="card-text">مكن للمتبرعين الأكارم المساهمة في مشروع "الحملة الشتوية" من خلال الكوبونات المتوفرة لدى مندوبينا، أو زيارة مقر الجمعية - منطقة الكرامة في عجمان، أو عن طريق مكتبنا في منطقة الجرف.. أو من خلال فرع "الإحسان" في إمارة رأس الخيمة.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <figure>
                                <img class="card-img-top img-fluid" src="img/donation/d2.jpg" alt="Card image cap">
                            </figure>

                            <div class="card_inner_body">

                                <h4 class="card-title">مشــروع كسـوة العيـد
                                </h4>
                                <p class="card-text">ويمكن للمتبرعين الأكارم المساهمة في مشروع "كسوة العيد" من خلال الكوبونات المتوفرة لدى مندوبينا، أو زيارة مقر الجمعية - منطقة الكرامة في عجمان، أو عن طريق مكتبنا في منطقة الجرف، أو من خلال فرع "الإحسان" في إمارة رأس الخيمة
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="experience_donation section_gap">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-12">
                    <h1>مرحبا بكم في الجمعية الخيرية</h1>
                    <a href="#" class="main_btn2 mr-10">تبرع اﻻن</a>
                    <a href="#" class="main_btn2">محتاج مساعدة</a>
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