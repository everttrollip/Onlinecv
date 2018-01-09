@extends('layouts.app')

@section('content')
    <register userrole="{{$role}}">
        <meta id="token" name="token" value="{{ csrf_token() }}">
    </register>
@endsection