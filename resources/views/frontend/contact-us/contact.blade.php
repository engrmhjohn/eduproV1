@extends('frontend.master')
@section('title', 'OSIT - Home | Professional IT Training Institute')
@section('content')
<section class="contact-section">
    <div class="container">
        <div class="row g-4 align-items-stretch">
            <div class="col-xl-4 col-lg-5">
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
                                    <div class="help-cta">
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
            <div class="col-xl-8 col-lg-7">
                <div class="contact-form-card">
                    <h3 class="form-title">আপনার প্রশ্ন লিখুন</h3>

                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="আপনার নাম">
                            </div>
                            <div class="col-md-6">
                                <input type="email" class="form-control" placeholder="ইমেইল">
                            </div>
                            <div class="col-md-6">
                                <input type="tel" class="form-control" placeholder="মোবাইল নম্বর">
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="বিষয়">
                            </div>
                            <div class="col-12">
                                <textarea class="form-control" rows="4" placeholder="আপনার প্রশ্ন লিখুন..."></textarea>
                            </div>
                            <div class="col-12 text-end">
                                <!-- your existing button design -->
                                <a href="javascript:void(0)" class="fav-button1" style="display: inline-block">
                                    <span>পাঠিয়ে দিন</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="h-5 w-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m-7-7l7 7-7 7" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
