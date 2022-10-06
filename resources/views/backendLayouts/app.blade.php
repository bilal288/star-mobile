<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('backendLayouts.header')      
@include('backendLayouts.navbar')      
<body>
    @yield('content')
    @include('backendLayouts.footer')
</body>
</html>

