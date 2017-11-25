<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>OnlineCV | Dashboard</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <link href="{{ asset('adminlte/dist/css/adminlte.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('adminlte/dist/css/adminlte.min.css') }}" rel="stylesheet" type="text/css">

        <link rel="stylesheet" href="{{ asset('adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{ asset('adminlte/bower_components/font-awesome/css/font-awesome.min.css') }}">
        <!-- Ionicons -->
        <link rel="stylesheet" href="{{ asset('adminlte/bower_components/Ionicons/css/ionicons.min.css') }}">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{ asset('adminlte/dist/css/AdminLTE.min.css') }}">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
            folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="{{ asset('adminlte/dist/css/skins/_all-skins.min.css') }}">
        <!-- jvectormap -->
        <link rel="stylesheet" href="{{ asset('adminlte/bower_components/jvectormap/jquery-jvectormap.css') }}">
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body class="hold-transition skin-blue-light fixed sidebar-mini">
        <div id="dashboard" class="wrapper">

            @include('student.includes.header')
            @include('student.includes.sidebar-left')

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <dashboard-header></dashboard-header>

                <!-- Main content -->
                <section class="content">
                    <dashboard-getting-started></dashboard-getting-started>
                </section>
            </div>

            @include('student.includes.footer')
        </div>

        <!-- Scripts -->
        <script src="{{ asset('js/dashboard.js') }}"></script>

        <!-- jQuery 3 -->
        <script src="{{ asset('adminlte/bower_components/jquery/dist/jquery.min.js') }}"></script>
        <!-- Bootstrap 3.3.7 -->
        <script src="{{ asset('adminlte/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
        <!-- FastClick -->
        <script src="{{ asset('adminlte/bower_components/fastclick/lib/fastclick.js') }}"></script>
        <!-- AdminLTE App -->
        <script src="{{ asset('adminlte/dist/js/adminlte.min.js') }}"></script>
        <!-- jvectormap  -->
        <script src="{{ asset('adminlte/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
        <script src="{{ asset('adminlte/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>

    </body>
</html>
