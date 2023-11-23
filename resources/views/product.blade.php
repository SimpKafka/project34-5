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

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@600&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('frontend/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet">

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
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <!-- <h2 class="m-0 text-primary">Kaiwan Ban Sushi</h2> -->
            <img class="mb-3 mt-3" src="{{ asset('frontend/img/logo.png') }}" width="128" height="128" alt="logo" />
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="{{ route('frontend.index')}}" class="nav-item nav-link fs-4">
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
                <div class="nav-item dropdown"></div>
            </div>
        </div>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <!-- <div class="container-fluid page-header py-5 mb-5">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">เมนู</h1>
            <nav aria-label="breadcrumb animated slideInDown">
            </nav>
        </div>
    </div> -->
    <!-- Page Header End -->


    <!-- Feature Start -->

    <!-- Feature Start -->



    <!-- About Start -->
    <div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
        <div class="container about px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 ps-lg-0" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="{{ asset('frontend/img/picture/H0.png')}}"
                            style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 about-text py-5 wow fadeIn" data-wow-delay="0.1s">
                    <div class="p-lg-5 pe-lg-0">
                        <div class="section-title text-start">
                            <h1 class="display-5 mb-4">เมนูพิเศษ</h1>
                        </div>
                        <p class="mb-4 pb-2">ซูชิแซลมอนฮาโลวีน
                        </p>
                        <div class="row g-4 mb-4 pb-2">
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white"
                                        style="width: 60px; height: 60px;">
                                        <i class="fa fa-users fa-2x text-primary"></i>
                                    </div>
                                    <div class="ms-3">
                                        <h2 class="text-primary mb-1" data-toggle="counter-up">2034</h2>
                                        <p class="fw-medium mb-0">Happy Clients</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white"
                                        style="width: 60px; height: 60px;">
                                        <i class="fa fa-check fa-2x text-primary"></i>
                                    </div>
                                    <div class="ms-3">
                                        <h2 class="text-primary mb-1" data-toggle="counter-up">2034</h2>
                                        <p class="fw-medium mb-0">Projects Done</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="" class="btn btn-primary py-3 px-5">Explore More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="section-title text-center">
                <h1 class="display-5 mb-5">เมนู</h1>
            </div>
            <div class="row g-3">
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('frontend/img/picture/H1.png') }}">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3"> ซูชิวากิวเอ๊กโรล </h4>
                            <p> ชิ้นละ 35฿ </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('frontend/img/picture/H2.png') }}">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3"> ซูชิวากิวบิ๊กโรล </h4>
                            <p> ชิ้นละ 35฿ </p>
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
                            <p> ชิ้นละ 35฿ </p>
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
                            <p> ชิ้นละ 35฿ </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('frontend/img/picture/H5.png') }}">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3"> ไข่ปลาแซลมอน </h4>
                            <p> ชิ้นละ 50฿ </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid"
                                src="https://d1sag4ddilekf6.cloudfront.net/compressed_webp/items/THITE2023032610244879093/detail/menueditor_item_acac225491614bb0b7f3401c89d574f0_1679826212255265901.webp                            ">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3"> แซลมอนสดราดสไปรซี่ </h4>
                            <p> ชิ้นละ 30฿ </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid"
                                src="https://d1sag4ddilekf6.cloudfront.net/compressed_webp/items/THITE2023032610102686069/detail/menueditor_item_7d788e5536244d95a60b5ddf46e899e9_1679825381358715071.webp">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3"> ไข่ห่อปลาไหล </h4>
                            <p> ชิ้นละ 25฿ </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid"
                                src="https://d1sag4ddilekf6.cloudfront.net/compressed_webp/items/THITE2022113009275033755/detail/menueditor_item_657d41a006284cb08978f1c7ed69dc79_1669800403045990573.webp">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3"> เบคอนโรลเบิร์น </h4>
                            <p> ชิ้นละ 20฿ </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid"
                                src="https://d1sag4ddilekf6.cloudfront.net/compressed_webp/items/THITE2022113009250845558/detail/menueditor_item_1816181859ac4c6db1d90428f6332522_1669800283103932475.webp">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3"> เบคอนเบิร์น </h4>
                            <p> ชิ้นละ 15฿ </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid"
                                src="https://d1sag4ddilekf6.cloudfront.net/compressed_webp/items/THITE2022113009262046891/detail/menueditor_item_12116510ff9d4612a1f70c48ec3579e7_1669800347811650562.webp">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3"> เบคอนเบิร์นสไปซี่ </h4>
                            <p> ชิ้นละ 15฿ </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid"
                                src="https://d1sag4ddilekf6.cloudfront.net/compressed_webp/items/THITE2022113009241681334/detail/menueditor_item_8c37da37f22140f795c76c82a2c7d13d_1669800220816446582.webp">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3"> ซูชิปูอีกเบิร์นแซ่บ </h4>
                            <p> ชิ้นละ 15฿ </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid"
                                src="https://d1sag4ddilekf6.cloudfront.net/compressed_webp/items/THITE2022113009222831818/detail/menueditor_item_a039e46e962845ee8ab76da77f983004_1669800101731260426.webp">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3"> ซูชิปูอัดเบิร์นสไปซี่ </h4>
                            <p> ชิ้นละ 15฿ </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('frontend/img/picture/H13.png') }}">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3"> ซูชิแซลมอนแซ่บ </h4>
                            <p> ชิ้นละ 30฿ </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('frontend/img/picture/H14.png') }}">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3"> ซูชิแซลมอนสับไข่ปู </h4>
                            <p> ชิ้นละ 30฿ </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('frontend/img/picture/H15.png') }}">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3"> ซูชิแซลมอนสับ </h4>
                            <p> ชิ้นละ 30฿ </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('frontend/img/picture/H16.png') }}">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3"> ซูชิทูน่าเบิร์นสไปซี่ </h4>
                            <p> ชิ้นละ 30฿ </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('frontend/img/picture/H17.png') }}">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3"> ซูชิทูน่าเบิร์น </h4>
                            <p> ชิ้นละ 30฿ </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('frontend/img/picture/H18.png') }}">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3"> ซูชิทูน่า </h4>
                            <p> ชิ้นละ 30฿ </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('frontend/img/picture/H19.png') }}">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3"> ซูชิแซลมอนเบิร์นสไปซี่ </h4>
                            <p> ชิ้นละ 30฿ </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('frontend/img/picture/H20.png') }}">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3"> ซูชิแซลมอนเบิร์น </h4>
                            <p> ชิ้นละ 30฿</p>
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
                            <p> ชิ้นละ 30฿ </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('frontend/img/picture/H22.png') }}">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3"> ซูชิแซลมอน </h4>
                            <p> ชิ้นละ 30฿ </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('frontend/img/picture/H23.png') }}">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3"> ซูชิแซลมอนบอล </h4>
                            <p> ชิ้นละ 30฿ </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('frontend/img/picture/H24.png') }}">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3"> ซูชิมากิแซลมอน </h4>
                            <p> ชิ้นละ 30฿ </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('frontend/img/picture/H25.png') }}">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3"> ซูชิข้าวห่อแซลมอนไข่กุ้ง </h4>
                            <p> ชิ้นละ 30฿ </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('frontend/img/picture/H26.png') }}">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3"> ซูชิแซลมอนโรลเบิร์น </h4>
                            <p> ชิ้นละ 30฿ </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('frontend/img/picture/H27.png') }}">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3"> ซูชิแซลมอนโรล </h4>
                            <p> ชิ้นละ 30฿ </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('frontend/img/picture/H28.png') }}">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3"> ซูชิซาบะดอง </h4>
                            <p> ชิ้นละ 25฿ </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('frontend/img/picture/H29.png') }}">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3"> ซูชิซาบะดองเบิร์น </h4>
                            <p> ชิ้นละ 25฿ </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('frontend/img/picture/H30.png') }}">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3"> ซูชิกุ้งเบิร์นชีส </h4>
                            <p> ชิ้นละ 25฿ </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('frontend/img/picture/H31.png') }}">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3"> ซูชิทาโกะวาซาบิ </h4>
                            <p> ชิ้นละ 25฿ </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('frontend/img/picture/H32.png') }}">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3"> ซูชิปลาไหลญี่ปุ่นย่างซีอิ้ว </h4>
                            <p> ชิ้นละ 25฿ </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('frontend/img/picture/H33.png') }}">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3"> ซูชิเอ็นหอยเชลล์กิมจิ </h4>
                            <p> ชิ้นละ 20฿ </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('frontend/img/picture/H34.png') }}">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3"> หมึกหิมะสลัด </h4>
                            <p> ชิ้นละ 20฿ </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('frontend/img/picture/H35.png') }}">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3"> ซูชิชีสไข่กุ้ง </h4>
                            <p> ชิ้นละ 20฿ </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('frontend/img/picture/H36.png') }}">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3"> หมึกหิมะ </h4>
                            <p> ชิ้นละ 20฿ </p>
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
                            <p> ชิ้นละ 20฿ </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('frontend/img/picture/H38.png') }}">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3"> ซูชิแมงกระพรุนกิมจิ </h4>
                            <p> ชิ้นละ 20฿ </p>
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
                            <p> ชิ้นละ 20฿ </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('frontend/img/picture/H40.png') }}">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3"> ซูชิไข่ปูส้ม </h4>
                            <p> ชิ้นละ 20฿ </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('frontend/img/picture/H41.png') }}">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3"> ซูชิไข่หวานสลัด </h4>
                            <p> ชิ้นละ 20฿ </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('frontend/img/picture/H42.png') }}">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3"> ไข่ห่อปูอัด </h4>
                            <p> ชิ้นละ 20฿ </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('frontend/img/picture/H43.png') }}">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3"> ไข่หวาน </h4>
                            <p> ชิ้นละ 20฿ </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('frontend/img/picture/H44.png') }}">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3"> ซูชิไข่กุ้งส้มสลัดปูอัด </h4>
                            <p> ชิ้นละ 20฿ </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('frontend/img/picture/H45.png') }}">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3"> ซูชิสลัดเป๋าฮื้อ </h4>
                            <p> ชิ้นละ 20฿ </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('frontend/img/picture/H46.png') }}">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3"> ซูชิกุ้งซูชิ </h4>
                            <p> ชิ้นละ 20฿ </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('frontend/img/picture/H47.png') }}">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3">ซูชิไข่กุ้งส้ม</h4>
                            <p> ชิ้นละ 20฿ </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('frontend/img/picture/H48.png') }}">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3">กุ้งสลัด</h4>
                            <p> ชิ้นละ 20฿ </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('frontend/img/picture/H49.png') }}">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3">ซูชิไข่กุ้งส้มยำสาหร่าย</h4>
                            <p> ชิ้นละ 20฿ </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('frontend/img/picture/H50.png') }}">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3">ซูชิกุ้งกิมจิ</h4>
                            <p> ชิ้นละ 20฿ </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('frontend/img/picture/H51.png') }}">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3">ซูชิกุ้งเบิร์นแซ่บ</h4>
                            <p> ชิ้นละ 20฿ </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('frontend/img/picture/H52.png') }}">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3">ซูชิกุ้งแก้ว</h4>
                            <p> ชิ้นละ 20฿ </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('frontend/img/picture/H53.png') }}">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3">มินิไข่หวาน</h4>
                            <p> ชิ้นละ 15฿ </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('frontend/img/picture/H54.png') }}">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3">ฟูโตมากิ</h4>
                            <p> ชิ้นละ 15฿ </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('frontend/img/picture/H55.png') }}">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3">ซูชิข้าวห่อปูอัด</h4>
                            <p> ชิ้นละ 15฿ </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('frontend/img/picture/H56.png') }}">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3">ซูชิไข่กุ้งดำ</h4>
                            <p> ชิ้นละ 15฿ </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('frontend/img/picture/H57.png') }}">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3">ซูชิชีสสลัดปูอัด</h4>
                            <p> ชิ้นละ 15฿ </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('frontend/img/picture/H58.png') }}">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3">ซูชิบอล</h4>
                            <p> ชิ้นละ 15฿ </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('frontend/img/picture/H59.png') }}">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3">ซูชิสลัดปูอัด</h4>
                            <p> ชิ้นละ 15฿ </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('frontend/img/picture/H60.png') }}">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3">ซูชิยำสาหร่าย</h4>
                            <p> ชิ้นละ 15฿ </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('frontend/img/picture/H61.png') }}">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3">ซูซิสลัดทูน่า</h4>
                            <p>ชิ้นละ 15฿</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('frontend/img/picture/H62.png') }}">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3">ซูชิปูอัดราดสลัด</h4>
                            <p>ชิ้นละ 15฿</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('frontend/img/picture/H63.png') }}">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3">ซูชิปูอัด</h4>
                            <p>ชิ้นละ 15฿</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid"
                                src="https://d1sag4ddilekf6.cloudfront.net/compressed_webp/items/THITE2023101007045358338/detail/menueditor_item_2c6f0d2ccd314a93b781f9b6971a4555_1696921409868300213.webp">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3">ไข่ชาโคลซอสสลัดกุ้ง</h4>
                            <p>ชิ้นละ 25฿</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid"
                                src="https://d1sag4ddilekf6.cloudfront.net/compressed_webp/items/THITE2023062207020183635/detail/menueditor_item_159741e8fd7e4513a897dc88c8ce73fd_1687417287453072806.webp">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3">ปลาไหลญี่ปุ่นโรล</h4>
                            <p>ชิ้นละ 35฿</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('frontend/img/picture/H66.png') }}">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3">ซูชิหมึกซอสหวาน</h4>
                            <p> ชิ้นละ 25฿ </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('frontend/img/picture/H67.png') }}">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3">ซูชิสลัดรวม</h4>
                            <p>ชิ้นละ 20฿</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('frontend/img/picture/H68.png') }}">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3">ซูชิหอยลายกิมจิ</h4>
                            <p>ชิ้นละ 20฿</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('frontend/img/picture/H69.png') }}">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3">ซูชิกุ้งซอสหวาน</h4>
                            <p>ชิ้นละ 25฿</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Footer Start -->
    <div class="d-flex flex-column h-100">
        <div class="footer bg-dark text-light o wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <h4 class="text-light mb-10">ติดต่อ</h4>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>169/16,หมู่4 ตำบลบางรักน้อย
                            อำเภอเมืองนนทบุรี จังหวัดนนทบุรี (ตรงข้ามบิ้กซี ติดกับร้านทอง) </p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>099 119 9959</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-0 back-to-top"><i class="bi bi-arrow-up"></i></a>


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