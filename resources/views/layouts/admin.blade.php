<!doctype html>
<html lang="{{app()->getLocale()}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>ADMIN</title>
    <link rel="stylesheet" href="{{asset('assets-admin/css/bootstrap.css')}}">
</head>
<body>
@include('layouts.admin-templates.header')
<main class="pu-5">
    <div class="container">
        @yield('content')
    </div>
</main>

<script src="{{asset('assets-admin/js/jquery-3.7.1.min.js')}}"></script>
<script src="{{asset('assets-admin/js/bootstrap.bundle.js')}}"></script>
@yield('scripts')
</body>
</html>
