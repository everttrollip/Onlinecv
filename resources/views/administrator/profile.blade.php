@extends('administrator.master')
@section('content')
<section class="content-header">
    <!-- Main content -->
    <section class="content">
      {{--  content goes here  --}}
      <admin-profile admin="{{$user}}"></admin-profile>
    </section>
@endsection
