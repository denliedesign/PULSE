@extends('layouts.app')
@section('content')

    <div class="banner-wrap-lg d-none d-md-block">
        <div class="banner within-7-8"></div>
    </div>

    <img src="/images/within-7-8.jpg" alt="girl doing headstand" class="img-fluid d-block d-md-none">

    <div class="container py-5">
        {{--        <h4 class="text-center">Dance Classes for Preschoolers Ages 2-4</h4>--}}
        @include('_btn-register')
        <img src="/images/class-7-8.jpg" alt="" class="img-fluid">
        @include('_btn-register')
    </div>

@endsection
