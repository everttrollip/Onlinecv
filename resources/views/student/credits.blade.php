@extends('student.master')
@section('content')
<section class="content-header">
    <!-- Main content -->
    <section class="content">
            <section class="content-header">
                <h1>Credits</h1>
                <ol class="breadcrumb">
                    <li><a href="/student"><i class="fa fa-dashboard"></i> Student</a></li>
                    <li><a href="/student/credits">Credits</a></li>
                    <li class="active">My Credits</li>
                </ol>
            </section>
      <view-student-credits credits="{{$credits}}" unpaid="{{$unpaid}}"></view-student-credits>
    </section>
@endsection
