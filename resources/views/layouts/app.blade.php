<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <meta name="title" content="{{nova_get_setting('site_title')}} - @yield('seo_title')">
        <meta name="description" content="@yield('seo_description')">
        <meta name="keywords" content="@yield('seo_keywords')">

        <title>{{nova_get_setting('site_title')}} - @yield('title')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Italianno&display=swap" rel="stylesheet">
        <link rel="apple-touch-icon" sizes="180x180" href="/storage/{{nova_get_setting('favicon_logo')}}">
        <link rel="icon" type="image/png" sizes="32x32" href="/storage/{{nova_get_setting('favicon_logo')}}">
        <link rel="icon" type="image/png" sizes="16x16" href="/storage/{{nova_get_setting('favicon_logo')}}">
        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/combined.css') }}">

        <!-- Scripts -->
        <script src="//unpkg.com/alpinejs"></script>
        <script src="{{ mix('js/combined.js') }}" defer></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpRqZ9DnGDII3uBFTX-vphW5PlTat4lwY&callback=initMap&v=weekly" async></script>
        <script>
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date(); a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
            })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-88972235-1', 'auto');
            ga('send', 'pageview');

        </script>

    </head>
    <body>
    <div class="preloader">
        <img class="preloader__image" width="60" src="/assets/images/loader.png" alt="">
    </div>
    <div class="page-wrapper">
            @include('layouts.navigation')

            <main>
                {{ $slot }}
            </main>
        @include('layouts.footer')
        @include('layouts.mobile-nav')
    </div>
    @yield('script')
    @yield('script_gallery')
    </body>
</html>
