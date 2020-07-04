<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>SICC - @yield('title')</title>

        @include('partials._stylesheet')

    </head>
<body class="hold-transition sidebar-mini layout-fixed">
<div id="wrapper">
    @include('include.navbar')
    @include('include.sidenav')

        @yield('content')

    @include('include.footer')
</div>

@include('partials._script')

</body>
</html>
