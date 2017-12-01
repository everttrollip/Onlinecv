@extends('administrator.master')
@section('content')
<section class="content-header">
    <!-- Main content -->
    <section class="content">
      <view-vouchers vouchers="{{$vouchers}}"></view-vouchers>
    </section>
@endsection
