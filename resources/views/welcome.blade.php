<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    
    <title>Kaiwan Ban Sushi</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('frontend/img/logo.png') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('frontend/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@600&display=swap" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet">
</head>

    <body>
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Topbar Start -->
        <!-- <div class="container-fluid bg-light p-0">
            <div class="row gx-0 d-none d-lg-flex">
                <div class="col-lg-7 px-5 text-start">
                    <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                        <small class="fa fa-map-marker-alt text-primary me-2"></small>
                        <small>โครงการจัดสรรที่ดินไพลิน 169 ซอย ท่าอิฐ ตำบล บางรักน้อย อำเภอเมืองนนทบุรี นนทบุรี 11000</small>
                    </div>
                    <div class="h-100 d-inline-flex align-items-center py-3">
                        <small class="far fa-clock text-primary me-2"></small>
                        <small>จ.-อา. วันพุธ	11:00-20:00 น.</small>
                    </div>
                </div>
                <div class="col-lg-5 px-5 text-end">
                    <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                        <small class="fa fa-phone-alt text-primary me-2"></small>
                        <small>099 119 9959</small>
                    </div>
                    <div class="h-100 d-inline-flex align-items-center">
                        <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-sm-square bg-white text-primary me-0" href=""><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Topbar End -->

        <!-- Navbar Start -->
        <nav class="navbar navbar-expand-lg navbar-light sticky-top p-0 py-3" style="background-color: rgb(249, 255, 79);">
            <a href="#" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
                <!-- <h2 class="m-0 text-primary">Kaiwan Ban Sushi</h2> -->
                <img class="mb-3 mt-3" src="{{ asset('frontend/img/logo.png') }}" width="128" height="128" alt="logo" />
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="{{ route('frontend.index') }}" class="nav-item nav-link fs-4">
                        หน้าเเรก
                    </a>
                    <a href="{{ route('frontend.product') }}" class="nav-item nav-link fs-4">
                        สินค้า
                    </a>
                    <a href="{{ route('frontend.store') }}" class="nav-item nav-link fs-4">
                        หน้าร้าน
                    </a>
                    <a target="_blank"
                        href="https://www.google.com/maps/place/13%C2%B052'56.9%22N+100%C2%B027'29.7%22E/@13.8824658,100.4582429,17z/data=!3m1!4b1!4m4!3m3!8m2!3d13.8824658!4d100.4582429?entry=ttu"
                        class="nav-item nav-link fs-4">
                        เส้นทาง
                    </a>
                    <a href="{{ route('dashboard') }}" class="nav-item nav-link fs-4"><i class="fas fa-user-secret"></i>
                         ล็อคอิน
                    </a>
                </div>
            </div>
            </div>
        </nav>
        <!-- Navbar End -->


        <!-- Carousel Start -->
        <!-- <div class="container-fluid p-0 pb-5">
            <div class="owl-carousel header-carousel position-relative">
                <div class="owl-carousel-item position-relative">
                    <img class="img-fluid" src="img/bg_01.png" alt="100">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(0, 0, 0, 0.7);">
                        <div class="row justify-content-center">
                                <div class="col-12 col-lg-8 text-center">
                                    <h5 class="text-white text-uppercase mb-3 animated slideInDown">Welcome To Kaiwan Ban Sushi</h5>
                                    <h1 class="display-3 text-white animated slideInDown mb-4">Web Application for Kaiwan Ban Sushi</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
        <!-- Carousel End -->

        <div id="" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="container-fluid p-0 pb-5">
                <div class="owl-carousel header-carousel position-relative">
                    <div class="owl-carousel-item position-relative">
                        <img class="img-fluid" src="{{ asset('frontend/img/promotion 1.png') }}" alt="">
                        <div class="position-absolute top-0 start-0 w-10 h-10 d-flex align-items-center">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-12 col-lg-8 text-center">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-carousel-item position-relative">
                        <img class="img-fluid" src="{{ asset('frontend/img/promotion 2.png') }}" alt="">
                        <div class="position-absolute top-0 start-0 w-10 h-10 d-flex align-items-center">
                            <div class="container">
                                <div class="col-12 col-lg-8 text-center">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-carousel-item position-relative">
                        <img class="img-fluid" src="{{ asset('frontend/img/promotion 3.png') }}" alt="">
                        <div class="position-absolute top-0 start-0 w-10 h-10 d-flex align-items-center">
                            <div class="container">
                                <div class="col-12 col-lg-8 text-center">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

            <!-- Service Start -->
            <div class="container-xxl py-5">
                <div class="container">
                    <div class="section-title text-center">
                        <h1 class="display-5 mb-5">เมนูแนะนำ</h1>
                    </div>
                    <div class="row g-2">
                        <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="service-item">
                                <div class="overflow-hidden">
                                    <img class="img-fluid" src="{{ asset('frontend/img/picture/H1.png') }}">
                                </div>
                                <div class="p-4 text-center border border-5 border-light border-top-0">
                                    <h4 class="mb-3">ซูชิวากิวเอ๊กโรล </h4>
                                    <p>ชิ้นละ 35฿</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="service-item">
                                <div class="overflow-hidden">
                                    <img class="img-fluid" src="{{ asset('frontend/img/picture/H2.png') }}">
                                </div>
                                <div class="p-4 text-center border border-5 border-light border-top-0">
                                    <h4 class="mb-3"> ซูชิวากิวบิ๊กโรล </h4>
                                    <p>ชิ้นละ 35฿</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="service-item">
                                <div class="overflow-hidden">
                                    <img class="img-fluid" src="{{ asset('frontend/img/picture/H3.png') }}">
                                </div>
                                <div class="p-4 text-center border border-5 border-light border-top-0">
                                    <h4 class="mb-3"> ซูชิวากิวแซบ </h4>
                                    <p>ชิ้นละ 35฿</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="service-item">
                                <div class="overflow-hidden">
                                    <img class="img-fluid" src="{{ asset('frontend/img/picture/H4.png') }}">
                                </div>
                                <div class="p-4 text-center border border-5 border-light border-top-0">
                                    <h4 class="mb-3"> ซูชิวากิวสไปรซี่ </h4>
                                    <p>ชิ้นละ 35฿</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="service-item">
                                <div class="overflow-hidden">
                                    <img class="img-fluid" src="{{ asset('frontend/img/picture/H21.png') }}">
                                </div>
                                <div class="p-4 text-center border border-5 border-light border-top-0">
                                    <h4 class="mb-3"> ซูชิแซลมอนสลัด </h4>
                                    <p>ชิ้นละ 30฿</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="service-item">
                                <div class="overflow-hidden">
                                    <img class="img-fluid" src="{{ asset('frontend/img/picture/H39.png') }}">
                                </div>
                                <div class="p-4 text-center border border-5 border-light border-top-0">
                                    <h4 class="mb-3"> ซูชิไข่หวานแซนวิช </h4>
                                    <p>ชิ้นละ 20฿</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="service-item">
                                <div class="overflow-hidden">
                                    <img class="img-fluid" src="{{ asset('frontend/img/picture/H51.png') }}">
                                </div>
                                <div class="p-4 text-center border border-5 border-light border-top-0">
                                    <h4 class="mb-3"> ซูชิกุ้งเบิร์นแซ่บ </h4>
                                    <p>ชิ้นละ 20฿</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="service-item">
                                <div class="overflow-hidden">
                                    <img class="img-fluid" src="{{ asset('frontend/img/picture/H57.png') }}">
                                </div>
                                <div class="p-4 text-center border border-5 border-light border-top-0">
                                    <h4 class="mb-3"> ซูชิชีสสลัดปูอัด </h4>
                                    <p>ชิ้นละ 15฿</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="service-item">
                                <div class="overflow-hidden">
                                    <img class="img-fluid" src="{{ asset('frontend/img/picture/H37.png') }}">
                                </div>
                                <div class="p-4 text-center border border-5 border-light border-top-0">
                                    <h4 class="mb-3"> แคลิฟอร์เนียมากิ </h4>
                                    <p>ชิ้นละ 20฿</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->


        <!-- Footer Start -->
        <div class=" h-100 w-100 gb-danger">
            <div class="footer bg-dark text-light o wow fadeIn" data-wow-delay="0.1s">
                <div class="container py-5">
                    <div class="row g-5">
                        <div class="col-lg-3 col-md-6">
                            <h4 class="text-light mb-10">ติดต่อ</h4>
                            <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>169/16,หมู่4
                                ตำบลบางรักน้อย
                                อำเภอเมืองนนทบุรี จังหวัดนนทบุรี (ตรงข้ามบิ้กซี ติดกับร้านทอง) </p>
                            <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>099 119 9959</p>
                            <div class="d-flex pt-2">
                                <a class="btn btn-outline-light btn-social" href=""><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-light btn-social" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-light btn-social" href=""><i
                                        class="fab fa-youtube"></i></a>
                                <a class="btn btn-outline-light btn-social" href=""><i
                                        class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->

        <!-- Back to Top -->
        <!-- <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-0 back-to-top"><i class="bi bi-arrow-up"></i></a> -->
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('frontend/lib/wow/wow.min.js') }}"></script>
        <script src="{{ asset('frontend/lib/easing/easing.min.js') }}"></script>
        <script src="{{ asset('frontend/lib/waypoints/waypoints.min.js') }}"></script>
        <script src="{{ asset('frontend/lib/counterup/counterup.min.js') }}"></script>
        <script src="{{ asset('frontend/lib/owlcarousel/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('frontend/lib/isotope/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('frontend/lib/lightbox/js/lightbox.min.js') }}"></script>
        <!-- Template Javascript -->
        <script src="{{ asset('frontend/js/main.js') }}"></script>
    </body>

</html>