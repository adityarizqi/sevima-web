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

                <div class="mt-4">
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                        <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                            <li class="breadcrumb-item">
                                <a href="{{ route('backend.dashboard') }}">
                                    <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                                </a>
                            </li>
                            @foreach (explode('/', Request::path()) as $item)
                                @if ($loop->iteration > 1)
                                    <li class="breadcrumb-item">
                                        <a href="javascript::void(0)">{{ ucfirst($item) }}</a>
                                    </li>
                                @endif
                            @endforeach
                        </ol>
                    </nav>
                </div>

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

                @php
                    session()->forget('success');
                @endphp
            @elseif(session('error'))
                Swal.fire({
                    title: 'Gagal',
                    text: "{{ session('error') }}",
                    icon: 'error',
                    confirmButtonText: 'Baik'
                })

                @php
                    session()->forget('success');
                @endphp
            @endif
        </script>
    </body>

    </html>
@endspaceless
