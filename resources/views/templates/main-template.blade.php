<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title ?? 'Unikone Solution' }}</title>

    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">


    <!-- loader-->
    <link href={{ asset('css/pace.min.css') }} rel="stylesheet" />
    <script src={{ asset('js/pace.min.js') }}></script>

    <!--plugins-->
    <link href={{ asset('plugins/perfect-scrollbar/css/perfect-scrollbar.css') }} rel="stylesheet" />
    <link href={{ asset('plugins/simplebar/css/simplebar.css') }} rel="stylesheet" />
    <link href={{ asset('plugins/metismenu/css/metisMenu.min.css') }} rel="stylesheet" />

    <!-- CSS Files -->
    <link href={{ asset('css/bootstrap.min.css') }} rel="stylesheet">
    <link href={{ asset('css/bootstrap-extended.css') }} rel="stylesheet">
    <link href={{ asset('css/style.css') }} rel="stylesheet">
    <link href={{ asset('css/icons.css') }} rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">

    <!--Theme Styles-->
    <link href={{ asset('css/dark-theme.css') }} rel="stylesheet" />
    <link href={{ asset('css/semi-dark.css') }} rel="stylesheet" />
    <link href={{ asset('css/header-colors.css') }} rel="stylesheet" />

</head>

<body>
    <div class="wrapper">
        {{ $slot }}
    </div>

    <!-- JS Files-->
    <script src={{ asset('js/jquery.min.js') }}></script>
    <script src={{ asset('plugins/simplebar/js/simplebar.min.js') }}></script>
    <script src={{ asset('plugins/metismenu/js/metisMenu.min.js') }}></script>
    <script src={{ asset('js/bootstrap.bundle.min.js') }}></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <!--plugins-->
    <script src={{ asset('plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}></script>

    <!-- Main JS-->
    <script src={{ asset('js/main.js') }}></script>
</body>

</html>
