@extends('layouts.app')
@section('content')

    <x-photo tag="banner-staff" class="img-fluid" style="width: 100%; height: 500px; object-fit: cover; object-position: center;"/>

{{--    <div class="banner-wrap-lg d-none d-md-block">--}}
{{--        <div class="banner-lg within-13-18"></div>--}}
{{--    </div>--}}

{{--    <img src="/images/24-classes-6.JPG" alt="girl doing headstand" class="img-fluid d-block d-md-none">--}}

    <div class="container py-5">
        <h4 class="text-center">Staff</h4>
        <p class="text-center">Check back soon to meet our staff!</p>
        @can('update', \App\Teacher::class)
            <div id="teacher" style="border:2px solid red;" class="my-3 py-1 rounded shadow">
                <span class="fw-bold mx-3">teacher</span>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#teacherModal">
                    Add New
                </button>
                @include('/teachers/form')
            </div>
        @endcan
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 row-cols-lg-4">
            @foreach($teachers as $teacher)
                <!-- staff member -->
                    <div class="staff-member">
                        <div class="d-flex justify-content-center">
                            <img src="{{ asset('/storage/' . $teacher->headshot) }}" alt="" class="img-fluid mx-0 px-0">
                        </div>
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item shadow" style="cursor:pointer;">
                                <h2 class="accordion-header my-1">
                                    <div data-bs-toggle="collapse" data-bs-target="#collapse{{ str_replace(' ', '', $teacher->name) }}" aria-expanded="true" aria-controls="collapse{{ str_replace(' ', '', $teacher->name) }}">
                                        <h6 class="text-center py-0 my-0" style="font-size: 1.2em;">{{ $teacher->name }}</h6>
                                        <h5 class="text-center py-0 my-0" style="font-size: 0.7em; font-weight: normal;">{{ $teacher->title }}</h5>
                                    </div>

                                </h2>
                                <div id="collapse{{ str_replace(' ', '', $teacher->name) }}" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body" style="font-size: 0.75em;">
                                        {!! $teacher->bio !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        @include('/teachers/admin')

                    </div>
                    <!-- end staff member -->
            @endforeach
        </div>
    </div>

@endsection
