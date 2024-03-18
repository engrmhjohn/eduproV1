<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edu Pro :: Home</title>
    {{-- Bootstrap css  --}}
    <link rel="stylesheet" href="{{ asset('frontendAssets') }}/css/bootstrap.min.css">
    {{-- custom css  --}}
    <link rel="stylesheet" href="{{ asset('frontendAssets') }}/css/styles.css">
    {{-- custom font css  --}}
    <link rel="stylesheet" href="{{ asset('frontendAssets') }}/css/font_style.css">
    {{-- custom font css  --}}
    <link rel="stylesheet" href="{{ asset('frontendAssets') }}/css/all.css">
</head>
<body>
    <section class="top_bar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 left">
                    <ul>
                        <li><i class="fa-solid fa-phone"></i> +8801781398652</li>
                        <li><i class="fa-solid fa-envelope"></i> johnsubcse@gmail.com</li>
                    </ul>
                </div>
                <div class="col-lg-6 right">
                    <ul>
                        <li><a class="text-center" href=""><i class="fa-brands fa-facebook-f"></i></a></li>
                        <li><a class="text-center" href=""><i class="fa-brands fa-youtube"></i></a></li>
                        <li><a class="text-center" href=""><i class="fa-brands fa-instagram"></i></a></li>
                        <li><a class="text-center" href=""><i class="fa-brands fa-linkedin-in"></i></a></li>
                        <a class="login_register_button" href="">Login / Register</a>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    header
                </div>
            </div>
        </div>
    </header>
    <section class="hero_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="fw-bold">Grow Your Skills, Secure <strong>Your Future</strong> </h1>
                    <p>At Future IT and Language Training Institute, we're dedicated to shaping your future through cutting-edge IT education and comprehensive language training. </p>
                    <div class="animation_btn">
                        <a href="}" target="_blank">Learn More<i class="fa fa-arrow-right ms-3"></i></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img class="img-fluid" src="{{ asset('frontendAssets') }}/static_imges/hero.webp" alt="Hero Image" srcset="">
                </div>
            </div>
        </div>
    </section>

    {{-- Bootstrap js --}}
    <script src="{{ asset('frontendAssets') }}/js/bootstrap.min.js"></script>
    {{-- font awesome js --}}
    <script src="{{ asset('frontendAssets') }}/js/all.js"></script>
</body>
</html>