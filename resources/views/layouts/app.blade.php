<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link rel="icon" href="https://pubgmcommunity.id/logo-pcc.ico" type="image/x-icon">
    <link href="{{asset('pubg/css/fonts.css')}}" rel="stylesheet" />
    <link href="{{asset('pubg/css/style.css')}}" rel="stylesheet" />
    <link href="{{asset('pubg/css/helper.css')}}" rel="stylesheet" />
    <link href="{{asset('pubg/css/custom.css')}}" rel="stylesheet" />


    <!-- Styles -->
    {{-- <link rel="stylesheet" href="{{ mix('css/app.css') }}"> --}}

    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>

</head>

<body>
    <!--MAIN MENU WRAP BEGIN-->
    @include('layouts.menu')
    <!--MAIN MENU WRAP END-->
    @yield('content')
    <!--// Footer \\-->
    @include('layouts.footer')
    <!--// Footer \\-->

    <script type="text/javascript" src="https://pubgmcommunity.id/js/library/jquery.js"></script>
    <script type="text/javascript" src="https://pubgmcommunity.id/js/library/jquery-ui.js"></script>
    <script type="text/javascript" src="https://pubgmcommunity.id/js/library/bootstrap.js"></script>
    <script type="text/javascript" src="https://pubgmcommunity.id/js/library/jquery.sticky.js"></script>
    <script type="text/javascript" src="https://pubgmcommunity.id/js/library/jquery.jcarousel.js"></script>
    <script type="text/javascript" src="https://pubgmcommunity.id/js/library/jcarousel.connected-carousels.js"></script>
    <script type="text/javascript" src="https://pubgmcommunity.id/js/library/owl.carousel.js"></script>
    <script type="text/javascript" src="https://pubgmcommunity.id/js/library/progressbar.js"></script>
    <script type="text/javascript" src="https://pubgmcommunity.id/js/library/jquery.bracket.min.js"></script>
    <script type="text/javascript" src="https://pubgmcommunity.id/js/library/chartist.js"></script>
    <script type="text/javascript" src="https://pubgmcommunity.id/js/library/Chart.js"></script>
    <script type="text/javascript" src="https://pubgmcommunity.id/js/library/fancySelect.js"></script>
    <script type="text/javascript" src="https://pubgmcommunity.id/js/library/isotope.pkgd.js"></script>
    <script type="text/javascript" src="https://pubgmcommunity.id/js/library/imagesloaded.pkgd.js"></script>

    <script type="text/javascript" src="https://pubgmcommunity.id/js/jquery.team-coundown.js"></script>
    <script type="text/javascript" src="https://pubgmcommunity.id/js/matches-slider.js"></script>
    <script type="text/javascript" src="https://pubgmcommunity.id/js/header.js"></script>
    <script type="text/javascript" src="https://pubgmcommunity.id/js/matches_broadcast_listing.js"></script>
    <script type="text/javascript" src="https://pubgmcommunity.id/js/news-line.js"></script>
    <script type="text/javascript" src="https://pubgmcommunity.id/js/match_galery.js"></script>
    <script type="text/javascript" src="https://pubgmcommunity.id/js/main-club-gallery.js"></script>
    <script type="text/javascript" src="https://pubgmcommunity.id/js/product-slider.js"></script>
    <script type="text/javascript" src="https://pubgmcommunity.id/js/circle-bar.js"></script>
    <script type="text/javascript" src="https://pubgmcommunity.id/js/standings.js"></script>
    <script type="text/javascript" src="https://pubgmcommunity.id/js/shop-price-filter.js"></script>
    <script type="text/javascript" src="https://pubgmcommunity.id/js/timeseries.js"></script>
    <script type="text/javascript" src="https://pubgmcommunity.id/js/radar.js"></script>
    <script type="text/javascript" src="https://pubgmcommunity.id/js/slider.js"></script>
    <script type="text/javascript" src="https://pubgmcommunity.id/js/preloader.js"></script>
    <script type="text/javascript" src="https://pubgmcommunity.id/js/diagram.js"></script>
    <script type="text/javascript" src="https://pubgmcommunity.id/js/bi-polar-diagram.js"></script>
    <script type="text/javascript" src="https://pubgmcommunity.id/js/label-placement-diagram.js"></script>
    <script type="text/javascript" src="https://pubgmcommunity.id/js/donut-chart.js"></script>
    <script type="text/javascript" src="https://pubgmcommunity.id/js/animate-donut.js"></script>
    <script type="text/javascript" src="https://pubgmcommunity.id/js/advanced-smil.js"></script>
    <script type="text/javascript" src="https://pubgmcommunity.id/js/svg-path.js"></script>
    <script type="text/javascript" src="https://pubgmcommunity.id/js/pick-circle.js"></script>
    <script type="text/javascript" src="https://pubgmcommunity.id/js/horizontal-bar.js"></script>
    <script type="text/javascript" src="https://pubgmcommunity.id/js/gauge-chart.js"></script>
    <script type="text/javascript" src="https://pubgmcommunity.id/js/stacked-bar.js"></script>

    <script type="text/javascript" src="https://pubgmcommunity.id/js/library/chartist-plugin-legend.js"></script>
    <script type="text/javascript" src="https://pubgmcommunity.id/js/library/chartist-plugin-threshold.js"></script>
    <script type="text/javascript" src="https://pubgmcommunity.id/js/library/chartist-plugin-pointlabels.js"></script>

    <script type="text/javascript" src="https://pubgmcommunity.id/js/treshold.js"></script>
    <script type="text/javascript" src="https://pubgmcommunity.id/js/visible.js"></script>
    <script type="text/javascript" src="https://pubgmcommunity.id/js/anchor.js"></script>
    <script type="text/javascript" src="https://pubgmcommunity.id/js/landing_carousel.js"></script>
    <script type="text/javascript" src="https://pubgmcommunity.id/js/landing_sport_standings.js"></script>
    <script type="text/javascript" src="https://pubgmcommunity.id/js/twitterslider.js"></script>
    <script type="text/javascript" src="https://pubgmcommunity.id/js/champions.js"></script>
    <script type="text/javascript" src="https://pubgmcommunity.id/js/landing_mainnews_slider.js"></script>
    <script type="text/javascript" src="https://pubgmcommunity.id/js/carousel.js"></script>
    <script type="text/javascript" src="https://pubgmcommunity.id/js/video_slider.js"></script>
    <script type="text/javascript" src="https://pubgmcommunity.id/js/footer_slides.js"></script>
    <script type="text/javascript" src="https://pubgmcommunity.id/js/player_test.js"></script>

    <script type="text/javascript" src="https://pubgmcommunity.id/js/main.js"></script>
    <script type="text/javascript" src="https://pubgmcommunity.id/js/custom.js"></script>
    @livewireScripts
    <script src="https://cdn.jsdelivr.net/gh/livewire/vue@v0.3.x/dist/livewire-vue.js"></script>
</body>

</html>
