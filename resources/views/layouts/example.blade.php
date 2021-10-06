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

    <style>
        body{
            background: rgb(102,109,228);
            background: linear-gradient(175deg, rgba(102,109,228,1) 18%, rgba(23,43,77,1) 58%);
        }
    </style>
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
<script src="{{asset('js/vendor/hs-unfold/dist/hs-unfold.min.js')}}"></script>
<script src="{{asset('js/vendor/hs-form-search/dist/hs-form-search.min.js')}}"></script>
<script src="{{asset('js/vendor/hs-file-attach/dist/hs-file-attach.min.js')}}"></script>
<script src="{{asset('js/vendor/hs-step-form/dist/hs-step-form.min.js')}}"></script>
<script src="{{asset('js/vendor/jquery-mask-plugin/dist/jquery.mask.min.js')}}"></script>
<script src="{{asset('js/vendor/hs-add-field/dist/hs-add-field.min.js')}}"></script>
<script src="{{asset('js/jquery-validation/dist/jquery.validate.min.js')}}"></script>

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

        // INITIALIZATION OF UNFOLD
        // =======================================================
        $('.js-hs-unfold-invoker').each(function () {
            var unfold = new HSUnfold($(this)).init();
        });


        // INITIALIZATION OF FORM SEARCH
        // =======================================================
        $('.js-form-search').each(function () {
            new HSFormSearch($(this)).init()
        });

        // INITIALIZATION OF FILE ATTACH
        // =======================================================
        $('.js-file-attach').each(function () {
            var customFile = new HSFileAttach($(this)).init();
        });

        // INITIALIZATION OF STEP FORM
        // =======================================================
        $('.js-step-form').each(function () {
            var stepForm = new HSStepForm($(this), {
                finish: function() {
                    $("#addUserStepFormProgress").hide();
                    $("#addUserStepFormContent").hide();
                    $("#successMessageContent").show();
                }
            }).init();
        });

        // INITIALIZATION OF MASKED INPUT
        // =======================================================
        $('.js-masked-input').each(function () {
            var mask = $.HSCore.components.HSMask.init($(this));
        });

        // INITIALIZATION OF SELECT2
        // =======================================================
        $('.js-select2-custom').each(function () {
            var select2 = $.HSCore.components.HSSelect2.init($(this));
        });

        // INITIALIZATION OF ADD INPUT FILED
        // =======================================================
        $('.js-add-field').each(function () {
            new HSAddField($(this), {
                addedField: function() {
                    $('.js-add-field .js-select2-custom-dynamic').each(function () {
                        var select2dynamic = $.HSCore.components.HSSelect2.init($(this));
                    });
                }
            }).init();
        });
    });
</script>

<!-- IE Support -->
<script>
    if (/MSIE \d|Trident.*rv:/.test(navigator.userAgent)) document.write('<script src="./assets/vendor/babel-polyfill/polyfill.min.js"><\/script>');
</script>
</body>
</html>
