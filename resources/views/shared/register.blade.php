@extends('layouts.app')

@section('content')
    <register role="{{$role}}">
        <meta id="token" name="token" value="{{ csrf_token() }}">
    </register>
@endsection