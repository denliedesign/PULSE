@extends('layouts.app')
@section('content')

    <x-photo tag="banner-adult" class="img-fluid" style="width: 100%; height: 500px; object-fit: cover; object-position: center;"/>

    <div class="container py-5">
        @include('_btn-register')
        <x-photo tag="age-adult" class="img-fluid" style=""/>

        @include('_btn-register')
    </div>

@endsection
