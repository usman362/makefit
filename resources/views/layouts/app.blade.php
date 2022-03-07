<!doctype html>
<html lang="en-US">
@include('partials.header')

<body>
    <!-- loader Start -->
    {{-- <div id="loading">
        <div id="loading-center">
        </div>
    </div> --}}
    <!-- loader END -->
    @include('partials.navbar')
    
    @yield('content')
    
    @include('partials.footer')
    
    @include('partials.library')
</body>

</html>