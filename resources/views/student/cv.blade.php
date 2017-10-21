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

        <link href="adminlte/dist/css/adminlte.css" rel="stylesheet" type="text/css">
        <link href="adminlte/dist/css/adminlte.min.css" rel="stylesheet" type="text/css">
        
        <link rel="stylesheet" href="adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="adminlte/bower_components/font-awesome/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="adminlte/bower_components/Ionicons/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="adminlte/dist/css/AdminLTE.min.css">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
            folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="adminlte/dist/css/skins/_all-skins.min.css">

        <!-- Styles -->
        <link href="{{ asset('css/cv.css') }}" rel="stylesheet">       
    </head>
<body class="hold-transition skin-blue-light fixed sidebar-mini">
  <div class="wrapper">

      @include('student.includes.header')
      @include('student.includes.sidebar-left')

    <div class="content-wrapper">
      <section class="content-header">
        <h1>
          Curriculum Vitae
          <small>My curriculum vitae</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active"> CV</li>
        </ol>
      </section>

      
      <section class="content">
        <!-- CV Header -->

        <!-- Basic Personal Info -->

        <!-- Short I am -->
        <div class="box where-student-lives">
          <div class="box-header with-border">
            <h3 class="box-title">I am</h3>

            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fa fa-minus"></i></button>
            </div>
          </div>
        </div>
      
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

        <!-- Experience -->

        <!-- Education -->

        <!-- Vocation -->
      </section>
    </div>

  @include('student.includes.footer')
          
  </div>
  <!-- jQuery 3 -->
  <script src="adminlte/bower_components/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="adminlte/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- FastClick -->
  <script src="adminlte/bower_components/fastclick/lib/fastclick.js"></script>
  <!-- AdminLTE App -->
  <script src="adminlte/dist/js/adminlte.min.js"></script>

    </body>
</html>
