<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>OnlineCV | CV</title>
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

        <!-- Styles -->
        <link href="{{ asset('css/cv.css') }}" rel="stylesheet">
    </head>
    <body class="hold-transition skin-blue-light fixed sidebar-mini">
        <div class="wrapper">

            @include('student.includes.header')
            @include('student.includes.sidebar-left')

            <div class="content-wrapper">
                <section class="content-header">
                    <h1>Curriculum Vitae of Evert Trollip</h1>
                    <ol class="breadcrumb">
                        <li><a href="/student"><i class="fa fa-dashboard"></i> Student</a></li>
                        <li><a href="/student/cv">CV</a></li>
                        <li class="active">My CV</li>
                    </ol>
                </section>

                <section class="content">
                    <!-- CV Header -->
                    <div class="cv-row">
                        <div class="box cv-col-10">
                            <div class="box-body">
                                <div class="student-image">
                                    <img class="thumbnail" src="{{ asset('images/students/thumbnail_evert.png') }}">
                                </div>

                                <div class="student-name">
                                    <span class="firstname">Evert</span>
                                    <span class="surname">Trollip</span>
                                </div>

                                <div class="student-contact-details">
                                    <div class="info-box email">
                                        <span class="info-box-icon bg-aqua"><i class="fa fa-envelope-o"></i>
                                        </span>

                                        <div class="info-box-content">
                                            <span class="info-box-text">trollip.evert@gmail.com</span>
                                        </div>
                                    </div>

                                    <div class="info-box phone">
                                        <span class="info-box-icon bg-aqua"><i class="fa fa-phone"></i>
                                        </span>

                                        <div class="info-box-content">
                                            <span class="info-box-text">+27 (72) 997 5230</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <div class="cv-row">
                        <!-- Basic Personal Info -->
                        <div class="box cv-col-5">
                            <div class="box-body">
                            </div>
                        </div>

                        <!-- Short I am -->
                        <div class="box cv-col-4">
                            <div class="box-header with-border">
                                <h3 class="box-title">I am</h3>

                                <div class="box-tools pull-right">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                                    <i class="fa fa-minus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cv-row">
                    <!-- Where I live -->
                        <div class="box where-student-lives">
                            <div class="box-header with-border">
                                <i class="fa fa-map-marker"></i>
                                <h3 class="box-title">Where I live</h3>

                                <div class="box-tools pull-right">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                                    <i class="fa fa-minus"></i></button>
                                </div>
                            </div>

                            <div class="box-body">
                            </div>
                        </div>
                    </div>

                    <!-- Experience -->

                    <!-- Education -->

                    <!-- Vocation -->
                </section>
            </div>

            @include('student.includes.footer')
        </div>

        <!-- jQuery 3 -->
        <script src="{{ asset('adminlte/bower_components/jquery/dist/jquery.min.js') }}"></script>
        <!-- Bootstrap 3.3.7 -->
        <script src="{{ asset('adminlte/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
        <!-- FastClick -->
        <script src="{{ asset('adminlte/bower_components/fastclick/lib/fastclick.js') }}"></script>
        <!-- AdminLTE App -->
        <script src="{{ asset('adminlte/dist/js/adminlte.min.js') }}"></script>
    </body>
</html>
