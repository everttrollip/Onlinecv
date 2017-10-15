<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
     <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Fixed Layout</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

        <title>Online CV</title>

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
<style>
.control-label{
    font-weight:normal;
    padding-top:6px;
    padding-bottom:6px;
}
</style>
    </head>
<body class="hold-transition skin-red fixed sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

    @include('student.includes.header')

    @include('student.includes.sidebar-left')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="callout callout">
       <h4>
        Contact Us
      </h4>
        <p>Have a question? Send us a message using the form below or use the contact details as provided. We'll get back to you as soon as possible.</p>
      </div>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-phone-square"></i> Home</a></li>
        <li class="active"> Contact Us</li>
      </ol>
    </section>
    
    <!-- Main content -->
    <section class="content">
      
      <!-- Default box -->
      <div class="panel col-md-12 col-xs-12 col-sm-12">
        <div class="box-header with-border col-md-8 col-xs-8 col-sm-8">
            <h3 class="box-title"><i class="fa fa-envelope"></i> Send Us a Message</h3>
        </div>
        <div class="box-body col-md-8 col-xs-8 col-sm-8">
        <form>
        <div class="form-group">
        <label class="control-label">Message Subject</label>
         <input class="form-control" placeholder="Message Subject">

          <label class="control-label">Message</label>
         <textarea class="form-control" style=" width:100%; min-height:200px;"></textarea>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
            <button type="submit" class="btn btn-primary" style="background-color:#dd4b39; border-color:#dd4b39; color:white;"> Send</button>
        </div>
        </div>
        <form>
        <!-- /.box-footer-->
    <div class="col-md-4 col-xs-4 col-sm-4" height=100% >
    <div class=panel style="text-align:center; background-color:#dd4b39; color:white; margin-top:0; margin-bottom:0;">
     <h3 class="panel-heading">Contact Information</h3>
     <div class="panel-body">
        <div class="col-md-4" style="text-align:center;"><i style="font-size:24px; opacity:0.6; padding:10px;" class="fa fa-map-marker"></i><p>35 Main Street, PTA</p></div>
        <div class="col-md-4" style="text-align:center;"><i style="font-size:24px; opacity:0.6; padding:10px;" class="fa fa-phone"></i><p>+27(0) 82 458 4789</p></div>
        <div class="col-md-4" style="text-align:center;"><i style="font-size:24px; opacity:0.6; padding:10px;" class="fa fa-envelope"></i><p>info@linkedcv.co.za</p></div>
        <hr class="hr-light col-md-8 col-md-offset-2">

                                <ul class="inline-ul text-center list-unstyled" style="text-align:center; color:white;">
                                    <li style="text-align:center;" class="col-md-4"><i class="fa fa-twitter"></i></li>
                                    <li  style="text-align:center;" class="col-md-4"><i class="fa fa-linkedin"> </i></li>
                                    <li  style="text-align:center;" class="col-md-4"><i class="fa fa-instagram"> </i></li>
                                </ul>
     </div>
    </div>
    </div>
       </div>
      <!-- /.box -->
    


    </section>
    <!-- /.content -->
    </div>
  <!-- /.content-wrapper -->


@include('student.includes.footer')
        
</div>
<!-- ./wrapper -->

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