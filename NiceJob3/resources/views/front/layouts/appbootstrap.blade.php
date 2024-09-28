<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0" />
    <title>Preskool - Basic Inputs</title>

    <link rel="shortcut icon" href="{{ asset('asset/img/favicon.png') }}" />

    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700&display=swap"
        rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('asset/plugins/bootstrap/css/bootstrap.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('asset/plugins/feather/feather.css') }}" />

    <link rel="stylesheet" href="{{ asset('asset/plugins/icons/flags/flags.css') }}" />

    <link rel="stylesheet" href="{{ asset('asset/plugins/fontawesome/css/fontawesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('asset/plugins/fontawesome/css/all.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('asset/plugins/twitter-bootstrap-wizard/form-wizard.css') }}" />
 <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
   
</head>

<body>
    @include('front.layouts.header')

    @yield('main')

    <script src="{{ asset('vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js') }}"></script>
    <script src="{{ asset('asset/js/jquery-3.6.0.min.js') }}"></script>

    <script src="{{ asset('asset/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('asset/js/feather.min.js') }}"></script>

    <script src="{{ asset('asset/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>

    <script src="{{ asset('asset/plugins/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js') }}"></script>
    <script src="{{ asset('asset/plugins/twitter-bootstrap-wizard/prettify.js') }}"></script>
    <script src="{{ asset('asset/plugins/twitter-bootstrap-wizard/form-wizard.js') }}"></script>
    <script src="{{ asset('asset/js/bootstrap-datetimepicker.min.js') }}"></script>
    <script src="{{ asset('asset/js/script.js') }}"></script>
</body>

</html>