<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="{{ asset('frontendAssets') }}/static_imges/fav32.png">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('frontendAssets') }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('frontendAssets') }}/css/styles.css">
    <link rel="stylesheet" href="{{ asset('frontendAssets') }}/css/responsive.css">
    <link rel="stylesheet" href="{{ asset('frontendAssets') }}/css/font_style.css">
    <link href="{{ asset('frontendAssets') }}/css/slick.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
    <link rel="stylesheet" href="{{ asset('frontendAssets') }}/css/all.min.css">
</head>
<body>
    {{-- <div id="bookLoader" class="book-loader">
        <div class="book-loader__book">
            <div class="book-loader__book-pg-shadow"></div>
            <div class="book-loader__book-pg"></div>
            <div class="book-loader__book-pg book-loader__book-pg--2"></div>
            <div class="book-loader__book-pg book-loader__book-pg--3"></div>
            <div class="book-loader__book-pg book-loader__book-pg--4"></div>
            <div class="book-loader__book-pg book-loader__book-pg--5"></div>
        </div>
    </div> --}}
    @include('frontend.include.topbar')
    @include('frontend.include.header')
    @yield('content')
    @include('frontend.include.footer')
    <script src="{{ asset('frontendAssets') }}/js/jquery 3.4.1.js"></script>
    <script src="{{ asset('frontendAssets') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('frontendAssets') }}/js/all.js"></script>
    <script src="{{ asset('frontendAssets') }}/js/slick.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
    <script src="{{ asset('frontendAssets') }}/js/main.js"></script>
    <script>
        window.addEventListener('load', function() {
            const loader = document.getElementById('bookLoader');
            if (loader) {
                // Fade out after page is loaded
                setTimeout(function() {
                    loader.classList.add('book-loader--hidden');

                    // Remove after fade out animation completes
                    setTimeout(function() {
                        loader.style.display = 'none';
                    }, 500);
                }, 300);
            }
        });

        // Optional: Show loader immediately on page start
        document.addEventListener('DOMContentLoaded', function() {
            const loader = document.getElementById('bookLoader');
            if (loader) {
                loader.style.display = 'grid'; // Or 'flex' if you prefer
            }
        });
    </script>
    @stack('script')
</body>
</html>
