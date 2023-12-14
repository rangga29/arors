<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('images/rsck_trans.png') }}">

    <title>Registrasi Online Rumah Sakit Cahya Kawaluyan</title>

    @vite(['resources/scss/app.scss', 'resources/scss/icons.scss', 'resources/js/head.js'])
    @yield('css')
    @livewireStyles
</head>
<body class="bg-home">
    <div class="container">
        {{ $slot }}
    </div>

    @vite(['resources/js/app.js', 'resources/js/layout.js'])
    @yield('script')
    @livewireScripts
</body>
</html>


