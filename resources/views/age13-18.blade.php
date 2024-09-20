@extends('layouts.app')
@section('content')

    <x-photo tag="banner-age13-18" class="img-fluid" style="width: 100%; height: 500px; object-fit: cover; object-position: center;"/>
    {{--    <div class="banner-wrap-lg d-none d-md-block">--}}
{{--        <div class="banner-lg within-13-18"></div>--}}
{{--    </div>--}}
{{--    <img src="/images/24-classes-6.JPG" alt="girl doing headstand" class="img-fluid d-block d-md-none">--}}

    <div class="container py-5">
        {{--        <h4 class="text-center">Dance Classes for Preschoolers Ages 2-4</h4>--}}
        @include('_btn-register')
{{--        <img src="/images/24-classes-6.JPG" alt="" class="img-fluid">--}}
        <x-photo tag="age13-18" class="img-fluid" style=""/>

        <p class="text-center">Register for your dance classes in Northern Westchester today!</p>
        @include('_btn-register')
    </div>

@endsection
