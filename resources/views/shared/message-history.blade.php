@extends(((Auth::user()->role == 'hub'))? 'hub.master': ((Auth::user()->role == 'administrator') ? 'administrator.master' : 'student.master'));


@section('content')
<section class="content-header">
    <!-- Main content -->
    <section class="content">
      {{--  content goes here  --}}
       <message-history mainmessage="{{$mainmessage}}" userid="{{Auth::user()->id}}"></message-history>
    </section>
@endsection
