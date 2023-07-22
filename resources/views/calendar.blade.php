@extends('layouts.app')
@section('content')

    <div class="banner-wrap-lg d-none d-md-block">
        <div class="banner within-preschool"></div>
    </div>

    <img src="/images/preschool-banner.jpg" alt="three preschoolers on their tummies smiling" class="img-fluid d-block d-md-none">

    <div class="container py-5">
        <h4 class="text-center">Calendar</h4>
        <div class="d-flex justify-content-center">
            <iframe src="https://calendar.google.com/calendar/embed?src=097d371e498e1ea117c5563e46338c101158daabfe021b3c00d36f363df69e2b%40group.calendar.google.com&ctz=America%2FNew_York" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
        </div>
    </div>

@endsection
