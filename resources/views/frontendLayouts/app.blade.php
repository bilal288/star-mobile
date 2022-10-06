<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('frontendLayouts.header')      
@include('frontendLayouts.navbar')      
<body>
    @yield('content')
    @include('frontendLayouts.footer')
</body>
</html>

