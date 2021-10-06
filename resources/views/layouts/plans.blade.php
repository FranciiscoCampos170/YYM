<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ynzo Yami Meetings</title>
    <!-- CSS Front Template -->
    <link rel="stylesheet" href="{{asset('css/theme.min.css')}}">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

</head>
<body>
<main id="content" role="main" class="main">
@yield('content')
</main>
<script src="{{ mix('/js/app.js') }}"></script>
</body>
</html>
