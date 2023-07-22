@extends('layouts.app')
@section('content')

    <div class="banner-wrap-lg">
        <div class="banner-lg within-2-4"></div>
    </div>

    <div class="container py-5">
{{--        <h4 class="text-center">Dance Classes for Preschoolers Ages 2-4</h4>--}}
        <div class="d-flex justify-content-center">
            <img src="/images/logo-pulse-preschool.png" alt="" class="img-fluid">
        </div>
        @include('_btn-register')
        <img src="/images/class-2-4.jpg" alt="" class="img-fluid">
        @include('_btn-register')
    </div>

@endsection
