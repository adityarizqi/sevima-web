@spaceless
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>@yield('title') | GuruLes.com - Tempatnya Pelajar Belajar</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="shortcut icon" href="#" type="image/x-icon" />
    <link rel="apple-touch-icon" href="#" />
    <link rel="stylesheet" href="{{ url('assets/web/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ url('assets/web/css/pogo-slider.min.css') }}" />
    <link rel="stylesheet" href="{{ url('assets/web/css/style.css') }}" />
    <link rel="stylesheet" href="{{ url('assets/web/css/responsive.css') }}" />
    <link rel="stylesheet" href="{{ url('assets/web/css/custom.css') }}" />
</head>

<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">
    <div id="preloader">
        <div class="loader">
            <img src="{{ url('assets/web/images/loader.gif') }}" alt="#" />
        </div>
    </div>

    @include('layouts.header')

    @yield('content')

    @include('layouts.footer')

    <a href="#" id="scroll-to-top" class="hvr-radial-out"><i class="fa fa-angle-up"></i></a>

    <script src="{{ url('assets/web/js/jquery.min.js') }}"></script>
    <script src="{{ url('assets/web/js/popper.min.js') }}"></script>
    <script src="{{ url('assets/web/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('assets/web/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ url('assets/web/js/jquery.pogo-slider.min.js') }}"></script>
    <script src="{{ url('assets/web/js/slider-index.js') }}"></script>
    <script src="{{ url('assets/web/js/smoothscroll.js') }}"></script>
    <script src="{{ url('assets/web/js/form-validator.min.js') }}"></script>
    <script src="{{ url('assets/web/js/contact-form-script.js') }}"></script>
    <script src="{{ url('assets/web/js/isotope.min.js') }}"></script>
    <script src="{{ url('assets/web/js/images-loded.min.js') }}"></script>
    <script src="{{ url('assets/web/js/custom.js') }}"></script>
</body>

</html>
@endspaceless
