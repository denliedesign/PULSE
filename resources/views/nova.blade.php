@extends('layouts.app')
@section('content')

    <div class="banner-wrap d-none d-md-block">
        <div class="banner within-nova"></div>
    </div>

    <img src="/images/nova-3.jpg" alt="girl doing headstand" class="img-fluid d-block d-md-none">

{{--<div>--}}
{{--    <div class="row row-cols-4 row-cols-sm-4 row-cols-md-4 row-cols-lg-4 px-0 mx-0" style="overflow-x: hidden;">--}}
{{--        <img src="/images/nova-1.jpg" alt="" class="img-fluid px-0 mx-0">--}}
{{--        <img src="/images/nova-2.jpg" alt="" class="img-fluid px-0 mx-0">--}}
{{--        <img src="/images/nova-3.jpg" alt="" class="img-fluid px-0 mx-0">--}}
{{--        <img src="/images/nova-4.jpg" alt="" class="img-fluid px-0 mx-0">--}}
{{--    </div>--}}
{{--</div>--}}

    <div class="container py-5">
        <h4 class="text-center">Nova Jazz</h4>
        <x-content tag="nova"/>
{{--        <p>--}}
{{--            Directed by Jennifer Dell and having recently celebrated their 21st year, Nova Jazz is an innovative, high-energy, dance performance company composed of young adults who wish to use their talent to give back to the community  Highly trained and handpicked, the members of Nova Jazz are proficient in styles including theater dance, jazz, ballet, contemporary,  tap, and acro. Every year. nova jazz, along with nova jazz 2 and nova jazz juniors, select a charity they believe in and dedicate their year to raising money towards their selected charity.--}}
{{--            <br><br>--}}
{{--            In 2023, Nova Jazz planned their first annual benefit concert to raise money for the Mental Health Association of Westchester, but have previously participated in performances and benefits such as Dancers Responding to Aids, Will Dance For Food, Breast Cancer Awareness, as well as at the community nursing home and assisted living facilities. Recently, Nova Jazz traveled to Orlando, FL to perform at Walt Disney World, and also to NYC to participate in a Broadway dance workshop and to perform on the Intrepid.--}}
{{--        </p>--}}
        <div class="d-flex justify-content-center">
            <img src="/images/logo-nova.jpg" alt="" class="img-fluid" style="max-height: 500px; width: auto;">
        </div>
    </div>

@endsection
