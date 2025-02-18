
<!DOCTYPE html>
<html lang="en">

<head>
    <!--- Basic Page Needs  -->
    <meta charset="utf-8">
    @if ($setting->first()->title != null)
        <title>{{ $setting->first()->title }}</title>
    @endif
    @if ($setting->first()->favicon != null)
        <link rel="shortcut icon" href="{{ asset('uploads/setting') }}/{{ $setting->first()->favicon }}">
    @endif
    <!-- Meta Tags -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="">
    <meta name="author" content="AIMCOM">
    <meta name="keywords" content="aimcom">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Specific Meta  -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Adamina" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400,400i,700&amp;display=swap"
        rel="stylesheet">

    <!-- CSS -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/bootstrap.min.css">
    <!-- Jquery ui CSS -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/jquery-ui.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/font-awesome.min.css">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/flaticon/flaticon.css">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/owl.theme.default.min.css">
    <!-- Fancybox CSS -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/jquery.fancybox.min.css">
    <!-- Nav Menu CSS -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/slicknav.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/nav-menu.css">
    <!-- Void Mega Menu -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/vmm.menu.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/animate.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/ripple.min.css">
    <!-- Main StyleSheet CSS -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/style.css">

    <!-- REVOLUTION STYLE SHEETS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/assets/revolution/css/settings.css">
    <!-- REVOLUTION LAYERS STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/assets/revolution/css/layers.css">
    <!-- REVOLUTION NAVIGATION STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/assets/revolution/css/navigation.css">
    <!-- Meta Pixel Code -->
    @if ($setting->first()->fb_pixel != null)
        {!! $setting->first()->fb_pixel !!}
    @endif
    <!-- End Meta Pixel Code -->

    <!-- googletag Code -->
    @if ($setting->first()->google_tag != null)
        {!! $setting->first()->google_tag !!}
    @endif
    <!-- End googletag Code -->
</head>

<body class="dark-bg">
    <div id="preloader"></div>

    <!-- Main Header -->
    @include('frontend.layouts.header')

    <!-- Main Wrapper-->
    @yield('content')

    <!-- Footer -->
    @include('frontend.layouts.footer')
    
    <!-- Scripts -->
    <!-- jQuery Plugin -->
    <script src="{{ asset('frontend') }}/assets/js/jquery-3.2.0.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/jquery-ui.js"></script>
    <!-- Owl Carousel Plugin -->
    <script src="{{ asset('frontend') }}/assets/js/owl.carousel.min.js"></script>
    <!-- Main Counterup Plugin-->
    <script src="{{ asset('frontend') }}/assets/js/jquery.counterup.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/countdown.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/jquery.scrollUp.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/jquery.waypoints.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/shuffle.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/jquery.fancybox.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/jquery.ripples.min.js"></script>
    <!-- Slick Nav  -->
    <script src="{{ asset('frontend') }}/assets/js/jquery.slicknav.min.js"></script>
    <!-- Void Mega Menu -->
    <script src="{{ asset('frontend') }}/assets/js/vmm.menu.js"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('frontend') }}/assets/js/bootstrap.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/imagesloaded.pkgd.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/masonry.pkgd.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/wow.js"></script>
    <!-- REVOLUTION JS FILES -->
    <script type="text/javascript" src="{{ asset('frontend') }}/assets/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="{{ asset('frontend') }}/assets/revolution/js/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="{{ asset('frontend') }}/assets/revolution/js/revolution.addon.slicey.min.js"></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
    <script type="text/javascript" src="{{ asset('frontend') }}/assets/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script type="text/javascript" src="{{ asset('frontend') }}/assets/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script type="text/javascript" src="{{ asset('frontend') }}/assets/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script type="text/javascript" src="{{ asset('frontend') }}/assets/revolution/js/extensions/revolution.extension.layeranimation.min.js">
    </script>
    <script type="text/javascript" src="{{ asset('frontend') }}/assets/revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script type="text/javascript" src="{{ asset('frontend') }}/assets/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="{{ asset('frontend') }}/assets/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script type="text/javascript" src="{{ asset('frontend') }}/assets/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <!-- Main Script -->
    <script src="{{ asset('frontend') }}/assets/js/theme.js"></script>


</body>

</html>
