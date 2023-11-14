<!doctype html>
<html lang="en" data-sidenav-size="sm-hover">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

    <title>{{ $page_title }}</title>

    @yield('css')
    @vite(['resources/scss/app.scss', 'resources/scss/icons.scss', 'resources/js/head.js'])
</head>
<body>
    <div class="wrapper">
        @include('backend.layouts.topbar')
        @include('backend.layouts.sidebar')
        <div class="content-page">
            <div class="content">
                @yield('content')
            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">{{ date('Y') }} © Attex - Coderthemes.com</div>
                        <div class="col-md-6">
                            <div class="text-md-end footer-links d-none d-md-block">
                                <a href="javascript: void(0);">About</a>
                                <a href="javascript: void(0);">Support</a>
                                <a href="javascript: void(0);">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    @vite(['resources/js/app.js', 'resources/js/layout.js'])
    @yield('script')
    @yield('script-bottom')
</body>
</html>
