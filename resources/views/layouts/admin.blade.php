<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Title -->
    <title>Dashboard | Graindashboard UI Kit</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.ico') }}">


    <!-- DEMO CHARTS -->
    <link rel="stylesheet" href="{{ asset('assets/demo/chartist.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/demo/chartist-plugin-tooltip.css') }}">

    <!-- Template -->
    <link rel="stylesheet" href="{{ asset('assets/graindashboard/css/graindashboard.css') }}">
    @yield('styles')
</head>

<body class="has-sidebar has-fixed-sidebar-and-header">

    {{-- header section start --}}

    @include('partials.header')
    {{-- header section end --}}

    {{-- main section it contains slider and content view --}}

    <main class="main">
        <!-- Sidebar Nav -->
        @include('partials.menu')

        <div class="content pl-3">
            @yield('content')
            <!-- Footer -->
            @include('partials.footer')
            <!-- End Footer -->
        </div>
    </main>

    {{-- main section end --}}



    {{-- script setup for project --}}
    <script src="{{ asset('assets/graindashboard/js/graindashboard.js') }}"></script>
    <script src="{{ asset('assets/graindashboard/js/graindashboard.vendor.js') }}"></script>
    <!--  CHARTS -->
    <script src="{{ asset('assets/demo/resizeSensor.js') }}"></script>
    <script src="{{ asset('assets/demo/chartist.js') }}"></script>
    <script src="{{ asset('assets/demo/chartist-plugin-tooltip.js') }}"></script>
    <script src="{{ asset('assets/demo/gd.chartist-area.js') }}"></script>
    <script src="{{ asset('assets/demo/gd.chartist-bar.js') }}"></script>
    <script src="{{ asset('assets/demo/gd.chartist-donut.js') }}"></script>
    <script>
        $.GDCore.components.GDChartistArea.init('.js-area-chart');
        $.GDCore.components.GDChartistBar.init('.js-bar-chart');
        $.GDCore.components.GDChartistDonut.init('.js-donut-chart');
    </script>
    @yield('script')
</body>

</html>
