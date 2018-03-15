@extends('hub.master')
@section('content')
<section class="content-header">
    <!-- Main content -->
    <section class="content">
      {{--  content goes here  --}}
      <div class="row">
        <hub-profile hub="{{$user}}"></hub-profile>
    </div>
    </section>
@endsection
