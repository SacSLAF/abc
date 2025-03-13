<!DOCTYPE html>
<html lang="en">

<head>
    <!-- PAGE TITLE HERE -->
    <title> @isset($title)
        {{ $title }} |
        @endisset
        {{ config('app.name') }}
    </title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta name="keywords"
        content="Lara ABC" />
    <meta name="author" content="Dexignlabs" />
    <meta name="robots" content="index, follow" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover" />
    <meta name="description"
        content="Lara ABC" />
    <meta name="og:title" content="Lara ABC" />
    <meta name="og:description"
        content="Lara ABC" />
    <meta name="og:image" content="#" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="twitter:description"
        content="Lara ABC" />
    <meta name="twitter:title" content="Lara ABC" />
    <meta name="twitter:image" content="Lara ABC" />
    <meta name="twitter:card" content="summary_large_image" />
    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="assets/images/favicon.png" />
    <link href="{{ asset('assets/vendor/chartist/css/chartist.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/vendor/owl-carousel/owl.carousel.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/style.css')}}" rel="stylesheet" type="text/css" />
</head>

<body>
    @include('components/loader')


    <div id="main-wrapper">
        @include('components.dashboard.nav-header')
        @include('components.dashboard.chat')
        @include('components.dashboard.header')
        @include('components.dashboard.sidebar')

        @yield('content')

        @include('components.dashboard.footer')
    </div>

    <script>
        var enableSupportButton = "1";
    </script>
    <script>
        var asset_url = "assets/";
    </script>

    <script src="{{ asset('assets/vendor/global/global.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendor/chart-js/chart.bundle.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendor/owl-carousel/owl.carousel.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendor/peity/jquery.peity.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendor/apexchart/apexchart.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/dashboard/dashboard-1.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/custom.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/deznav-init.js')}}" type="text/javascript"></script>
    <script>
        function featuredmenus() {
            /*  testimonial one function by = owl.carousel.js */
            jQuery(".featured-menus").owlCarousel({
                loop: false,
                margin: 30,
                nav: true,
                autoplaySpeed: 3000,
                navSpeed: 3000,
                paginationSpeed: 3000,
                slideSpeed: 3000,
                smartSpeed: 3000,
                autoplay: false,
                dots: false,
                navText: [
                    '<i class="fa fa-caret-left"></i>',
                    '<i class="fa fa-caret-right"></i>',
                ],
                responsive: {
                    0: {
                        items: 1,
                    },
                    576: {
                        items: 1,
                    },
                    767: {
                        items: 1,
                    },
                    991: {
                        items: 2,
                    },
                    1200: {
                        items: 2,
                    },
                    1600: {
                        items: 3,
                    },
                },
            });
        }

        jQuery(window).on("load", function() {
            setTimeout(function() {
                featuredmenus();
            }, 1000);
        });

        jQuery(document).ready(function() {
            setTimeout(function() {
                dezSettingsOptions.version = 'dark';
                new dezSettings(dezSettingsOptions);
            }, 500)
        });
    </script>

</body>

</html>