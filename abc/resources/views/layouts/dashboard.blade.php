<!DOCTYPE html>
<html lang="en">

<head>
    <!-- PAGE TITLE HERE -->
    <title>Lara ABC</title>
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
    @yield('content')
</body>

</html>
