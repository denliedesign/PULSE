@extends('layouts.app')
@section('content')

    <div class="banner-wrap-lg d-none d-md-block">
        <div class="banner-lg within-about"></div>
    </div>

    <img src="/images/within-about.jpg" alt="girl doing headstand" class="img-fluid d-block d-md-none">

    <div class="container py-5">
        <h4 class="text-center">About Us</h4>
        <x-content tag="about"/>
{{--        <p>--}}
{{--            Hi!--}}
{{--            <br><br>--}}
{{--            My name is Jennifer Dell, the Artistic Director & Co-Owner of the Pulse. When my husband Bill and I founded this studio 19 years ago, we never could have guessed the way our community would transform over a shared love of dance.--}}
{{--        </p>--}}
        <div class="d-flex justify-content-center">
            <div>
                <img src="/images/jenn-headshot.jpg" alt="jenn headshot" class="img-fluid shadow rounded">
            </div>
{{--            <div class="col-sm">--}}
{{--                <p>--}}
{{--                    I started this studio because I wanted to provide children with the tools to become more responsible, dedicated, and confident adults. We aim to instill leadership, self-esteem, and self-confidence in all our students, but we also believe in ice cream, fun, and just letting kids be kids.--}}
{{--                    <br><br>--}}
{{--                    So why choose the Pulse?  We believe in providing an excellent education from world-class teachers at whatever stage of commitment you are ready for - recreational, community-driven, or competitive.--}}
{{--                    <br><br>--}}
{{--                    At the Pulse you are home, whether you are here for an intense dance training program, or just a way to dance the stress away. The Pulse is more than just a dance studio, we are a family and a support system from the day they put on their first slipper to the day they wear a cap and gown. As a mom of two dancers myself, I can say that this is the greatest investment you could ever make in your child.--}}
{{--                    <br><br>--}}
{{--                    Excited to start taking classes? You can register here and check out our amazing faculty below.--}}
{{--                    <br><br>--}}
{{--                    Welcome to the Pulse!--}}
{{--                </p>--}}
{{--            </div>--}}
        </div>
    </div>

@endsection
