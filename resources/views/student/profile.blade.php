<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
     <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Fixed Layout</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
        <title> Online CV | Student Profile</title>

        <!-- Fonts -->
       
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <link href="../adminlte/dist/css/adminlte.css" rel="stylesheet" type="text/css">
        <link href="../adminlte/dist/css/adminlte.min.css" rel="stylesheet" type="text/css">
        
        <link rel="stylesheet" href="../adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="../adminlte/bower_components/font-awesome/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="../adminlte/bower_components/Ionicons/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="../adminlte/dist/css/AdminLTE.min.css">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
            folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="../adminlte/dist/css/skins/_all-skins.min.css">
        <!-- Select2 -->
  <link rel="stylesheet" href="../adminlte/bower_components/select2/dist/css/select2.min.css">
<style>
.control-label{
    font-weight:normal;
    padding-top:6px;
    padding-bottom:6px;
}
</style>
    </head>
<body class="hold-transition skin-blue-light fixed sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper" id="app">
        @include('student.includes.header')
        @include('student.includes.sidebar-left')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
        <h1>
            Profile
            <small>Update Your Profile</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active"> CV</li>
        </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="callout callout-info">
                <h4>Tip!</h4>
                <p>Adding a profile image improves your profile. Tertiary companies are more likely to notice you if your profile stands out from the crowd.</p>
            </div>
        <!-- Default box -->
            <div class="panel">
                <div class="box-header with-border">
                    <h3 class="box-title">Profile Details</h3>
                </div>
                <div class="box-body col-md-12">
                    <studentprofile role="student">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    </studentprofile>
                </div>  
            </div>
        </section>
    </div>
</div>


<!-- ./wrapper -->
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
<!-- jQuery 3 -->
<script src="../adminlte/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../adminlte/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Select2 -->
<script src="../adminlte/bower_components/select2/dist/js/select2.full.min.js"></script>
<!-- FastClick -->
<script src="../adminlte/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../adminlte/dist/js/adminlte.min.js"></script>
<!-- InputMask -->
<script src="../adminlte/plugins/input-mask/jquery.inputmask.js"></script>
<script src="../adminlte/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="../adminlte/plugins/input-mask/jquery.inputmask.extensions.js"></script>
<!-- BootBox -->
<script src="../js/bootbox.min.js"></script>
<!-- bootstrap datepicker -->
<script src="../adminlte/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>

<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()
  });

</script>

</body>
</html>
