@extends('layouts.master')
@section('con')
    <!doctype html>
    <html class="no-js" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Product Edit | Nalika - Material Admin Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- favicon
          ============================================ -->
        <link rel="shortcut icon" type="{{ asset('backend/image/x-icon') }}" href="{{ asset('backend/img/favicon.ico') }}">
        <!-- Google Fonts
          ============================================ -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
        <!-- Bootstrap CSS
          ============================================ -->
        <link rel="stylesheet" href="{{ asset('backend/css/bootstrap.min.css') }}">
        <!-- Bootstrap CSS
          ============================================ -->
        <link rel="stylesheet" href="{{ asset('backend/css/font-awesome.min.css') }}">
        <!-- nalika Icon CSS
          ============================================ -->
        <link rel="stylesheet" href="{{ asset('backend/css/nalika-icon.css') }}">
        <!-- owl.carousel CSS
          ============================================ -->
        <link rel="stylesheet" href="{{ asset('backend/css/owl.carousel.css') }}">
        <link rel="stylesheet" href="{{ asset('backend/css/owl.theme.css') }}">
        <link rel="stylesheet" href="{{ asset('backend/css/owl.transitions.css') }}">
        <!-- animate CSS
          ============================================ -->
        <link rel="stylesheet" href="{{ asset('backend/css/animate.css') }}">
        <!-- normalize CSS
          ============================================ -->
        <link rel="stylesheet" href="{{ asset('backend/css/normalize.css') }}">
        <!-- meanmenu icon CSS
          ============================================ -->
        <link rel="stylesheet" href="{{ asset('backend/css/meanmenu.min.css') }}">
        <!-- main CSS
          ============================================ -->
        <link rel="stylesheet" href="{{ asset('backend/css/main.css') }}">
        <!-- morrisjs CSS
          ============================================ -->
        <link rel="stylesheet" href="{{ asset('backend/css/morrisjs/morris.css') }}">
        <!-- mCustomScrollbar CSS
          ============================================ -->
        <link rel="stylesheet" href="{{ asset('backend/css/scrollbar/jquery.mCustomScrollbar.min.css') }}">
        <!-- metisMenu CSS
          ============================================ -->
        <link rel="stylesheet" href="{{ asset('backend/css/metisMenu/metisMenu.min.css') }}">
        <link rel="stylesheet" href="{{ asset('backend/css/metisMenu/metisMenu-vertical.css') }}">
        <!-- calendar CSS
          ============================================ -->
        <link rel="stylesheet" href="{{ asset('backend/css/calendar/fullcalendar.min.css') }}">
        <link rel="stylesheet" href="{{ asset('backend/css/calendar/fullcalendar.print.min.css') }}">
        <!-- style CSS
          ============================================ -->
        <link rel="stylesheet" href="{{ asset('backend/style.css') }}">
        <!-- responsive CSS
          ============================================ -->
        <link rel="stylesheet" href="{{ asset('backend/css/responsive.css') }}">
        <!-- modernizr JS
          ============================================ -->
        <script src="{{ asset('backend/js/vendor/modernizr-2.8.3.min.js') }}"></script>
    </head>

    <body>
        <!--[if lt IE 8]>
                    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
                <![endif]-->

        <!-- Start Welcome area -->
        <div class="all-content-wrapper">

            <div class="header-advance-area">
                <div class="header-top-area">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="header-top-wraper">
                                    <div class="row">
                                        <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                            <div class="menu-switcher-pro">
                                                <button type="button" id="sidebarCollapse"
                                                    class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                                    <i class="icon nalika-menu-task"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Mobile Menu start -->
                <div class="mobile-menu-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="mobile-menu">
                                    <nav id="dropdown">
                                        <ul class="mobile-menu-nav">
                                            <li><a data-toggle="collapse" data-target="#Charts" href="#">Home <span
                                                        class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                                <ul class="collapse dropdown-header-top">
                                                    <li><a href="index.html">Dashboard v.1</a></li>
                                                    <li><a href="index-1.html">Dashboard v.2</a></li>
                                                    <li><a href="index-3.html">Dashboard v.3</a></li>
                                                    <li><a href="product-list.html">Product List</a></li>
                                                    <li><a href="product-edit.html">Product Edit</a></li>
                                                    <li><a href="product-detail.html">Product Detail</a></li>
                                                    <li><a href="product-cart.html">Product Cart</a></li>
                                                    <li><a href="product-payment.html">Product Payment</a></li>
                                                    <li><a href="analytics.html">Analytics</a></li>
                                                    <li><a href="widgets.html">Widgets</a></li>
                                                </ul>
                                            </li>
                                            <li><a data-toggle="collapse" data-target="#demo" href="#">Mailbox
                                                    <span
                                                        class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                                <ul id="demo" class="collapse dropdown-header-top">
                                                    <li><a href="mailbox.html">Inbox</a>
                                                    </li>
                                                    <li><a href="mailbox-view.html">View Mail</a>
                                                    </li>
                                                    <li><a href="mailbox-compose.html">Compose Mail</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a data-toggle="collapse" data-target="#others"
                                                    href="#">Miscellaneous <span
                                                        class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                                <ul id="others" class="collapse dropdown-header-top">
                                                    <li><a href="file-manager.html">File Manager</a></li>
                                                    <li><a href="contacts.html">Contacts Client</a></li>
                                                    <li><a href="projects.html">Project</a></li>
                                                    <li><a href="project-details.html">Project Details</a></li>
                                                    <li><a href="blog.html">Blog</a></li>
                                                    <li><a href="blog-details.html">Blog Details</a></li>
                                                    <li><a href="404.html">404 Page</a></li>
                                                    <li><a href="500.html">500 Page</a></li>
                                                </ul>
                                            </li>
                                            <li><a data-toggle="collapse" data-target="#Miscellaneousmob"
                                                    href="#">Interface <span
                                                        class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                                <ul id="Miscellaneousmob" class="collapse dropdown-header-top">
                                                    <li><a href="google-map.html">Google Map</a>
                                                    </li>
                                                    <li><a href="data-maps.html">Data Maps</a>
                                                    </li>
                                                    <li><a href="pdf-viewer.html">Pdf Viewer</a>
                                                    </li>
                                                    <li><a href="x-editable.html">X-Editable</a>
                                                    </li>
                                                    <li><a href="code-editor.html">Code Editor</a>
                                                    </li>
                                                    <li><a href="tree-view.html">Tree View</a>
                                                    </li>
                                                    <li><a href="preloader.html">Preloader</a>
                                                    </li>
                                                    <li><a href="images-cropper.html">Images Cropper</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a data-toggle="collapse" data-target="#Chartsmob" href="#">Charts
                                                    <span
                                                        class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                                <ul id="Chartsmob" class="collapse dropdown-header-top">
                                                    <li><a href="bar-charts.html">Bar Charts</a>
                                                    </li>
                                                    <li><a href="line-charts.html">Line Charts</a>
                                                    </li>
                                                    <li><a href="area-charts.html">Area Charts</a>
                                                    </li>
                                                    <li><a href="rounded-chart.html">Rounded Charts</a>
                                                    </li>
                                                    <li><a href="c3.html">C3 Charts</a>
                                                    </li>
                                                    <li><a href="sparkline.html">Sparkline Charts</a>
                                                    </li>
                                                    <li><a href="peity.html">Peity Charts</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a data-toggle="collapse" data-target="#Tablesmob" href="#">Tables
                                                    <span
                                                        class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                                <ul id="Tablesmob" class="collapse dropdown-header-top">
                                                    <li><a href="static-table.html">Static Table</a>
                                                    </li>
                                                    <li><a href="data-table.html">Data Table</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a data-toggle="collapse" data-target="#formsmob" href="#">Forms
                                                    <span
                                                        class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                                <ul id="formsmob" class="collapse dropdown-header-top">
                                                    <li><a href="basic-form-element.html">Basic Form Elements</a>
                                                    </li>
                                                    <li><a href="advance-form-element.html">Advanced Form Elements</a>
                                                    </li>
                                                    <li><a href="password-meter.html">Password Meter</a>
                                                    </li>
                                                    <li><a href="multi-upload.html">Multi Upload</a>
                                                    </li>
                                                    <li><a href="tinymc.html">Text Editor</a>
                                                    </li>
                                                    <li><a href="dual-list-box.html">Dual List Box</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a data-toggle="collapse" data-target="#Appviewsmob" href="#">App
                                                    views <span
                                                        class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                                <ul id="Appviewsmob" class="collapse dropdown-header-top">
                                                    <li><a href="basic-form-element.html">Basic Form Elements</a>
                                                    </li>
                                                    <li><a href="advance-form-element.html">Advanced Form Elements</a>
                                                    </li>
                                                    <li><a href="password-meter.html">Password Meter</a>
                                                    </li>
                                                    <li><a href="multi-upload.html">Multi Upload</a>
                                                    </li>
                                                    <li><a href="tinymc.html">Text Editor</a>
                                                    </li>
                                                    <li><a href="dual-list-box.html">Dual List Box</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a data-toggle="collapse" data-target="#Pagemob" href="#">Pages
                                                    <span
                                                        class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                                <ul id="Pagemob" class="collapse dropdown-header-top">
                                                    <li><a href="login.html">Login</a>
                                                    </li>
                                                    <li><a href="register.html">Register</a>
                                                    </li>
                                                    <li><a href="lock.html">Lock</a>
                                                    </li>
                                                    <li><a href="password-recovery.html">Password Recovery</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Mobile Menu end -->
                <div class="breadcome-area">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="breadcome-list">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                            <div class="breadcomb-wp">
                                                <div class="breadcomb-icon">
                                                    <i class="icon nalika-home"></i>
                                                </div>
                                                <div class="breadcomb-ctn">
                                                    <h2>Promotion Edit</h2>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                            <div class="breadcomb-report">
                                                <button data-toggle="tooltip" data-placement="left"
                                                    title="Download Report" class="btn"><i
                                                        class="icon nalika-download"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single pro tab start-->
            <form action="{{ route('promotion.insert') }}" method="post">
                @csrf
                <div class="single-product-tab-area mg-b-30">
                    <!-- Single pro tab review Start-->
                    <div class="single-pro-review-area">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="review-tab-pro-inner">
                                        <ul id="myTab3" class="tab-review-design">
                                            <li class="active"><a href="#description"><i class="icon nalika-edit"
                                                        aria-hidden="true"></i> Promotion Edit</a></li>
                                        </ul>
                                        <div id="myTabContent" class="tab-content custom-product-edit">
                                            <div class="product-tab-list tab-pane fade active in" id="description">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="review-content-section">
                                                            <div class="input-group mg-b-pro-edt">
                                                                <span class="input-group-addon"><i
                                                                        class="icon nalika-edit"
                                                                        aria-hidden="true"></i></span>
                                                                <input type="text" class="form-control" name="name"
                                                                    placeholder="Product Title">
                                                                @error('name')
                                                                    {{ $errors->first('name') }}
                                                                @enderror
                                                            </div>
                                                            <div class="input-group mg-b-pro-edt">
                                                                <span class="input-group-addon"><i class="fa fa-usd"
                                                                        aria-hidden="true"></i></span>
                                                                <input type="text" class="form-control" name="price"
                                                                    placeholder="Regular Price">
                                                            </div>
                                                            <div class="input-group mg-b-pro-edt">
                                                                <span class="input-group-addon"><i
                                                                        class="icon nalika-like"
                                                                        aria-hidden="true"></i></span>
                                                                <input type="text" class="form-control" name="category"
                                                                    placeholder="Category">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="review-content-section">
                                                            <div class="input-group mg-b-pro-edt">
                                                                <span class="input-group-addon"><i
                                                                        class="icon nalika-favorites-button"
                                                                        aria-hidden="true"></i></span>
                                                                <input type="text" class="form-control" name="promotion_des"
                                                                    placeholder="Promotion Description">
                                                            </div>
                                                            <div class="input-group mg-b-pro-edt">
                                                                <span class="input-group-addon"><i class="fa fa-usd"
                                                                        aria-hidden="true"></i></span>
                                                                <input type="text" class="form-control" name="sale"
                                                                    placeholder="Sale Price">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="text-center custom-pro-edt-ds">
                                                            <input href="" type="submit" value="Save"
                                                                class="btn btn-ctl-bt waves-effect waves-light">
                                                            <a href="{{ route('pro.index') }}"
                                                                class="btn btn-ctl-bt waves-effect waves-light">
                                                                Discard
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <!-- jquery
          ============================================ -->
        <script src="{{ asset('backend/js/vendor/jquery-1.12.4.min.js') }}"></script>
        <!-- bootstrap JS
          ============================================ -->
        <script src="{{ asset('backend/js/bootstrap.min.js') }}"></script>
        <!-- wow JS
          ============================================ -->
        <script src="{{ asset('backend/js/wow.min.js') }}"></script>
        <!-- price-slider JS
          ============================================ -->
        <script src="{{ asset('backend/js/jquery-price-slider.js') }}"></script>
        <!-- meanmenu JS
          ============================================ -->
        <script src="{{ asset('backend/js/jquery.meanmenu.js') }}"></script>
        <!-- owl.carousel JS
          ============================================ -->
        <script src="{{ asset('backend/js/owl.carousel.min.js') }}"></script>
        <!-- sticky JS
          ============================================ -->
        <script src="{{ asset('backend/js/jquery.sticky.js') }}"></script>
        <!-- scrollUp JS
          ============================================ -->
        <script src="{{ asset('backend/js/jquery.scrollUp.min.js') }}"></script>
        <!-- mCustomScrollbar JS
          ============================================ -->
        <script src="{{ asset('backend/js/scrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>
        <script src="{{ asset('backend/js/scrollbar/mCustomScrollbar-active.js') }}"></script>
        <!-- metisMenu JS
          ============================================ -->
        <script src="{{ asset('backend/js/metisMenu/metisMenu.min.js') }}"></script>
        <script src="{{ asset('backend/js/metisMenu/metisMenu-active.js') }}"></script>
        <!-- morrisjs JS
          ============================================ -->
        <script src="{{ asset('backend/js/sparkline/jquery.sparkline.min.js') }}"></script>
        <script src="{{ asset('backend/js/sparkline/jquery.charts-sparkline.js') }}"></script>
        <!-- calendar JS
          ============================================ -->
        <script src="{{ asset('backend/js/calendar/moment.min.js') }}"></script>
        <script src="{{ asset('backend/js/calendar/fullcalendar.min.js') }}"></script>
        <script src="{{ asset('backend/js/calendar/fullcalendar-active.js') }}"></script>
        <!-- tab JS
          ============================================ -->
        <script src="{{ asset('backend/js/tab.js') }}"></script>
        <!-- plugins JS
          ============================================ -->
        <script src="{{ asset('backend/js/plugins.js') }}"></script>
        <!-- main JS
          ============================================ -->
        <script src="{{ asset('backend/js/main.js') }}"></script>
    </body>

    </html>
@endsection
