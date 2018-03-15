@extends('administrator.master')
@section('content')
<section class="content-header">
    <!-- Main content -->
    <section class="content">
      {{--  content goes here  --}}
      <review-achievements :achievements="{{$student_achievements}}"></review-achievements>
    </section>
@endsection
