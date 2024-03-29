<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Project Task & Tickets | NetSuite
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link href="assets/css/material-dashboard.css?v=2.1.1" rel="stylesheet" />
    @yield('styles')

</head>

<body ng-app="app">
    <div class="wrapper ">
        <!-- Main menu -->
        @include('layouts.__includes.menu')
        <div class="main-panel">
            <!-- Navbar -->
            @include('layouts.__includes.main-nav')
            <!-- End Navbar -->
            @yield('content')
            <!-- footer -->
            @include('layouts.__includes.main-footer')
        </div>
    </div>

    <!--   Core JS Files   -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="assets/js/core/popper.min.js"></script>
    <script src="assets/js/core/bootstrap-material-design.min.js"></script>


    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    
    <script src="assets/js/main-sidebar.js" type="text/javascript"></script>
    @yield('scripts')
</body>

</html>