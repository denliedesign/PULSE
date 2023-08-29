@extends('layouts.app')
@section('title', 'Northern Westchester Dance Classes | The Pulse Performing Arts Studio')
@section('description', 'Discover the Joy of Movement with The Pulse: Your Premier Choice for Northern Westchester Dance Classes! Our Dance Studio Offers a Variety of Styles for All Ages. Join Us and Unleash Your Passion for Dance in Northern Westchester. Explore Our Range of Dance Classes Today')
@section('content')

    <div class="banner-wrap-lg d-none d-md-block">
        <div class="banner within-preschool"></div>
    </div>

    <img src="/images/preschool-banner.jpg" alt="three preschoolers on their tummies smiling" class="img-fluid d-block d-md-none">

    <div class="container py-5">
        <h4 class="text-center">2023-2024 Class Schedule</h4>
        <p class="text-center">Northern Westchester Dance Classes</p>
        @include('_btn-register')
        <div class="row row-cols-1 row-cols-sm-1 row-cols-md-1 row-cols-lg-1">
            <div class="col-sm"><x-photo tag="classes" class="img-fluid" style=""/></div>
            <div class="col-sm"><x-photo tag="classes-2" class="img-fluid" style=""/></div>
        </div>
        <p class="text-center">Register for your dance classes in Northern Westchester today!</p>
        @include('_btn-register')
    </div>
{{--        <div class="row row-cols-1 row-cols-sm-1 row-cols-md-1 row-cols-lg-1">--}}
{{--            <div class="col-sm">--}}
{{--                <img src="/images/23-24-classes.jpg" alt="schedule" class="img-fluid">--}}
{{--            </div>--}}
{{--            <div class="col-sm">--}}
{{--                <img src="/images/23-24-classes_page-0002.jpg" alt="schedule" class="img-fluid">--}}
{{--            </div>--}}
{{--        </div>--}}


@endsection
