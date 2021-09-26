<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="{{asset('css/icon-set/style.css')}}">
    <link rel="stylesheet" href="{{asset('/css/select2/dist/css/select2.min.css')}}">

    <!-- CSS Front Template -->
    <link rel="stylesheet" href="{{asset('css/theme.min.css')}}">
    <title>Document</title>
</head>
<body class="">
    @yield('content')
<script src="{{ mix('/js/app.js') }}"></script>
    <!-- JS Global Compulsory  -->
    <script src="{{asset('js/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('js/jquery-migrate/dist/jquery-migrate.min.js')}}"></script>
    <script src="{{asset('js/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>

    <!-- JS Implementing Plugins -->
    <script src="{{asset('js/hs-toggle-password/dist/js/hs-toggle-password.js')}}"></script>
    <script src="{{asset('js/jquery-validation/dist/jquery.validate.min.js')}}"></script>
    <script src="{{asset('js/select2/dist/js/select2.full.min.js')}}"></script>

    <!-- JS Front -->
    <script src="{{asset('js/theme.min.js')}}"></script>

    <!-- JS Plugins Init. -->
    <script>
        $(document).on('ready', function () {
            // INITIALIZATION OF SHOW PASSWORD
            // =======================================================
            $('.js-toggle-password').each(function () {
                new HSTogglePassword(this).init()
            });


            // INITIALIZATION OF FORM VALIDATION
            // =======================================================
            $('.js-validate').each(function() {
                $.HSCore.components.HSValidation.init($(this));
            });


            // INITIALIZATION OF SELECT2
            // =======================================================
            $('.js-select2-custom').each(function () {
                var select2 = $.HSCore.components.HSSelect2.init($(this));
            });
        });
    </script>

    <!-- IE Support -->
    <script>
        if (/MSIE \d|Trident.*rv:/.test(navigator.userAgent)) document.write('<script src="./assets/vendor/babel-polyfill/polyfill.min.js"><\/script>');
    </script>
</body>
</html>
