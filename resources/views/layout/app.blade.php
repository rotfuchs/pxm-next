<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
        <script src="{{ mix('/js/app.js') }}"></script>


        <title>@yield('title') - pxm board</title>

        <!-- Fonts -->
        <!-- Styles -->
    </head>

    <body>
        <div class="singlePage">
            <div class="wrapper">
                <div class="header">
                    <div class="banner"></div>
                    <div class="top-navigation">registrierung | passwort vergessen? | faq | online? | tm+7</div>
                </div>
                @yield('content')
            </div>
        </div>
    </body>
</html>
