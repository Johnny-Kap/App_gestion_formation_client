@include('includes.head')

@include('includes.styles')

@yield('styles')

</head>

<body>

    <!-- Navbar Start -->
    @include('includes.navigation')

    <!-- Page content -->

    @include('includes.flash-message')

    @yield('content')

    @include('includes.footer')

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

    @include('includes.scripts')
    @yield('scripts')

</body>

</html>