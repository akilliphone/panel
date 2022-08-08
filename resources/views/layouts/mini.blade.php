<!doctype html>
<html lang="tr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('assets/scss/mini.css') }}">
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    @notifyCss
    @notifyJs
</head>

<body>

    @include('components.notify')

    <section class="login-screen">
        <div class="login-screen-left">
            <div class="left-img">
                <img src="{{ asset('assets/images/login-left.svg') }}" alt="Akıllıphone Logo">
            </div>
            <div class="content">
                <div class="title"><span class="title-left">Akıllı</span> <span class="title-right">Panel</span>
                </div>
                <div class="text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                    tempor
                    invidunt ut
                </div>
            </div>
        </div>
        <div class="login-screen-right">
            <div class="form-wrapper">
                <div class="logo">
                    <img src="{{ asset('assets/images/akilliphone_logo.svg') }}" alt="logo">
                </div>

                @yield('form')

            </div>
        </div>
    </section>

    @yield('scripts')
</body>

</html>
