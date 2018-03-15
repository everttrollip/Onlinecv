<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>OnlineCV | CV</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

        <title>Online CV</title>

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
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/cv.css') }}" rel="stylesheet">
    </head>
    <body class="hold-transition skin-blue-light fixed sidebar-mini">
        <div id="cv" class="wrapper">

            @if(Auth::user()->role == 'student')
                @include('student.includes.header')
                @include('student.includes.sidebar-left')
            @elseif(Auth::user()->role == 'administrator')
                @include('administrator.includes.header')
                @include('administrator.includes.left-sidebar')
            @elseif(Auth::user()->role == 'hub')
                @include('hub.includes.header')
                @include('hub.includes.left-sidebar')
            @endif

            <div class="content-wrapper">
                <section class="content-header">
                    <h1>Curriculum Vitae</h1>
                    <ol class="breadcrumb">
                        <li><a href="/student"><i class="fa fa-dashboard"></i> Student</a></li>
                        <li><a href="/student/cv">CV</a></li>
                        <li class="active">My CV</li>
                    </ol>
                </section>

                <section class="container-fluid">
                    <view-student-cv studentdata="{{$student}}" userdata="{{$user}}"></view-student-cv>
                </section>
            </div>

            @include('student.includes.footer')
        </div>

        <!-- Scripts -->
        <script src="{{ asset('js/cv.js') }}"></script>

        <!-- jQuery 3 -->
        <script src="{{ asset('adminlte/bower_components/jquery/dist/jquery.min.js') }}"></script>
        <!-- Bootstrap 3.3.7 -->
        <script src="{{ asset('adminlte/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
        <!-- FastClick -->
        <script src="{{ asset('adminlte/bower_components/fastclick/lib/fastclick.js') }}"></script>
        <!-- AdminLTE App -->
        <script src="{{ asset('adminlte/dist/js/adminlte.min.js') }}"></script>
        <!-- BootBox -->
        <script src="{{ asset('js/bootbox.min.js') }}"></script>
    </body>
</html>
