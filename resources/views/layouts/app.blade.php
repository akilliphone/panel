<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.dataTables.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/buttons.dataTables.css') }}">
    <link rel="shortcut icon" href="https://www.akilliphone.com/views/kuteshop/img/favicon.png?v=9" type="image/x-icon">
    <script type="text/javascript" src="{{ asset('assets/js/jquery.dataTables.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/dataTables.buttons.js') }}"></script>
    @notifyCss
    @notifyJs
</head>

<body>

    @include('components.notify')

    <nav>
        Burası dashboard navigation.
    </nav>

    @yield('content')

    <footer>
        Burası dashboard footer.
    </footer>

    @yield('scripts')
</body>

</html>
