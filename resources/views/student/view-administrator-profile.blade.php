@extends('student.master')
@section('content')
<section class="content-header">
    <!-- Main content -->
    <section class="content">
            <section class="content-header">
                <h1>My Administrator</h1>
                <ol class="breadcrumb">
                    <li><a href="/student"><i class="fa fa-dashboard"></i> Student</a></li>
                    <li><a class="active" href="/student/my-administrator"> My Administrator</a></li>
                </ol>
            </section>
      <view-my-admin administrator="{{$administrator}}"></view-my-admin>
    </section>
@endsection
