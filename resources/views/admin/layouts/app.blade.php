<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('admin//assets/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="./assets/img/favicon.png">
    <title>@yield('title')</title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    @include('admin.partials.styles')
</head>

<body class="g-sidenav-show   bg-gray-100">
    <div class="min-height-300 bg-primary position-absolute w-100"></div>
    <aside
        class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 "
        id="sidenav-main">
        @include('admin.partials.sidebar')
    </aside>
    <main class="main-content position-relative border-radius-lg ">
        <!-- Navbar -->
        @include('admin.partials.navbar')
        @yield('content')
        @include('admin.partials.footer')
    </main>
    @include('admin.partials.sidenav')
    @include('admin.partials.scripts')
</body>

</html>
