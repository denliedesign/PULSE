@extends('layouts.app')
@section('content')

    <x-photo tag="banner-age12-18" class="img-fluid" style="width: 100%; height: 500px; object-fit: cover; object-position: center;"/>

    <div class="container py-5">
        @include('_btn-register')
        <x-photo tag="age12-18" class="img-fluid" style=""/>

        <p class="text-center">Register for your dance classes in Northern Westchester today!</p>
        @include('_btn-register')
    </div>

@endsection
