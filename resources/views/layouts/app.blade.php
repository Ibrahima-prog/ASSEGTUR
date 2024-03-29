<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>ASSEGTUR | Panneau D'administration</title>
    <link rel="shortcut icon" type="image/x-icon" href="../../logo/icone_test.png">
    <!-- Styles -->
    <link href="{{ asset('admin/admin.css') }}" rel="stylesheet">
    
</head>
<body>
    <div id="app">
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
