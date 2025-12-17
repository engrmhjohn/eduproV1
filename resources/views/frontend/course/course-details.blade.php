@extends('frontend.master')
@section('title', 'OSIT - Home | Professional IT Training Institute')
@section('content')
<section class="course-details-page py-5 position-relative">
    <div class="bg-pattern"></div>

    <div class="container position-relative">
        <!-- HERO -->
        <div class="row align-items-center gy-5">
            <div class="col-lg-7">
                <span class="badge mb-3">প্রফেশনাল কোর্স</span>

                <h1 class="mb-3">
                    ISP Setup, Administration & Monitoring
                </h1>

                <p class="subtitle mb-4">
                    এই কোর্সে আপনি বাস্তব অভিজ্ঞতার মাধ্যমে ISP নেটওয়ার্ক ডিজাইন, MikroTik কনফিগারেশন,
                    ব্যান্ডউইথ ম্যানেজমেন্ট, মনিটরিং ও সিকিউরিটি শিখবেন।
                </p>

                <div class="row meta mb-4">
                    <div class="col-6 col-md-4">
                        <span>কোর্স ইন্সট্রাক্টর</span>
                        <strong>AKM Jahangir</strong>
                    </div>
                    <div class="col-6 col-md-4">
                        <span>অভিজ্ঞতা</span>
                        <strong>২০+ বছর</strong>
                    </div>
                    <div class="col-6 col-md-4">
                        <span>কোর্স ফি</span>
                        <strong>৳ ১০,০০০</strong>
                    </div>
                </div>

                <div class="d-flex gap-3 flex-wrap">
                    <a href="#" class="btn btn-primary px-4 py-2">
                        এখনই রেজিস্ট্রেশন করুন
                    </a>
                    <a href="#" class="btn btn-outline-primary px-4 py-2">
                        ফ্রি টিউটোরিয়াল
                    </a>
                </div>
            </div>

            <div class="col-lg-5">
                <div class="card p-3">
                    <img src="{{ asset('frontendAssets') }}/static_imges/demo-course.webp" class="img-fluid" alt="">
                </div>
            </div>
        </div>

        <!-- INSTRUCTOR -->
        <div class="row mt-5">
            <div class="col-12">
                <h2 class="mb-4">কোর্স ইন্সট্রাক্টর</h2>
            </div>

            <div class="col-lg-6 col-md-8">
                <div class="card p-4 d-flex flex-row gap-4 align-items-center instructor-card">
                    <img src="{{ asset('frontendAssets') }}/static_imges/mentor1.png" alt="">
                    <div>
                        <h3 class="mb-2">AKM Jahangir</h3>
                        <p class="mb-0">
                            বাংলাদেশের প্রথম MikroTik Consultant।
                            ISP নেটওয়ার্ক, রাউটিং, সিকিউরিটি এবং ট্রাবলশুটিং-এ
                            ২০ বছরেরও বেশি বাস্তব অভিজ্ঞতা রয়েছে।
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- COURSE OUTLINE -->
        <div class="row mt-5">
            <div class="col-12">
                <h2 class="mb-4">Course Outline</h2>
            </div>

            <div class="col-lg-12">
                <div class="card p-4 outline-grid">
                    <div class="row">
                        <div class="col-lg-12 text-end">
                            <a class="fav-button1" href="javascript:void(0)">
                                <span>ডাউনলোড করুন</span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="h-5 w-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v12m0 0l-4-4m4 4l4-4M4 20h16" />
                                </svg>
                            </a>
                        </div>
                        <div class="col-md-6">
                            <ul>
                                <li>ISP WAN configuration (Static, DHCP, PPPoE)</li>
                                <li>Bandwidth & Queue management</li>
                                <li>Hotspot & PPPoE user profiles</li>
                                <li>Bridge & VLAN configuration</li>
                                <li>IP subnetting (easy method)</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul>
                                <li>Firewall, NAT & port forwarding</li>
                                <li>Load balancing & failover</li>
                                <li>Traffic monitoring & graphs</li>
                                <li>Router security practices</li>
                                <li>Auto backup & maintenance</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- INFO BOX -->
        <div class="row mt-5">
            <div class="col-12">
                <div class="service-sidebar">
                    <div class="sidebar-widget service-sidebar-single">
                        <div class="widget-box service-details-help">
                            <div class="service-details-content">
                                <h2 class="help-title">যোগাযোগ করুন</h2>
                                <p class="text">যেকোনো প্রশ্ন, কোর্স সংক্রান্ত তথ্য বা পরামর্শের জন্য আমাদের সাথে যোগাযোগ করুন।
                                    আমাদের টিম দ্রুত আপনার সাথে যোগাযোগ করবে।</p>
                                <p class="text">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon-map">
                                        <path d="M21 10c0 6-9 12-9 12S3 16 3 10a9 9 0 1 1 18 0z" />
                                        <circle cx="12" cy="10" r="3" />
                                    </svg>
                                    S.A Bhaban (4th Floor), Motijheel, Dhaka-1000
                                </p>
                                <p class="text">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon-clock">
                                        <circle cx="12" cy="12" r="9" />
                                        <path d="M12 7v5l3 3" />
                                    </svg>
                                    সকাল ০৯টা – সন্ধ্যা ৫টা
                                </p>
                                <div class="help-contact">
                                    <div class="help-cta d-flex justify-content-center align-items-center gap-3">
                                        <a href="tel:+8801400000000" class="fav-button1" aria-label="Call now">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="h-5 w-5">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 4.5c0 8.284 6.716 15 15 15h1.5a2.25 2.25 0 0 0 2.25-2.25v-1.035c0-.558-.225-1.095-.623-1.486l-2.7-2.637a1.875 1.875 0 0 0-2.463-.118l-.97.727a1.875 1.875 0 0 1-2.31.03 12.036 12.036 0 0 1-3.368-3.368 1.875 1.875 0 0 1 .03-2.31l.727-.97c.58-.773.527-1.85-.118-2.463L6.271 2.873A2.25 2.25 0 0 0 4.785 2.25H3.75A1.5 1.5 0 0 0 2.25 3.75v.75z" />
                                            </svg>
                                            <span>কল করুন 01404 090 700</span>
                                        </a>
                                        <a href="mailto:info@ositbd.com" class="fav-button1" aria-label="Email now">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="h-5 w-5">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l9 6 9-6M4 6h16a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2z" />
                                            </svg>
                                            <span>ইমেইল করুন info@ositbd.com</span>
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
</section>

@endsection
