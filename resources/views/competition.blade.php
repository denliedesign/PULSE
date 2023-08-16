@extends('layouts.app')
@section('content')

{{--    <div class="banner-wrap">--}}
{{--        <div class="banner within-preschool"></div>--}}
{{--    </div>--}}

    <div>
        <div class="row row-cols-2 row-cols-sm-2 row-cols-md-4 row-cols-lg-4 px-0 mx-0" style="overflow-x: hidden;">
            <img src="/images/comp-1.jpg" alt="" class="img-fluid px-0 mx-0">
            <img src="/images/comp-2.jpg" alt="" class="img-fluid px-0 mx-0">
            <img src="/images/comp-3.jpg" alt="" class="img-fluid px-0 mx-0">
            <img src="/images/comp-4.jpg" alt="" class="img-fluid px-0 mx-0">
        </div>
    </div>

    <div class="container py-5">
        <h4 class="text-center">Competitive Edge</h4>
        <x-content tag="competition"/>
{{--        <p>--}}
{{--            If you are seriously committed and competition is your goal, then Competitive Edge is for you! Comp. Edge, as we like to call it, is a diverse and energetic dance team that performs at various competitions throughout the year. We pride ourselves on the fact that ANY DANCER who wants to be a part of Comp. Edge CAN - auditions are for placement only. With emphasis on the love of dance in a serious environment, dancers can participate in competitive pieces such as modern, tap, ballet, jazz, musical theater, lyrical, and contemporary. Our nationally ranked team competes in approximately 5 regional competitions throughout the season and attends 1 national competition. Here at The Pulse, all dancers are treated equally and attend ALL competitions as a family!--}}
{{--        </p>--}}
    </div>

@endsection
