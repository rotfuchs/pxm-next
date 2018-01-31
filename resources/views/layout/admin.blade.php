<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>@yield('title')</title>

    <!-- Bootstrap -->
    <link href="/custom/assets/css/bootstrap/bootstrap.min.css" rel="stylesheet">

    <!-- Admin CSS -->
    <link href="/custom/assets/css/admin/dashboard.css" rel="stylesheet">

    <script src="/custom/assets/js/jquery/jquery.min.js"></script>
    <script src="/custom/assets/js/bootstrap/bootstrap.bundle.js"></script>
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <!--@todo put feather.min.js in js folder -->


</head>

<body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
        <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">PXM2</a>
        {{--<input class="form-control form-control-dark w-100" type="text" placeholder="Suche" aria-label="Suche">--}}
        <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
                <a class="nav-link" href="#">Ausloggen</a>
            </li>
        </ul>
    </nav>

    <div class="container-fluid">
        <div class="row">
            {!! new \App\Services\Menu\View\Admin\MenuSidebarView() !!}

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
                @yield('content')
            </main>
        </div>
    </div>

    <script>
        feather.replace()
    </script>
</body>
</html>
