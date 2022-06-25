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
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="theme-color" content="#ffffff">

        @include('backend.layouts.partials.head')

    </head>

    <body>

        @include('backend.layouts.partials.script')

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

        <script>
            @if(session('success'))
                Swal.fire({
                    title: 'Berhasil',
                    text: "{{ session('success') }}",
                    icon: 'success',
                    confirmButtonText: 'Baik'
                })
            @elseif(session('error'))
                Swal.fire({
                    title: 'Gagal',
                    text: "{{ session('error') }}",
                    icon: 'error',
                    confirmButtonText: 'Baik'
                })
            @endif
        </script>
    </body>

    </html>
@endspaceless
