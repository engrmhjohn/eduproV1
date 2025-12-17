<header>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-2 col-lg-2 col-md-3 col-5">
                <a href="{{ route('/') }}">
                    <img src="{{ asset('frontendAssets/static_imges/logo.png') }}" alt="Logo" loading="lazy" width="150">
                </a>
            </div>
            <div class="col-7 moblie_menu_icon">
                <a data-bs-toggle="offcanvas" href="#moble_menu" role="button" aria-controls="offcanvasExample"><i class="fa-solid fa-bars-staggered menu_bar_icon"></i></a>
            </div>
            <div class="col-xl-3 col-lg-10 col-md-9 col-8 search_panel">
                <div class="search_box">
                    <form action="">
                        <div class="search_inside">
                            <input type="search" name="mega_search" id="mega_search" placeholder="কোর্স সার্চ করুন..">
                            <button type="submit">
                                <img src="{{ asset('frontendAssets') }}/static_imges/search.png" alt="Search Icon" loading="lazy">
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-xl-7 col-lg-12 col-md-12 col-12 right_menu_item">
                <div class="main_menu_list">
                    <ul class="desktop_menu">
                        <li class="show_sub_menu">
                            <a class="main_menu pl-0 empty_sub" href="{{ route('front.about.us') }}">আমাদের সম্পর্কে
                            </a>
                        </li>
                        <li class="show_sub_menu">
                            <a class="main_menu pl-0 empty_sub" href="{{ route('front.our.courses') }}">কোর্সসমূহ
                            </a><i class="fa-solid fa-chevron-down"></i>
                            <ul class="desktop_sub_menu1 ">
                                <li><a href="{{ route('front.course.details') }}">ISP Setup</a></li>
                                <li><a href="{{ route('front.course.details') }}">ISP Setup (Premium)</a></li>
                                <li><a href="{{ route('front.course.details') }}">ISP Setup with Juniper</a></li>
                                <li><a href="{{ route('front.course.details') }}">Cyber Security</a></li>
                                <li><a href="{{ route('front.course.details') }}">Python with Django Framework</a></li>
                                <li><a href="{{ route('front.course.details') }}">CCNA</a></li>
                                <li><a href="{{ route('front.course.details') }}">Microsoft Office Program</a></li>
                                <li><a href="{{ route('front.course.details') }}">App Development</a></li>
                            </ul>
                        </li>
                        <li class="show_sub_menu">
                            <a class="main_menu pl-0 empty_sub" href="{{ route('front.contact.us') }}">যোগাযোগ করুন
                            </a>
                        </li>
                        <li class="show_sub_menu">
                            <a class="main_menu pl-0 empty_sub" href="javascript:void(0)">অন্যান্য
                            </a><i class="fa-solid fa-chevron-down"></i>

                            <ul class="desktop_sub_menu1 ">
                                <li>
                                    <a href="{{ route('front.success.story') }}">সাফল্যের গল্প</a>
                                </li>
                                <li>
                                    <a href="">ইন্ডাস্ট্রিয়াল অ্যাটাচমেন্ট</a>
                                </li>
                                <li>
                                    <a href="">রেগুলার রুটিন</a>
                                </li>
                                <li>
                                    <a href="">পার্মানেন্ট রুটিন</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">ব্লগ
                                    </a>
                                </li>
                                <li>
                                    <a href="">গ্যালারি</a>
                                </li>
                                <li>
                                    <a href="">অ্যাডমিন লগইন</a>
                                </li>
                            </ul>
                        </li>
                        <a class="fav-button1" href="javascript:void(0)">
                            <span> সার্টিফিকেট ভেরিফাই</span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 120 140" width="22" height="22" aria-hidden="true">

                                <!-- Ribbon left -->
                                <path d="M45 95 L25 135 L45 125 L60 135 L60 95 Z" fill="#f44336" />

                                <!-- Ribbon right -->
                                <path d="M75 95 L75 135 L90 125 L110 135 L90 95 Z" fill="#f44336" />

                                <!-- Outer medal -->
                                <circle cx="60" cy="60" r="48" fill="#FFD54F" />

                                <!-- Inner medal ring -->
                                <circle cx="60" cy="60" r="36" fill="#FFC107" />

                                <!-- Checkmark -->
                                <path d="M45 60 L56 70 L75 48" fill="none" stroke="#ffffff" stroke-width="8" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>

                        </a>

                    </ul>
                </div>
            </div>
        </div>
        <div class="offcanvas offcanvas-start" tabindex="-1" id="moble_menu" aria-labelledby="offcanvasExampleLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasExampleLabel">Offcanvas</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
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
