@extends('layouts.app')
@section('content')

    <div class="banner-wrap-lg d-none d-md-block">
        <div class="banner-lg within-13-18"></div>
    </div>

    <img src="/images/24-classes-6.JPG" alt="girl doing headstand" class="img-fluid d-block d-md-none">

    <div class="container py-5">
        <h4 class="text-center">Staff</h4>
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
                                <div data-bs-toggle="collapse" data-bs-target="#collapse{{ str_replace(' ', '', $name) }}" aria-expanded="true" aria-controls="collapse{{ str_replace(' ', '', $name) }}">
                                    <h6 class="text-center py-0 my-0" style="font-size: 1.2em;">{{ $name }}</h6>
                                    <p class="text-center py-0 my-0" style="font-size: 0.7em;">{{ $title }}</p>
                                </div>

                            </h2>
                            <div id="collapse{{ str_replace(' ', '', $name) }}" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body txt-crimson" style="font-size: 1.125em;">
                                    {{ $bio }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end staff member -->
            @endforeach
        </div>
    </div>

@endsection
