<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="author" content="devscast">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
   <link rel="shortcut icon" href="{{ asset('frontends/images/images/Full 1.svg') }}">
    <title>@yield('title')</title>
    @include('admins.partials.styles')
    @yield('styles')
</head>

<body class="nk-body bg-lighter npc-general has-sidebar ">
    <div id="app">
        <div class="nk-app-root">
            <div class="nk-main ">
                @include('admins.partials.sidebar')
                <div class="nk-wrap">
                    @include('admins.partials.header')
                    <div class="nk-content">
                        <div class="container-fluid">
                            @yield('content')
                        </div>
                    </div>
                    @include('admins.partials.footer')
                </div>
            </div>
        </div>
    </div>
    @include('admins.partials.script')
    @include('sweetalert::alert')
    @yield('scripts')
</body>
</html>
