<!doctype html>
<html lang="en">
@include('backend.partials.header')

<body>
    <!-- loader Start -->
    <div id="loading">
        <div id="loading-center">
        </div>
    </div>
    <div class="wrapper">
        @include('backend.partials.sidebar')
        
        @include('backend.partials.navbar')

        @yield('content')

    </div>
    @include('backend.partials.footer')
    
    @include('backend.partials.library')
</body>

</html>