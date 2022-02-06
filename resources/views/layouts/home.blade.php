<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Form a Career</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
</head>

<body>
    <div class="layout">
        <main class="">
            @yield('content')
        </main>
    </div>

    
    <div class="box-contact">
        <img src="/img/company.png" alt="companyの写真">
        <div class="contact">
            <div class="contact-phone">
                <p>TEL:000-0000-0000</p>
            </div>
            <div class="contact-mail">
                <p>Mail:abcdefg@hiz</p>
            </div>
        </div>
    </div>
</body>

</html>