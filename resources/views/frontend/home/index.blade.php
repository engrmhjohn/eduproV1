<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edu Pro :: Home</title>
    <!-- Bootstrap css  -->
    <link rel="stylesheet" href="{{ asset('frontendAssets') }}/css/bootstrap.min.css">
    <!-- custom css  -->
    <link rel="stylesheet" href="{{ asset('frontendAssets') }}/css/styles.css">
    <link rel="stylesheet" href="{{ asset('frontendAssets') }}/css/responsive.css">
    <!-- custom font css  -->
    <link rel="stylesheet" href="{{ asset('frontendAssets') }}/css/font_style.css">
    <!-- Libraries Stylesheet -->
    <link href="{{ asset('frontendAssets') }}/lib/animate/animate.min.css" rel="stylesheet">
    <link href="{{ asset('frontendAssets') }}/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="{{ asset('frontendAssets') }}/css/slick.css" rel="stylesheet" >
    <!-- Font Awesome  -->
    <link rel="stylesheet" href="{{ asset('frontendAssets') }}/css/fontawesome.min.css">
    <link rel="stylesheet" href="{{ asset('frontendAssets') }}/css/all.min.css">
</head>

<body>
    <section class="top_bar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 left">
                    <ul>
                        <li><i class="fa-solid fa-phone"></i> +8801781398652</li>
                        <li><i class="fa-solid fa-envelope"></i> johnsubcse@gmail.com</li>
                    </ul>
                </div>
                <div class="col-lg-6 col-md-6 right">
                    <ul>
                        <li><a class="text-center" href="javascript:void(0)"><i class="fa-brands fa-facebook-f"></i></a></li>
                        <li><a class="text-center" href="javascript:void(0)"><i class="fa-brands fa-youtube"></i></a></li>
                        <li><a class="text-center" href="javascript:void(0)"><i class="fa-brands fa-instagram"></i></a></li>
                        <li><a class="text-center" href="javascript:void(0)"><i class="fa-brands fa-linkedin-in"></i></a></li>
                        <a class="login_register_button" href="javascript:void(0)">Login / Register</a>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <header>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-2 col-md-3 col-5">
                    <img class="img-fluid" src="{{ asset('frontendAssets/static_imges/logo.png') }}" alt="Logo">
                </div>
                <div class="col-7 moblie_menu_icon">
                    <div class="btn-group mobile_dropdown_lang">
                        <button type="button" class="language_btn" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-rotate"></i> Eng
                        </button>
                        <ul class="dropdown-menu lang_dropdown bg-secondary">
                            <li>
                                <a href="/bn">বাংলা</a>
                            </li>
                        </ul>
                    </div>
                    <a data-bs-toggle="offcanvas" href="#moble_menu" role="button" aria-controls="offcanvasExample"><i
                            class="fa-solid fa-bars-staggered menu_bar_icon"></i></a>
                </div>
                <div class="col-lg-3 col-md-9 col-8 search_panel">
                    <div class="search_box">
                        <form action="">
                            <div class="search_inside">
                                <input type="search" name="mega_search" id="mega_search" placeholder="Search...">
                                <button type="submit">
                                    <img src="{{ asset('frontendAssets') }}/static_imges/search.png" alt="Search Icon">
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5 col-md-9 col-12 right_menu_item">
                    <div class="main_menu_list">
                        <ul class="desktop_menu">
                            <li class="show_sub_menu">
                                <a class="main_menu pl-0 empty_sub" href="javascript:void(0)">About Us
                                </a>
                            </li>
                            <li class="show_sub_menu">
                                <a class="main_menu pl-0 empty_sub" href="javascript:void(0)">Contact Us
                                </a>
                            </li>
                            <li class="show_sub_menu">
                                <a class="main_menu pl-0 empty_sub" href="javascript:void(0)">More
                                </a><i class="fa-solid fa-chevron-down"></i>

                                <ul class="desktop_sub_menu1 ">
                                    <li class="show_sub_menu">
                                        <a class="main_menu pl-0 empty_sub" href="https://onesky.com.bd/blog">Blog
                                        </a>
                                    </li>

                                    <li>
                                        <a href="https://onesky.com.bd/gallery">Gallery</a>
                                    </li>
                                    <li>
                                        <a href="https://onesky.com.bd/news-event">Events</a>
                                    </li>
                                    <li>
                                        <a href="https://onesky.com.bd/circular">Career</a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="https://onesky.com.bd/login">Admin Panel</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="show_sub_menu">
                                <a class="main_menu pl-0 empty_sub" href="javascript:void(0)">Courses
                                </a><i class="fa-solid fa-chevron-down"></i>

                                <ul class="desktop_sub_menu1 ">
                                    <li class="show_sub_menu">
                                        <a class="main_menu pl-0 empty_sub" href="https://onesky.com.bd/blog">Blog
                                        </a>
                                    </li>

                                    <li>
                                        <a href="https://onesky.com.bd/gallery">Gallery</a>
                                    </li>
                                    <li>
                                        <a href="https://onesky.com.bd/news-event">Events</a>
                                    </li>
                                    <li>
                                        <a href="https://onesky.com.bd/circular">Career</a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="https://onesky.com.bd/login">Admin Panel</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 lang_btn_panel_desktop">
                    <div class="lang_change">
                        <a class="lang_item lang_item_active" href="javascript:void(0)">Eng</a>
                        <a class="lang_item" href="/bn">বাংলা</a>
                    </div>
                </div>
            </div>

            <div class="offcanvas offcanvas-start" tabindex="-1" id="moble_menu"
                aria-labelledby="offcanvasExampleLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasExampleLabel">Offcanvas</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <div>
                        Some text as placeholder. In real life you can have the elements you have chosen. Like, text,
                        images, lists, etc.
                    </div>
                    <div class="dropdown mt-3">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                            Dropdown button
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- hero area start -->
    <section class="hero_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mt-5">
                    <h1 class="fw-bold">Grow Your Skills, Secure <strong>Your Future</strong> </h1>
                    <p class="mt-5 mb-5">At Future IT and Language Training Institute, we're dedicated to shaping your
                        future through
                        cutting-edge IT education and comprehensive language training. </p>
                    <div class="animation_btn">
                        <a href="javascript:void(0)" target="_blank">Learn More<i class="fa fa-arrow-right ms-3"></i></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img class="img-fluid" src="{{ asset('frontendAssets') }}/static_imges/hero.webp"
                        alt="Hero Image" srcset="">
                </div>
            </div>
        </div>
    </section>
    <!-- hero area end -->
    <!-- authorized partner start -->
    <section class="partner pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 client_slick_section">
                    <fieldset>
                        <legend>Authorized Partners
                            <div class="left_circle"></div>
                            <div class="right_circle"></div>
                        </legend>
                        <div class="partner_wrap">
                            <div class="item">
                                <img class="img-fluid" src="{{ asset('frontendAssets') }}/static_imges/rtv.png">
                            </div>
                            <div class="item">
                                <img class="img-fluid" src="{{ asset('frontendAssets') }}/static_imges/apex.png">
                            </div>
                            <div class="item">
                                <img class="img-fluid" src="{{ asset('frontendAssets') }}/static_imges/arora.png">
                            </div>
                            <div class="item">
                                <img class="img-fluid"
                                    src="{{ asset('frontendAssets') }}/static_imges/atn_bangla.png">
                            </div>
                            <div class="item">
                                <img class="img-fluid" src="{{ asset('frontendAssets') }}/static_imges/basic.jpg">
                            </div>
                            <div class="item">
                                <img class="img-fluid" src="{{ asset('frontendAssets') }}/static_imges/premium.png">
                            </div>
                            <div class="item">
                                <img class="img-fluid" src="{{ asset('frontendAssets') }}/static_imges/atn_mart.png">
                            </div>
                            <div class="item">
                                <img class="img-fluid" src="{{ asset('frontendAssets') }}/static_imges/somoy.png">
                            </div>
                        </div>
                    </fieldset>
                </div>
            </div>
        </div>
    </section>
    <!-- authorized partner end -->
    <!-- courses carousal start -->
    <section class="course_panel pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 class="fw-bold">Our Demanding Courses</h1>
                    <p>Elevate your skills with our demanding courses designed to push your boundaries and unlock your
                        full potential.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="all-course-tab" data-bs-toggle="tab"
                                data-bs-target="#all-course-tab-pane" type="button" role="tab"
                                aria-controls="all-course-tab-pane" aria-selected="true">All Course</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="single1-tab" data-bs-toggle="tab"
                                data-bs-target="#single1-tab-pane" type="button" role="tab"
                                aria-controls="single1-tab-pane" aria-selected="false">Digital Marketing</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="single2-tab" data-bs-toggle="tab"
                                data-bs-target="#single2-tab-pane" type="button" role="tab"
                                aria-controls="single2-tab-pane" aria-selected="false">Web Design &
                                Develpment</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="single3-tab" data-bs-toggle="tab"
                                data-bs-target="#single3-tab-pane" type="button" role="tab"
                                aria-controls="single3-tab-pane" aria-selected="false">Netwroking</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="all-course-tab-pane" role="tabpanel"
                            aria-labelledby="all-course-tab" tabindex="0">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-12 mt-5">
                                    <div class="course_card">
                                        <div class="course_header">
                                            <a href="javascript:void(0)"><img class="img-fluid"
                                                    src="{{ asset('frontendAssets') }}/static_imges/c1.png"
                                                    alt="Course Image"></a>
                                            <div class="timer">
                                                <span><i class="fa-regular fa-clock"></i> 10 hr 35 mins</span>
                                            </div>
                                        </div>
                                        <div class="course_body">
                                            <div class="course_category">
                                                <span>DIgital Marketing</span>
                                            </div>
                                            <div class="course_name mt-2 mb-2">
                                                <h4 class="fw-bold"><a class="text-dark" href="javascript:void(0)">Advanced
                                                        Digital Marketing</a></h4>
                                                <img src="{{ asset('frontendAssets') }}/static_imges/arrow_up.png"
                                                    alt="Arrow Image">
                                            </div>
                                            <div class="course_footer mt-3">
                                                <div class="instructor_info">
                                                    <div class="left_info">
                                                        <div class="first_box">
                                                            <img class="img-fluid"
                                                                src="{{ asset('frontendAssets') }}/static_imges/john.jpg"
                                                                alt="Instructor Image">
                                                        </div>
                                                        <div class="second_box">
                                                            <h6 class="fw-bold">Mehedi Hasan John</h6>
                                                            <p class="text-muted">100 Enrolled</p>
                                                        </div>
                                                    </div>
                                                    <div class="price_info">
                                                        <strong>BDT 10000</strong>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12 mt-5">
                                    <div class="course_card">
                                        <div class="course_header">
                                            <a href="javascript:void(0)"><img class="img-fluid"
                                                    src="{{ asset('frontendAssets') }}/static_imges/c2.png"
                                                    alt="Course Image"></a>
                                            <div class="timer">
                                                <span><i class="fa-regular fa-clock"></i> 2 hr 55 mins</span>
                                            </div>
                                        </div>
                                        <div class="course_body">
                                            <div class="course_category">
                                                <span>Graphic Design</span>
                                            </div>
                                            <div class="course_name mt-2 mb-2">
                                                <h4 class="fw-bold"><a class="text-dark" href="javascript:void(0)">Advance
                                                        Graphic Design</a></h4>
                                                <img src="{{ asset('frontendAssets') }}/static_imges/arrow_up.png"
                                                    alt="Arrow Image">
                                            </div>
                                            <div class="course_footer mt-3">
                                                <div class="instructor_info">
                                                    <div class="left_info">
                                                        <div class="first_box">
                                                            <img class="img-fluid"
                                                                src="{{ asset('frontendAssets') }}/static_imges/john.jpg"
                                                                alt="Instructor Image">
                                                        </div>
                                                        <div class="second_box">
                                                            <h6 class="fw-bold">Sadman Mahmud Khan</h6>
                                                            <p class="text-muted">900 Enrolled</p>
                                                        </div>
                                                    </div>
                                                    <div class="price_info">
                                                        <strong>BDT 15000</strong>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12 mt-5">
                                    <div class="course_card">
                                        <div class="course_header">
                                            <a href="javascript:void(0)"><img class="img-fluid"
                                                    src="{{ asset('frontendAssets') }}/static_imges/c3.png"
                                                    alt="Course Image"></a>
                                            <div class="timer">
                                                <span><i class="fa-regular fa-clock"></i> 20 hr 05 mins</span>
                                            </div>
                                        </div>
                                        <div class="course_body">
                                            <div class="course_category">
                                                <span>Web Design</span>
                                            </div>
                                            <div class="course_name mt-2 mb-2">
                                                <h4 class="fw-bold"><a class="text-dark" href="javascript:void(0)">Advanced Web
                                                        Design & Development with SEO</a></h4>
                                                <img src="{{ asset('frontendAssets') }}/static_imges/arrow_up.png"
                                                    alt="Arrow Image">
                                            </div>
                                            <div class="course_footer mt-3">
                                                <div class="instructor_info">
                                                    <div class="left_info">
                                                        <div class="first_box">
                                                            <img class="img-fluid"
                                                                src="{{ asset('frontendAssets') }}/static_imges/john.jpg"
                                                                alt="Instructor Image">
                                                        </div>
                                                        <div class="second_box">
                                                            <h6 class="fw-bold">Shazzadul Islam Chowdhury</h6>
                                                            <p class="text-muted">50 Enrolled</p>
                                                        </div>
                                                    </div>
                                                    <div class="price_info">
                                                        <strong>BDT 50000</strong>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="single1-tab-pane" role="tabpanel"
                            aria-labelledby="single1-tab" tabindex="0">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-12 mt-5">
                                    <div class="course_card">
                                        <div class="course_header">
                                            <a href="javascript:void(0)"><img class="img-fluid"
                                                    src="{{ asset('frontendAssets') }}/static_imges/c1.png"
                                                    alt="Course Image"></a>
                                            <div class="timer">
                                                <span><i class="fa-regular fa-clock"></i> 10 hr 35 mins</span>
                                            </div>
                                        </div>
                                        <div class="course_body">
                                            <div class="course_category">
                                                <span>DIgital Marketing</span>
                                            </div>
                                            <div class="course_name mt-2 mb-2">
                                                <h4 class="fw-bold"><a class="text-dark" href="javascript:void(0)">Advanced
                                                        Digital Marketing</a></h4>
                                                <img src="{{ asset('frontendAssets') }}/static_imges/arrow_up.png"
                                                    alt="Arrow Image">
                                            </div>
                                            <div class="course_footer mt-3">
                                                <div class="instructor_info">
                                                    <div class="left_info">
                                                        <div class="first_box">
                                                            <img class="img-fluid"
                                                                src="{{ asset('frontendAssets') }}/static_imges/john.jpg"
                                                                alt="Instructor Image">
                                                        </div>
                                                        <div class="second_box">
                                                            <h6 class="fw-bold">Mehedi Hasan John</h6>
                                                            <p class="text-muted">100 Enrolled</p>
                                                        </div>
                                                    </div>
                                                    <div class="price_info">
                                                        <strong>BDT 10000</strong>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="single2-tab-pane" role="tabpanel"
                            aria-labelledby="single2-tab" tabindex="0">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-12 mt-5">
                                    <div class="course_card">
                                        <div class="course_header">
                                            <a href="javascript:void(0)"><img class="img-fluid"
                                                    src="{{ asset('frontendAssets') }}/static_imges/c2.png"
                                                    alt="Course Image"></a>
                                            <div class="timer">
                                                <span><i class="fa-regular fa-clock"></i> 2 hr 55 mins</span>
                                            </div>
                                        </div>
                                        <div class="course_body">
                                            <div class="course_category">
                                                <span>Graphic Design</span>
                                            </div>
                                            <div class="course_name mt-2 mb-2">
                                                <h4 class="fw-bold"><a class="text-dark" href="javascript:void(0)">Advance
                                                        Graphic Design</a></h4>
                                                <img src="{{ asset('frontendAssets') }}/static_imges/arrow_up.png"
                                                    alt="Arrow Image">
                                            </div>
                                            <div class="course_footer mt-3">
                                                <div class="instructor_info">
                                                    <div class="left_info">
                                                        <div class="first_box">
                                                            <img class="img-fluid"
                                                                src="{{ asset('frontendAssets') }}/static_imges/john.jpg"
                                                                alt="Instructor Image">
                                                        </div>
                                                        <div class="second_box">
                                                            <h6 class="fw-bold">Sadman Mahmud Khan</h6>
                                                            <p class="text-muted">900 Enrolled</p>
                                                        </div>
                                                    </div>
                                                    <div class="price_info">
                                                        <strong>BDT 15000</strong>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="single3-tab-pane" role="tabpanel"
                            aria-labelledby="single3-tab" tabindex="0">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-12 mt-5">
                                    <div class="course_card">
                                        <div class="course_header">
                                            <a href="javascript:void(0)"><img class="img-fluid"
                                                    src="{{ asset('frontendAssets') }}/static_imges/c3.png"
                                                    alt="Course Image"></a>
                                            <div class="timer">
                                                <span><i class="fa-regular fa-clock"></i> 20 hr 05 mins</span>
                                            </div>
                                        </div>
                                        <div class="course_body">
                                            <div class="course_category">
                                                <span>Web Design</span>
                                            </div>
                                            <div class="course_name mt-2 mb-2">
                                                <h4 class="fw-bold"><a class="text-dark" href="javascript:void(0)">Advanced Web
                                                        Design & Development with SEO</a></h4>
                                                <img src="{{ asset('frontendAssets') }}/static_imges/arrow_up.png"
                                                    alt="Arrow Image">
                                            </div>
                                            <div class="course_footer mt-3">
                                                <div class="instructor_info">
                                                    <div class="left_info">
                                                        <div class="first_box">
                                                            <img class="img-fluid"
                                                                src="{{ asset('frontendAssets') }}/static_imges/john.jpg"
                                                                alt="Instructor Image">
                                                        </div>
                                                        <div class="second_box">
                                                            <h6 class="fw-bold">Shazzadul Islam Chowdhury</h6>
                                                            <p class="text-muted">50 Enrolled</p>
                                                        </div>
                                                    </div>
                                                    <div class="price_info">
                                                        <strong>BDT 50000</strong>
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
        </div>
    </section>
    <!-- courses carousal end -->
    <!-- about us  start-->
    <section class="about_us_seciton pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 class="fw-bold">Benefits You will get From us</h1>
                    <p>Join us to access a world of knowledge and skills, and experience a profound boost in your
                        professional and personal development.</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-xl-4 col-md-4">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="teacher-tab" data-bs-toggle="tab"
                                data-bs-target="#teacher-tab-pane" type="button" role="tab"
                                aria-controls="teacher-tab-pane" aria-selected="true">Industry Expert Mentor</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="learning-tab" data-bs-toggle="tab"
                                data-bs-target="#learning-tab-pane" type="button" role="tab"
                                aria-controls="learning-tab-pane" aria-selected="false">Quality Learning
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="class-tab" data-bs-toggle="tab"
                                data-bs-target="#class-tab-pane" type="button" role="tab"
                                aria-controls="class-tab-pane" aria-selected="false">Recorded Class</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="price-tab" data-bs-toggle="tab"
                                data-bs-target="#price-tab-pane" type="button" role="tab"
                                aria-controls="price-tab-pane" aria-selected="false">Affordable Prices</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="support-tab" data-bs-toggle="tab"
                                data-bs-target="#support-tab-pane" type="button" role="tab"
                                aria-controls="support-tab-pane" aria-selected="false">Lifetime Support From
                                Mentor</button>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-8 col-xl-6 col-md-8">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="teacher-tab-pane" role="tabpanel"
                            aria-labelledby="teacher-tab" tabindex="0">
                            <video class="myVideo" width="100%" height="100%" controls>
                                <source src="{{ asset('frontendAssets') }}/static_imges/teacher.mp4"
                                    type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                        <div class="tab-pane fade" id="learning-tab-pane" role="tabpanel"
                            aria-labelledby="learning-tab" tabindex="0">
                            <video class="myVideo" width="100%" height="100%" controls>
                                <source src="{{ asset('frontendAssets') }}/static_imges/quality.mp4"
                                    type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                        <div class="tab-pane fade" id="class-tab-pane" role="tabpanel" aria-labelledby="class-tab"
                            tabindex="0">
                            <video class="myVideo" width="100%" height="100%" controls>
                                <source src="{{ asset('frontendAssets') }}/static_imges/record-videos.mp4"
                                    type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                        <div class="tab-pane fade" id="price-tab-pane" role="tabpanel" aria-labelledby="price-tab"
                            tabindex="0">Price</div>
                        <div class="tab-pane fade" id="support-tab-pane" role="tabpanel"
                            aria-labelledby="support-tab" tabindex="0">Support</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about us  end-->

    <!-- milestone  start-->
    <section class="milestone_section pt-5 pb-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <img class="img-fluid" src="{{ asset('frontendAssets') }}/static_imges/milestone.png"
                        alt="Milestone Image">
                </div>
                <div class="col-lg-6">
                    <div class="summary">
                        <div class="info text-center info_bg1">
                            <h1 class="fw-bold"><span class="counter">5000</span> +</h1>
                            <p>Enrolled Students</p>
                        </div>
                        <div class="info text-center info_bg2">
                            <h1 class="fw-bold"><span class="counter">1500</span> +</h1>
                            <p>Successful Students</p>
                        </div>
                        <div class="info text-center info_bg3">
                            <h1 class="fw-bold"><span class="counter">350</span> +</h1>
                            <p>Industry Experts</p>
                        </div>
                        <div class="info text-center info_bg4">
                            <h1 class="fw-bold"><span class="counter">90</span> %</h1>
                            <p>Successful Ratio</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- milestone  end-->
    <!-- success story  start-->
    <section class="success_story_section pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 class="fw-bold">Success Story</h1>
                    <p>Shine a spotlight on the stories of our determined students who have achieved remarkable feats
                        through their unwavering dedication.
                        See More</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 mt-5">
                    <div class="youtube_video_wrapper">
                        <iframe width="420" height="315"
                            src="https://www.youtube.com/embed/ImXDtNHuLM0"></iframe>
                    </div>
                </div>
                <div class="col-lg-6 mt-5">
                    <div class="youtube_video_wrapper">
                        <iframe width="420" height="315"
                            src="https://www.youtube.com/embed/0grIv4_9-tM"></iframe>
                    </div>
                </div>
                <div class="col-lg-12 mt-5 text-center">
                    <div class="animation_btn">
                        <a href="javascript:void(0)" target="_blank">See More<i class="fa fa-arrow-right ms-3"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- success story  end-->

    <!-- Events start-->
    <section class="event_section pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 class="fw-bold">Events & Activites</h1>
                    <p>Explore a visual showcase of our past events and activities through our photo gallery.</p>
                </div>
            </div>
            <div class="row testimonial mt-5">
                <div class="col-lg-12">
                    <div class="event_wrapper">
                        <div class="card event_card">
                            <a href="javascript:void(0)">
                                <img class="img-fluid" src="{{ asset('frontendAssets') }}/static_imges/e1.jpg"
                                alt="Event Image">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="event_wrapper">
                        <div class="card event_card">
                            <a href="javascript:void(0)">
                                <img class="img-fluid" src="{{ asset('frontendAssets') }}/static_imges/e2.jpg"
                                alt="Event Image">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="event_wrapper">
                        <div class="card event_card">
                            <a href="javascript:void(0)">
                                <img class="img-fluid" src="{{ asset('frontendAssets') }}/static_imges/e3.jpg"
                                alt="Event Image">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="event_wrapper">
                        <div class="card event_card">
                            <a href="javascript:void(0)">
                                <img class="img-fluid" src="{{ asset('frontendAssets') }}/static_imges/e4.jpg"
                                alt="Event Image">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="event_wrapper">
                        <div class="card event_card">
                            <a href="javascript:void(0)">
                                <img class="img-fluid" src="{{ asset('frontendAssets') }}/static_imges/e5.jpg"
                                alt="Event Image">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="event_wrapper">
                        <div class="card event_card">
                            <a href="javascript:void(0)">
                                <img class="img-fluid" src="{{ asset('frontendAssets') }}/static_imges/e6.jpg"
                                alt="Event Image">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="event_wrapper">
                        <div class="card event_card">
                            <a href="javascript:void(0)">
                                <img class="img-fluid" src="{{ asset('frontendAssets') }}/static_imges/e7.jpg"
                                alt="Event Image">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Events end-->
    <!-- Mentor start-->
    <section class="mentor_section pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 class="fw-bold">Meet Our Expert Mentors</h1>
                    <p>Meet the mentors who turn dreams into reality – your pathway to knowledge, skills, and success.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-6 mt-5">
                    <div class="mentor_card">
                        <div class="border_bg"></div>
                        <div class="mentor_head">
                            <img class="img-fluid" src="{{ asset('frontendAssets') }}/static_imges/john.jpg" alt="Mentor Image">
                        </div>
                        <div class="mentor_body text-center">
                            <h6 class="fw-bold mt-3">Mehedi Hasan John</h6>
                            <p class="fw-bold text-muted">Web Developer</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 mt-5">
                    <div class="mentor_card">
                        <div class="border_bg"></div>
                        <div class="mentor_head">
                            <img class="img-fluid" src="{{ asset('frontendAssets') }}/static_imges/john.jpg" alt="Mentor Image">
                        </div>
                        <div class="mentor_body text-center">
                            <h6 class="fw-bold mt-3">Mehedi Hasan John</h6>
                            <p class="fw-bold text-muted">Web Developer</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 mt-5">
                    <div class="mentor_card">
                        <div class="border_bg"></div>
                        <div class="mentor_head">
                            <img class="img-fluid" src="{{ asset('frontendAssets') }}/static_imges/john.jpg" alt="Mentor Image">
                        </div>
                        <div class="mentor_body text-center">
                            <h6 class="fw-bold mt-3">Mehedi Hasan John</h6>
                            <p class="fw-bold text-muted">Web Developer</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 mt-5">
                    <div class="mentor_card">
                        <div class="border_bg"></div>
                        <div class="mentor_head">
                            <img class="img-fluid" src="{{ asset('frontendAssets') }}/static_imges/john.jpg" alt="Mentor Image">
                        </div>
                        <div class="mentor_body text-center">
                            <h6 class="fw-bold mt-3">Mehedi Hasan John</h6>
                            <p class="fw-bold text-muted">Web Developer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Mentor end-->


    <script src="{{ asset('frontendAssets') }}/js/jquery 3.4.1.js"></script>
    <!-- Bootstrap js -->
    <script src="{{ asset('frontendAssets') }}/js/bootstrap.min.js"></script>
    <!-- font awesome js -->
    <script src="{{ asset('frontendAssets') }}/js/all.js"></script>
    <!-- slick js  -->
    <script src="{{ asset('frontendAssets') }}/js/slick.min.js"></script>
    <script src="{{ asset('frontendAssets') }}/lib/wow/wow.min.js"></script>
    <script src="{{ asset('frontendAssets') }}/lib/easing/easing.min.js"></script>
    <script src="{{ asset('frontendAssets') }}/lib/waypoints/waypoints.min.js"></script>
    <script src="{{ asset('frontendAssets') }}/lib/counterup/counterup.min.js"></script>
    <script src="{{ asset('frontendAssets') }}/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="{{ asset('frontendAssets') }}/lib/isotope/isotope.pkgd.min.js"></script>
    <!-- custom js  -->
    <script src="{{ asset('frontendAssets') }}/js/main.js"></script>
</body>

</html>
