@extends(((Auth::user()->role == 'hub'))? 'hub.master': ((Auth::user()->role == 'administrator') ? 'administrator.master' : 'student.master'));

@section('content')
<section class="content-header">
    <!-- Main content -->
    <section class="content">
      {{--  content goes here  --}}
      <contact-us></contact-us>
    </section>
@endsection
