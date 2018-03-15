@extends('hub.master')
@section('content')
<section class="content-header">
    <!-- Main content -->
    <section class="content">
      {{--  content goes here  --}}
      <div class="row">
        <hub-view-students studentdata="{{$students}}"></hub-view-students>
    </div>
    </section>
@endsection
