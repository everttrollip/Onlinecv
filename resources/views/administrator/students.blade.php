@extends('administrator.master')
@section('content')
<section class="content-header">
    <!-- Main content -->
    <section class="content">
      {{--  content goes here  --}}
      <administrator-students students="{{$students}}"></administrator-students>
    </section>
@endsection
