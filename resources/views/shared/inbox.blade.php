@if(Auth::user()->role ==='administrator')
  @extends('administrator.master')
@endif
{{--  @if(Auth::user()->role ==='hub')
  @extends('hub.master')
@endif  --}}
{{--  @if(Auth::user()->role ==='student')
  @extends('student.master')
@endif  --}}

@section('content')
<section class="content-header">
    <!-- Main content -->
    <section class="content">
      {{--  content goes here  --}}
      <inbox messages="{{$messages}}"></inbox>
    </section>
@endsection
