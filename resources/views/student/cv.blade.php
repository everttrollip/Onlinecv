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
        <!-- jvectormap -->
        <link rel="stylesheet" href="{{ asset('adminlte/bower_components/jvectormap/jquery-jvectormap.css') }}">
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/cv.css') }}" rel="stylesheet">
    </head>
    <body class="hold-transition skin-blue-light fixed sidebar-mini">
        <div id="cv" class="wrapper">

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
                    <cv-header></cv-header>

                    <div class="introduction">
                        <div class="cv-left-column">
                            <cv-basic-details></cv-basic-details>
                            <cv-location></cv-location>
                        </div>
                        <div class="cv-right-column">
                            <cv-summary></cv-summary>
                            <cv-experience></cv-experience>
                            <cv-vocation></cv-vocation>
                        </div>
                    </div>

                    <div class="achievements">
                        <h1>Achievements</h1>
                        <p>Coming soon!</p>
                    </div>
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
        <!-- jvectormap  -->
        <script src="{{ asset('adminlte/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
        <script src="{{ asset('adminlte/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>

        <script>
            $(function(){
                $('#world-map').vectorMap({
                    map              : 'world_mill_en',
                    normalizeFunction: 'polynomial',
                    hoverOpacity     : 0.7,
                    hoverColor       : false,
                    backgroundColor  : 'transparent',
                    regionStyle      : {
                    initial      : {
                        fill            : 'rgba(210, 214, 222, 1)',
                        'fill-opacity'  : 1,
                        stroke          : 'none',
                        'stroke-width'  : 0,
                        'stroke-opacity': 1
                    },
                    hover        : {
                        'fill-opacity': 0.7,
                        cursor        : 'pointer'
                    },
                    selected     : {
                        fill: 'yellow'
                    },
                    selectedHover: {}
                    },
                    onRegionTipShow: function(event, label, code) {
                        label.html(
                            '<b>'+label.html()+'</b>'
                        );
                    },
                    markerStyle      : {
                    initial: {
                        fill  : '#00a65a',
                        stroke: '#111'
                    }
                    },
                    markers          : [
                    { latLng: [-33.93, 18.42], name: 'Cape Town' },
                    ]
                });
            });
        </script>
    </body>
</html>
