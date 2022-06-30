<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <!-- Favicon icon -->
        <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
        <link rel="stylesheet" href="{{ asset('DashboardFiles/vendor/chartist/css/chartist.min.css') }}">
        <link href="{{ asset('DashboardFiles/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
        <link href="{{ asset('DashboardFiles/vendor/owl-carousel/owl.carousel.css') }}" rel="stylesheet">
        <link href="{{ asset('DashboardFiles/css/style.css') }}" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">


        <!-- Scripts -->
        @routes
        <script src="{{ mix('js/app.js') }}" defer></script>
        @inertiaHead
    </head>
    <body class="font-sans antialiased">
        <div id="main-wrapper">

            @inertia

        </div>

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{ asset('DashboardFiles/vendor/global/global.min.js') }}"></script>
	<script src="{{ asset('DashboardFiles/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('DashboardFiles/js/custom.min.js') }}"></script>
	<script src="http://127.0.0.1:8000/DashboardFiles/js/deznav-init.js"></script>
	<script src="{{ asset('DashboardFiles/vendor/owl-carousel/owl.carousel.js') }}"></script>
    <script src="{{ asset('DashboardFiles/vendor/peity/jquery.peity.min.js') }}"></script>
	<script src="{{ asset('DashboardFiles/vendor/apexchart/apexchart.js') }}"></script>
	<script src="{{ asset('DashboardFiles/js/dashboard/dashboard-1.js') }}"></script>
    <script src="{{ asset('DashboardFiles/vendor/global/global.min.js') }}"></script>
    <script src="{{ asset('DashboardFiles/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('DashboardFiles/js/custom.min.js') }}"></script>
    <script src="{{ asset('DashboardFiles/js/deznav-init.js') }}"></script>
    <script src="{{ asset('DashboardFiles/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('DashboardFiles/js/plugins-init/datatables.init.js') }}"></script>


    </body>
</html>
