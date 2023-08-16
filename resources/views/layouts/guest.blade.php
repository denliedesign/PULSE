@extends('layouts.app')
@section('content')

    <div class="d-flex justify-content-center m-5">
        {{ $slot }}
    </div>

    @endsection
