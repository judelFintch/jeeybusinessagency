<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    @include('apps.partials.css')
    @yield('styles')
</head>
        <body class="tt-page-product-single">
                @include('apps.partials.navbar_detail')
            <main>
                @yield('content')
            </main>
            @include('apps.partials.footer')
            @include('apps.partials.javascript')
            @yield('scripts')
            @include('sweetalert::alert')
        </body>
</html>
