@extends('layouts.app')
@section('content')

    <div class="banner-wrap-lg">
        <div class="banner within-preschool"></div>
    </div>

    <div class="container py-5">
        <h4 class="text-center">2023-2024 Class Schedule</h4>
        @include('_btn-register')
        <div class="row row-cols-1 row-cols-sm-1 row-cols-md-1 row-cols-lg-1">
            <div class="col-sm">
                <img src="/images/23-24-classes_page-0001.jpg" alt="schedule" class="img-fluid">
            </div>
            <div class="col-sm">
                <img src="/images/23-24-classes_page-0002.jpg" alt="schedule" class="img-fluid">
            </div>
        </div>
        @include('_btn-register')
    </div>

@endsection
