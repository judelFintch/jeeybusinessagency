<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
   <meta charset="utf-8">
   <meta name="author" content="devscast">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="description" content="">
   <title>@yield('title')</title>
   @include('admins.partials.styles')
</head>

<body class="nk-body bg-white npc-general pg-auth">
   <div class="nk-app-root">
      <div class="nk-main ">
         @yield('content')
      </div>
   </div>
   @include('admins.partials.script')
</html>
