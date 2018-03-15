@extends('student.master')
@section('content')
<section class="content-header">
    <!-- Main content -->
    <section class="content">
            <section class="content-header">
                <h1>File and Document Uploads</h1>
                <ol class="breadcrumb">
                    <li><a href="/student"><i class="fa fa-dashboard"></i> Student</a></li>
                    <li class="active">My Uploads</li>
                </ol>
            </section>
            <div class="row">
                <uploads fileuploads="{{$uploads}}" userdata="{{Auth::user()}}"></uploads>
            </div>
    </section>
@endsection
