@spaceless
    <!--

        =========================================================
        * Volt Free - Bootstrap 5 Dashboard
        =========================================================

        * Product Page: https://themesberg.com/product/admin-dashboard/volt-bootstrap-5-dashboard
        * Copyright 2021 Themesberg (https://www.themesberg.com)
        * License (https://themesberg.com/licensing)

        * Designed and coded by https://themesberg.com

        =========================================================

        * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. Please contact us to request a removal.

        -->
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>@yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="title" content="GuruLes.com">
        <meta name="author" content="Themesberg">
        <meta name="description" content="gurules.com">
        <meta name="keywords" content="e-course, e-learning, online, gurules.com, cari-guru-les" />

        <link rel="apple-touch-icon" sizes="120x120"
            href="{{ url('assets/backend/assets/img/favicon/apple-touch-icon.png') }}">
        <link rel="icon" type="image/png" sizes="32x32"
            href="{{ url('assets/backend/assets/img/favicon/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="16x16"
            href="{{ url('assets/backend/assets/img/favicon/favicon-16x16.png') }}">
        <link rel="manifest" href="{{ url('assets/backend/assets/img/favicon/site.webmanifest') }}">
        <link rel="mask-icon" href="{{ url('assets/backend/assets/img/favicon/safari-pinned-tab.svg') }}" color="#ffffff">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="theme-color" content="#ffffff">

        <link type="text/css" href="{{ url('assets/backend/vendor/sweetalert2/dist/sweetalert2.min.css') }}"
            rel="stylesheet">
        <link type="text/css" href="{{ url('assets/backend/vendor/notyf/notyf.min.css') }}" rel="stylesheet">
        <link type="text/css" href="{{ url('assets/backend/css/volt.css') }}" rel="stylesheet">

    </head>

    <body>

        @if (!isset($ignore_dashboard_layout))
            @include('backend.layouts.partials.navbar')

            @include('backend.layouts.partials.sidebar')

            <main class="content">

                @include('backend.layouts.partials.header')

                @yield('content')

                @include('backend.layouts.partials.footer')
            </main>
        @else
            <main>
                @yield('content')
            </main>
        @endif

        <script src="{{ url('assets/backend/vendor/@popperjs/core/dist/umd/popper.min.js') }}"></script>
        <script src="{{ url('assets/backend/vendor/bootstrap/dist/js/bootstrap.min.js') }}"></script>
        <script src="{{ url('assets/backend/vendor/onscreen/dist/on-screen.umd.min.js') }}"></script>
        <script src="{{ url('assets/backend/vendor/nouislider/distribute/nouislider.min.js') }}"></script>
        <script src="{{ url('assets/backend/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js') }}"></script>
        <script src="{{ url('assets/backend/vendor/chartist/dist/chartist.min.js') }}"></script>
        <script src="{{ url('assets/backend/vendor/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js') }}">
        </script>
        <script src="{{ url('assets/backend/vendor/vanillajs-datepicker/dist/js/datepicker.min.js') }}"></script>
        <script src="{{ url('assets/backend/vendor/sweetalert2/dist/sweetalert2.all.min.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/moment.min.js"></script>
        <script src="{{ url('assets/backend/vendor/vanillajs-datepicker/dist/js/datepicker.min.js') }}"></script>
        <script src="{{ url('assets/backend/vendor/notyf/notyf.min.js') }}"></script>
        <script src="{{ url('assets/backend/vendor/simplebar/dist/simplebar.min.js') }}"></script>
        <script async defer src="https://buttons.github.io/buttons.js"></script>
        <script src="{{ url('assets/backend/assets/js/volt.js') }}"></script>

    </body>

    </html>
@endspaceless
