@extends('layouts.app')
@section('content')

    <div class="banner-wrap-lg">
        <div class="banner-lg within-5-6"></div>
    </div>

    <div class="container py-5">
        {{--        <h4 class="text-center">Dance Classes for Preschoolers Ages 2-4</h4>--}}
        @include('_btn-register')
        <img src="/images/class-5-6.jpg" alt="" class="img-fluid">
        @include('_btn-register')
    </div>

@endsection
